<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <?php include('links.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <section class="contact_us container" data-aos="fade-up" data-aos-duration="1200">
        <h1 class="text-center mt-5">Contact <span>Us</span></h1>
        <div class="container my-5">
            <div class="row">
                <!-- Contact Form Section -->
                <div class="container my-2">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                            <div class="contact-form p-4">
                                <h2 class="mb-4 text-center">Contact Us</h2>
                                <form id='contactForm'>
                                    <!-- Name Section with Labels -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label mx-2">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="firstName"
                                                placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label mx-2">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="lastName"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="contactEmail" class="form-label mx-2">E-mail <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="contactEmail" placeholder="Email"
                                            required>
                                    </div>

                                    <!-- Phone and Gender Section -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label mx-2">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gender" class="form-label mx-2">Gender <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="gender" required>
                                                <option value="" disabled selected>Select your gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="mb-3">
                                        <label for="message" class="form-label mx-2">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Message"
                                            required></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn_main">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Map Section -->
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <iframe class="w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345096176!2d144.95592531531692!3d-37.817209979751826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727db5c6f56310!2sFlinders%20Street%20Station!5e0!3m2!1sen!2sin!4v1630939383335!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your message has been sent successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const email = document.getElementById('contactEmail').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const gender = document.getElementById('gender').value.trim();
        const message = document.getElementById('message').value.trim();

        try {
            const response = await fetch('http://localhost:5000/api/contact/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    firstName,
                    lastName,
                    email,
                    phone,
                    gender,
                    message
                })
            });

            const data = await response.json();

            if (response.ok) {
                // Show success modal
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();

                // Reset the form after successful submission
                contactForm.reset();
            } else {
                alert(data.message || 'Something went wrong');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while sending your message');
        }
    });
    </script>
    </section>

    <!-- EmailJS SDK -->




    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>

</body>

</html>