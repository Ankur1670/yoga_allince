// generate_jwt_secret.js

const crypto = require('crypto');

// Generate a 64-byte (512-bit) random secret and convert it to a hexadecimal string
const jwtSecret = crypto.randomBytes(64).toString('hex');

console.log('Your JWT_SECRET is:', jwtSecret);
