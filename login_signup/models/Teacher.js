// backend/models/Teacher.js

const mongoose = require('mongoose');

const teacherSchema = new mongoose.Schema({
    teacherName: {
        type: String,
        required: [true, 'Teacher name is required'],
        trim: true
    },
    yearOfExperience: {
        type: Number,
        required: [true, 'Year of experience is required'],
        min: [0, 'Year of experience cannot be negative']
    },
    leadSchools: {
        type: [String],
        required: [true, 'At least one lead school is required'],
        validate: {
            validator: function(v) {
                return v.length > 0;
            },
            message: 'At least one lead school is required.'
        }
    },
    certificatePhotos: { // Changed to an array
        type: [{
            url: {
                type: String,
                required: [true, 'Certificate photo URL is required']
            },
            public_id: {
                type: String,
                required: [true, 'Certificate photo public ID is required']
            }
        }],
        required: [true, 'At least one certificate photo is required'],
        validate: {
            validator: function(v) {
                return v.length > 0;
            },
            message: 'At least one certificate photo is required.'
        }
    },
    images: [{
        url: {
            type: String,
            required: [true, 'Image URL is required']
        },
        public_id: {
            type: String,
            required: [true, 'Image public ID is required']
        }
    }],
    description: {
        type: String,
        required: [true, 'Description is required'],
        trim: true
    },
    createdAt: {
        type: Date,
        default: Date.now
    }
});

module.exports = mongoose.model('Teacher', teacherSchema);
