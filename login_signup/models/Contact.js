const mongoose = require('mongoose');

const contactSchema = new mongoose.Schema({
  firstName: {
    type: String,
    required: [true, 'Please provide your first name'],
    minlength: 2,
    maxlength: 50,
  },
  lastName: {
    type: String,
    required: [true, 'Please provide your last name'],
    minlength: 2,
    maxlength: 50,
  },
  email: {
    type: String,
    required: [true, 'Please provide your email'],
    match: [
      /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/,
      'Please provide a valid email',
    ],
  },
  phone: {
    type: String,
    required: [true, 'Please provide your phone number'],
    match: [/^\+?[1-9]\d{1,14}$/, 'Please provide a valid phone number'],
  },
  gender: {
    type: String,
    enum: ['Male', 'Female', 'Other'],
    required: [true, 'Please select your gender'],
  },
  message: {
    type: String,
    required: [true, 'Please provide your message'],
    maxlength: 1000,
  },
}, { timestamps: true });

module.exports = mongoose.model('Contact', contactSchema);
