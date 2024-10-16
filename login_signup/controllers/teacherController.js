// backend/controllers/teacherController.js

const Teacher = require('../models/Teacher');
const multer = require('multer');

const registerTeacher = async (req, res, next) => {
    try {
        const {
            teacherName,
            yearOfExperience,
            leadSchools,
            description
        } = req.body;

        // Handle leadSchools, which can be an array or a single string
        let leadSchoolsArray;
        if (Array.isArray(leadSchools)) {
            leadSchoolsArray = leadSchools;
        } else if (typeof leadSchools === 'string') {
            leadSchoolsArray = [leadSchools];
        } else {
            leadSchoolsArray = [];
        }

        // Handle file uploads
        // Certificate Photos
        if (!req.files || !req.files['certificatePhotos'] || req.files['certificatePhotos'].length === 0) {
            return res.status(400).json({ message: 'At least one certificate photo upload is required' });
        }
        const certificatePhotosFiles = req.files['certificatePhotos'];
        const certificatePhotos = certificatePhotosFiles.map(file => ({
            url: file.path,
            public_id: file.filename
        }));

        // Images
        let imagesArray = [];
        if (req.files['images'] && req.files['images'].length > 0) {
            imagesArray = req.files['images'].map(file => ({
                url: file.path,
                public_id: file.filename
            }));
        }

        // Create new Teacher document
        const newTeacher = new Teacher({
            teacherName,
            yearOfExperience,
            leadSchools: leadSchoolsArray,
            certificatePhotos, // Updated to handle multiple certificates
            images: imagesArray,
            description
        });

        await newTeacher.save();

        res.status(201).json({ message: 'Teacher registered successfully', teacher: newTeacher });
    } catch (error) {
        // Handle multer errors
        if (error instanceof multer.MulterError) {
            return res.status(400).json({ message: error.message });
        }
        // Handle validation errors
        if (error.name === 'ValidationError') {
            const messages = Object.values(error.errors).map(val => val.message);
            return res.status(400).json({ message: messages.join(', ') });
        }
        next(error);
    }
};

module.exports = {
    registerTeacher
};
