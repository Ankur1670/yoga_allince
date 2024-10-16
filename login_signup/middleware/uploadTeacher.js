// backend/middlewares/uploadTeacher.js

const multer = require('multer');
const { CloudinaryStorage } = require('multer-storage-cloudinary');
const cloudinary = require('../config/cloudinary.js');

// Configure Cloudinary storage for Teacher uploads
const storage = new CloudinaryStorage({
    cloudinary: cloudinary,
    params: {
        folder: 'teacher_uploads', // Folder name in Cloudinary
        allowed_formats: ['jpg', 'jpeg', 'png', 'gif'], // Allowed image formats
    },
});

// Initialize multer with storage and file filters
const uploadTeacherImage = multer({
    storage: storage,
    limits: { fileSize: 20 * 1024 * 1024 }, // 20MB limit per image; adjust as needed
    fileFilter: (req, file, cb) => {
        const fileTypes = /jpeg|jpg|png|gif/;
        const extName = fileTypes.test(file.originalname.toLowerCase());
        const mimeType = fileTypes.test(file.mimetype);
        if (extName && mimeType) {
            return cb(null, true);
        } else {
            cb(new Error('Unsupported file type. Only JPG, JPEG, PNG, and GIF are allowed.'));
        }
    },
});

module.exports = uploadTeacherImage;
