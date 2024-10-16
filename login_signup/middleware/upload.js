// backend/middlewares/upload.js

const multer = require('multer');
const { CloudinaryStorage } = require('multer-storage-cloudinary');
const cloudinary = require('../config/cloudinary.js');

// Configure Cloudinary storage for certificate photos
const storage = new CloudinaryStorage({
    cloudinary: cloudinary,
    params: {
        folder: 'school_certificate_uploads', // Folder name in Cloudinary
        allowed_formats: ['jpg', 'jpeg', 'png', 'gif'], // Allowed image formats
    },
});

// Initialize multer with storage and file filters
const upload = multer({
    storage: storage,
    limits: { fileSize: 5 * 1024 * 1024 }, // 5MB limit
    fileFilter: (req, file, cb) => {
        const fileTypes = /jpeg|jpg|png|gif/;
        const extName = fileTypes.test(file.originalname.toLowerCase());
        const mimeType = fileTypes.test(file.mimetype);
        if (extName && mimeType) {
            return cb(null, true);
        } else {
            cb(new Error('Only images are allowed for Certificate Photo'));
        }
    },
});

module.exports = upload;
