// backend/models/User.js
const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
  username: {
    type: String,    
    required: [true, 'Please provide a username'],
    unique: true,
    minlength: 3,
    maxlength: 30,
  },
  firstName: {
    type: String,
    required: [true, 'Please provide a first name'],
    minlength: 2,
    maxlength: 50,
  },
  middleName: {
    type: String,
    maxlength: 50,
    default: '', // Optional field
  },
  lastName: {
    type: String,
    required: [true, 'Please provide a last name'],
    minlength: 2,
    maxlength: 50,
  },
  country: {
    type: String,
    required: [true, 'Please provide your country'],
    maxlength: 100,
  },
  email: {
    type: String,
    required: [true, 'Please provide an email'],
    unique: true,
    match: [
      /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/,
      'Please provide a valid email',
    ],
  },
  password: {
    type: String,
    required: [true, 'Please provide a password'],
    minlength: 6,
  },
}, { timestamps: true });

module.exports = mongoose.model('User', userSchema);
