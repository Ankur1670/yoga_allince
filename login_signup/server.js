// backend/server.js

const express = require('express');
const dotenv = require('dotenv');
const mongoose = require('mongoose');
const cors = require('cors');
const morgan = require('morgan'); // For logging HTTP requests
const helmet = require('helmet'); // For securing HTTP headers
const compression = require('compression'); // For compressing response bodies
const authRoutes = require('./routes/auth');
const contactRoutes = require('./routes/contact'); // Import contact routes
const schoolRoutes = require('./routes/school'); // Import school routes
const teacherRoutes = require('./routes/teacher'); // Import teacher routes

// Load environment variables from .env file
dotenv.config();

// Initialize Express app
const app = express();

// Middleware Setup

// Set security-related HTTP headers
app.use(helmet());

// Compress all routes to reduce response sizes
app.use(compression());

// Enable CORS with default settings (allow all origins)
app.use(cors());

// Log HTTP requests for debugging (use 'dev' for development)
app.use(morgan('dev'));

// Parse incoming JSON requests and put the parsed data in req.body
app.use(express.json());

// Parse URL-encoded data (optional, if needed for forms)
app.use(express.urlencoded({ extended: true }));

// Routes
app.use('/api/auth', authRoutes);
app.use('/api/contact', contactRoutes); // Use contact routes
app.use('/api/school', schoolRoutes); // Use school routes
app.use('/api/teacher', teacherRoutes); // Use teacher routes

// Root Endpoint
app.get('/', (req, res) => {
  res.send('API is running...');
});

// Global Error Handling Middleware
app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).json({
    message: err.message || 'Something went wrong!',
  });
});

// Connect to MongoDB and Start the Server
const PORT = process.env.PORT || 5000;

// Mongoose connection options
const mongooseOptions = {
  useNewUrlParser: true,
  useUnifiedTopology: true,
  // useCreateIndex: true, // Deprecated in Mongoose 6+
  // useFindAndModify: false, // Deprecated in Mongoose 6+
};

// Connect to MongoDB
mongoose
  .connect(process.env.MONGO_URI, mongooseOptions)
  .then(() => {
    console.log('MongoDB connected successfully');

    // Start the server after successful DB connection
    app.listen(PORT, () => {
      console.log(`Server running on port ${PORT}`);
    });
  })
  .catch((error) => {
    console.error('MongoDB connection failed:', error.message);
    process.exit(1); // Exit process with failure
  });
