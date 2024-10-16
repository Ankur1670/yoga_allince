// backend/routes/school.js

const express = require('express');
const router = express.Router();
const { registerSchool } = require('../controllers/schoolController');
const upload = require('../middleware/upload');

// Route: POST /api/school/register
router.post('/register', upload.single('certificatePhoto'), registerSchool);

module.exports = router;
