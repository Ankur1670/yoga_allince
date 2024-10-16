// backend/controllers/schoolController.js

const School = require('../models/School');

const registerSchool = async (req, res, next) => {
    try {
        // Log incoming form data for debugging
        console.log('Form Data:', req.body);
        console.log('Certificate Photo File:', req.file);

        const {
            schoolName,
            founderName,
            foundedYear,
            address,
            websiteLink,
            teachers,
            description,
            courses,
            totalTeachers
        } = req.body;

        // Handle teachers, which can be an array or a single string
        let teachersArray;
        if (Array.isArray(teachers)) {
            teachersArray = teachers;
        } else {
            teachersArray = [teachers];
        }

        // Handle courses, which can be an array or a single string
        let coursesArray;
        if (Array.isArray(courses)) {
            coursesArray = courses;
        } else {
            coursesArray = [courses];
        }

        // Handle file upload for certificatePhoto
        if (!req.file) {
            return res.status(400).json({ message: 'Certificate photo upload is required' });
        }

        const certificatePhoto = {
            url: req.file.path,
            public_id: req.file.filename
        };

        // Create new School document
        const newSchool = new School({
            schoolName,
            founderName,
            foundedYear,
            address,
            websiteLink,
            teachers: teachersArray,
            description,
            courses: coursesArray,
            totalTeachers,
            certificatePhoto
        });

        await newSchool.save();

        res.status(201).json({ message: 'School registered successfully', school: newSchool });
    } catch (error) {
        // If multer encountered an error, send a 400 response
        if (error instanceof multer.MulterError || error.message.includes('Only images are allowed')) {
            return res.status(400).json({ message: error.message });
        }
        next(error);
    }
};

module.exports = {
    registerSchool
};
