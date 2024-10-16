const Contact = require('../models/Contact');

// @desc    Submit contact form
// @route   POST /api/contact/submit
// @access  Public
const submitContact = async (req, res) => {
  const { firstName, lastName, email, phone, gender, message } = req.body;

  // Validate input
  if (!firstName || !lastName || !email || !phone || !gender || !message) {
    return res.status(400).json({ message: 'Please provide all required fields' });
  }

  try {
    // Create contact entry
    const contact = await Contact.create({
      firstName,
      lastName,
      email,
      phone,
      gender,
      message,
    });

    res.status(201).json({
      message: 'Your message has been received. We will get back to you shortly.',
      contactId: contact._id,
    });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Server error' });
  }
};

module.exports = {
  submitContact,
};
