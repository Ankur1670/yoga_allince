<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vision</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <?php include('links.php'); ?>

    <style>
  

      

      /* Hero Section Styling */
.hero-section {
    position: relative; /* Make sure the overlay is positioned correctly */
    height: 50vh; /* Default height for larger screens */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    margin-top: -1px !important;
    animation: fadeIn 3s ease-in-out;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/yoga_vision_img.png') no-repeat center center / cover;
}

.hero-section h1 {
    font-size: 2.5rem; /* Default font size for large screens */
}

.hero-section span {
    color: #fff0ba; /* Accent color */
}

.hero-section p {
    font-size: 1.1rem; /* Default paragraph size for large screens */
    font-weight: 600;
}

/* Responsive adjustments */

/* Adjustments for tablet view */
@media (max-width: 768px) {
    .hero-section {
        height: 40vh; /* Reduce height on tablets */
    }

    .hero-section h1 {
        font-size: 2rem; /* Adjust font size for tablet */
        margin-left: 13px;
    }

    .hero-section p {
        font-size: 1rem; /* Adjust paragraph size for tablet */
        margin-left: 13px;

    }
}

/* Adjustments for mobile view */
@media (max-width: 576px) {
    .hero-section {
        height: 30vh; /* Further reduce height on mobile */
    }

    .hero-section h1 {
        font-size: 1.5rem; /* Adjust font size for mobile */
    }

    .hero-section p {
        font-size: 0.9rem; /* Adjust paragraph size for mobile */
    }
}

        /* Vision Section Styling */
        .vision-section {
    padding: 3rem 1.5rem;
    background-color: #f9f9f9;
}

.vision-section .key-points {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.vision-point {
    flex: 1 1 calc(33.333% - 1.5rem); /* Default for larger screens (3 per row) */
    background: #ffffff;
    border-radius: 8px;
    padding: 2rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

/* Hover effect */
.vision-point:hover {
    transform: translateY(-10px);
}

/* Media Queries for Responsive Design */
@media (max-width: 768px) { /* Tablet view */
    .vision-point {
        flex: 1 1 calc(50% - 1.5rem); /* 2 per row on tablets */
    }
}

@media (max-width: 576px) { /* Mobile view */
    .vision-point {
        flex: 1 1 100%; /* 1 per row on mobile */
    }
}


        /* Image with Text Overlay Section Styling */
        .image-text-section {
    position: relative;
    height: 60vh; /* Default height for larger screens */
    overflow: hidden; /* Prevent overflow of content */
}

.image-text-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-text-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    background: rgba(0, 0, 0, 0.6);
    padding: 1.5rem;
    border-radius: 8px;
    transition: opacity 0.5s ease, transform 0.5s ease; /* Animation for fading */
}

/* Animation for content when it appears */
.image-text-content.fade-in {
    opacity: 1;
    transform: translate(-50%, -50%);
}

/* Adjustments for tablet view */
@media (max-width: 768px) {
    .image-text-section {
        height: 50vh; /* Reduce height on tablet */
        
    }

    .image-text-content {
        padding: 1rem; /* Adjust padding for smaller screens */
        bottom:10% ;
        left:2%
    }
}

/* Adjustments for mobile view */
@media (max-width: 576px) {
    .image-text-section {
        height: 40vh; /* Further reduce height on mobile */
    }

    .image-text-content {
        padding: 0.75rem; /* Further reduce padding */
    }

    h3 {
        font-size: 1.3rem; /* Adjust heading size */
    }

    p {
        font-size: 0.5rem; /* Adjust paragraph size */
    }
}


        /* Inspirational Quote Section Styling */
        .quote-section {
            padding: 3rem;
            background: #FFf0ba;
            color: white;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out; /* Medium animation duration */
        }

        .quote-section h2 {
            font-weight: bold;
            color:#45060b;
        }

        /* CTA Section Styling */
        .cta-section {
            padding: 3rem 1.5rem;
            text-align: center;
        }

        .cta-section a {
            background: #45060b;            ;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            transition: background 0.2s ease-in-out;
        }

        .cta-section a:hover {
            background: white;
            border:2px solid #45060b;
            color: #45060b;
            box-shadow: inset 0 0 10px #45060b;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-in-out">
            <h1>Our <span>Vision</span></h1>
            <p class="text-white">We aim to share the ancient practice of yoga worldwide, enhancing lives and fostering holistic well-being.</p>
            </div>
    </section>

    <!-- Vision Statement Section with Key Points -->
    <section class="vision-section">
        <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out" class='text-center mb-5'>Our Guiding <span>Vision</span></h1>
        <div class="key-points">
            <div class="vision-point" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <h4>Promote Authenticity</h4>
                <p>To uphold the traditional values and teachings of yoga, ensuring that all registered schools and teachers provide authentic and high-quality instruction.</p>
            </div>
            <div class="vision-point" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <h4>Enhance Education</h4>
                <p>To offer continuous professional development opportunities for teachers, ensuring they stay updated with modern practices while honoring ancient wisdom.</p>
            </div>
            <div class="vision-point" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <h4>Holistic Well-being</h4>
                <p>Encourage integral aspects of yoga and contribute toward facilitating healthy physical, mental, and spiritual well-being for all our community members.</p>
            </div>
            <div class="vision-point" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <h4>Foster Community</h4>
                <p>To create a supportive and inclusive community among yoga schools, teachers, and students, encouraging collaboration and sharing of knowledge.</p>
            </div>
            <div class="vision-point" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200" data-aos-easing="ease-in-out">
                <h4>Global Recognition</h4>
                <p>Create Rishikesh as the global hub for yoga education, among the learners and practitioners from all walks of life around the world.</p>
            </div>
        </div>
    </section>

    <!-- Image with Text Overlay Section -->
    <section class="image-text-section">
        <img src="./images/vision_img2.jpg" alt="Our Vision Image">
        <div class="image-text-content" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
            <h3>Creating a Healthier Future</h3>
            <p class="text-white">Join us in our mission to promote personal growth and mindfulness through the practice of yoga.</p>
        </div>
    </section>

    <!-- Inspirational Quote Section -->
    <section class="quote-section mt-5">
        <h2 data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-in-out">"Yoga is the journey of the self, through the self, to the self" - The Bhagavad Gita</h2>
        <p>We are committed to leading you through a journey of body, mind, and soul. </p>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
        <h3 data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out" class='mb-3'>Ready to Begin Your Journey?</h3>
        <a href="#contact" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out" class='mt-5'>Join Us Now</a>
    </section>
    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200, // Medium duration for smoother animation
            easing: 'ease-in-out', // Smooth easing function
        });
    </script>
   

</body>

</html>
