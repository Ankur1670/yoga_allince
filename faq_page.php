<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <?php include('links.php'); ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <style>
   body {
    background-color: #f8f9fa;
}

.faq-section {
    display: flex;
    align-items: flex-start;
    max-width: 1200px;
    margin: 50px auto;
    gap: 20px;
    flex-wrap: wrap; /* Allow wrapping for smaller screens */
}

.faq-container {
    flex: 2;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    min-width: 300px; /* Ensure a minimum width */
}

.faq-item {
    margin-bottom: 15px;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.faq-question {
    padding: 15px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #e9ecef;
    border-radius: 5px;
}

.faq-answer {
    padding: 15px;
    display: none;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.active .faq-answer {
    display: block;
    max-height: 500px; /* Adjust max-height for animation */
    padding: 15px;
}

.icon {
    font-size: 20px;
    transition: transform 0.3s ease;
}

.active .icon {
    transform: rotate(180deg);
}

.faq-image {
    flex: 1;
    max-width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .faq-section {
        flex-direction: column; /* Stack items vertically on smaller screens */
        align-items: center; /* Center the items */
    }

    .faq-container {
        flex: none; /* Allow the container to take full width */
        width: 100%; /* Set width to 100% for mobile */
        margin-bottom: 20px; /* Add spacing below the FAQ container */
    }

    .faq-image {
        max-width: 100%; /* Allow the image to scale down on mobile */
        margin-top: 20px; /* Add some spacing above the image */
    }
}

.contact-section {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <div class="container">
        <h1 class="text-center mb-4 mt-5" data-aos="fade-up">Frequently Asked <span>Questions</span> </h1>
        <div class="faq-section">
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What is Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga is a group of physical, mental, and spiritual practices that originated in ancient
                            India. It is a discipline that helps individuals achieve a balanced state of body and mind.
                        </p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>How can I practice Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>You can practice yoga by joining classes, following online tutorials, or using yoga apps.
                            Regular practice is essential to experience its benefits.</p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>


                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>What are the benefits of Yoga?</span>
                        <span class="icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yoga offers numerous benefits, including improved flexibility, strength, mental clarity, and
                            stress reduction. It can also enhance overall well-being and promote relaxation.</p>
                    </div>
                </div>
                <!-- More FAQ items here... -->
            </div>
            <img src="https://via.placeholder.com/300" alt="Yoga Image" class="faq-image" data-aos="zoom-in">
        </div>
    </div>


    <?php include('footer.php'); ?>

    <script>
    function toggleFAQ(element) {
        const faqItem = element.parentElement;
        faqItem.classList.toggle("active");
    }
    </script>
    <script>
    AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>

</body>

</html>