// backend/routes/teacher.js

const express = require('express');
const router = express.Router();
const { registerTeacher } = require('../controllers/teacherController');
const uploadTeacherImage = require('../middleware/uploadTeacher.js');

// Define multiple file upload fields
const cpUpload = uploadTeacherImage.fields([
    { name: 'certificatePhotos', maxCount: 5 }, // Allow up to 5 certificates; adjust as needed
    { name: 'images', maxCount: 10 } // Adjust maxCount as needed
]);

// Route: POST /api/teacher/register
router.post('/register', cpUpload, registerTeacher);

module.exports = router;
