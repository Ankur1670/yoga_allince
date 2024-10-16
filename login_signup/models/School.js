// backend/models/School.js

const mongoose = require('mongoose');

const schoolSchema = new mongoose.Schema({
    schoolName: {
        type: String,
        required: true,
        trim: true
    },
    founderName: { // New Field
        type: String,
        required: true,
        trim: true
    },
    foundedYear: { // New Field
        type: Number,
        required: true,
        min: 1800,
        max: new Date().getFullYear()
    },
    address: { // New Field
        type: String,
        required: true,
        trim: true
    },
    websiteLink: { // New Field
        type: String,
        required: true,
        trim: true,
        validate: {
            validator: function(v) {
                return /^(ftp|http|https):\/\/[^ "]+$/.test(v);
            },
            message: props => `${props.value} is not a valid URL!`
        }
    },
    teachers: { // New Field (Array of Strings)
        type: [String],
        required: true
    },
    totalTeachers: { // New Field
        type: Number,
        required: true,
        min: 1
    },
    certificatePhoto: { // New Field
        url: {
            type: String,
            required: true
        },
        public_id: {
            type: String,
            required: true
        }
    },
    description: { // New Field
        type: String,
        required: true,
        trim: true
    },
    courses: { // Existing Field (if applicable)
        type: [String],
        required: true
    },
    createdAt: {
        type: Date,
        default: Date.now
    }
});

module.exports = mongoose.model('School', schoolSchema);
