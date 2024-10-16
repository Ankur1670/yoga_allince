// backend/routes/auth.js
const express = require('express');
const router = express.Router();
const { registerUser, loginUser, getMe } = require('../controllers/authController');
const auth = require('../middleware/auth');

// Register Route
router.post('/register', registerUser);

// Login Route
router.post('/login', loginUser);

// Get Current User Route (Protected)
router.get('/me', auth, getMe);

module.exports = router;
