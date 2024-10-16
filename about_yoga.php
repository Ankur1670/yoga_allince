<!DOCTYPE html>
<html lang="en">
<style>
    /* Global Styles */



    /* Hero Section */
    .hero-section {
        background: url('./images/sightseeing_box1.jpg') no-repeat center center;
        background-size: cover;
        height: 60vh; /* Reduced height */
        display: flex;
        align-items: center;
        color: #fff;
        margin-top: -1px !important;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        margin-bottom: 40px;
    }

    /* About Section */
    .about-section {
        padding: 50px 20px;
        background-color: #f7f7f7;
        text-align: center;
    }

    .about-section h2 {
        margin-bottom: 20px;
    }

    /* Cards */
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-title {
        font-size: 1.5rem;
        margin: 15px 0;
    }

    /* History Section */
    .history-section {
        padding: 50px 20px;
        background-color: #fff;
        text-align: center;
    }

    .history-section p {
        margin-top: 15px;
        color: #555;
    }

    /* Benefits Section */
    .benefits-section {
        padding: 50px 20px;
        background-color: white !important;
        text-align: center;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .benefit {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .benefit:hover {
        transform: translateY(-5px);
    }

    /* Testimonials Section */
    .testimonials-section {
        padding: 50px 20px;
        background-color: #173B45;
        color: #fff;
        text-align: center;
    }

    .testimonial {
        margin: 15px 0;
    }

    .testimonial-card {
        background-color: #fff;
        color: #333;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    /* Call-to-Action Section */
    .cta-section {
        padding: 50px 20px;
        background-color: #f1f1f1;
        text-align: center;
    }

    .cta-section a {
        display: inline-block;
        padding: 15px 30px;
        background-color: #173B45;
        color: #fff;
        border-radius: 25px;
        font-size: 1.2rem;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out;
    }

    .cta-section a:hover {
        background-color: white;
        color: #173B45;
        border: 2px solid #173B45;
    }

    /* Animations */
    @keyframes fadeInTitle {
        0% { opacity: 0; transform: translateY(-30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInText {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .benefits-grid {
            grid-template-columns: 1fr;
        }

        .hero-section {
            height: 50vh; /* Adjust height for smaller screens */
        }
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Webpage with Bootstrap and AOS</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-section text-center text-white d-flex align-items-center" data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center">Welcome to the World of <span>Yoga</span></h1>
            <p class="text-white font-bold">Discover peace, mindfulness, and well-being through the timeless practice of yoga.</p>
        </div>
    </section>

    <!-- About Yoga Section -->
    <section class="about-section py-5 bg-light" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center mb-5">About <span>Yoga</span></h1>
            <p class="text-center mx-auto" style="max-width: 800px;">Yoga is a holistic practice that integrates physical postures, breath control, meditation, and ethical principles to promote overall well-being. Originating in ancient India, yoga emphasizes the connection between the mind, body, and spirit, fostering a sense of harmony and balance in practitioners.</p>
        </div>
    </section>

    <!-- Types of Yoga Section -->
    <section class="types-section py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center mb-5">Types of <span>Yoga</span></h1>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Hatha Yoga</h5>
                            <p class="card-text">This kind of practice incorporates physical postures and breathing, and it forms the foundation for other styles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Vinyasa Yoga</h5>
                            <p class="card-text"> It includes smoothly connected flowing sequences of different movement of various postures all set according to the breath.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Kundalini Yoga</h5>
                            <p class="card-text">It involves a practice of applying the postures, breath, and chant to realize the spiritual energy.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Ashtanga Yoga</h5>
                            <p class="card-text">The intense style of the same, with a set sequence of postures, it emphasizes strength and endurance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Iyengar Yoga</h5>
                            <p class="card-text">This style is where an emphasis on precise alignment and props is brought to ensure the postures are correctly performed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Restorative Yoga</h5>
                            <p class="card-text">This involves relaxation and restoration through gentle use of support and poses to reach deep stages of relaxation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Bikram Yoga</h5>
                            <p class="card-text">This is practiced in the hot room and forms a fixed sequence of 26 poses.</p>
                        </div>
                    </div>
                </div> 




            </div>
        </div>
    </section>

    <!-- History of Yoga Section -->
    <section class="history-section py-5 bg-light" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center mb-5">History of <span>Yoga</span></h1>
            <div class="timeline">
                <div class="row">
                    <div class="col-md-6 mb-4" data-aos="flip-right" data-aos-duration="800">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">3000 B.C.</h5>
                                <p class="card-text">Yoga's origins can be traced back over 5,000 years to ancient India, with evidence found in the Indus Valley Civilization.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="flip-right" data-aos-duration="800">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">1500 B.C.</h5>
                                <p class="card-text">The Rigveda, one of the oldest sacred texts, contains the first references to yoga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits of Yoga Section -->
    <section class="benefits-section py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h1 class="text-center mb-5">Benefits of <span>Yoga</span></h1>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Improves Flexibility</h5>
                            <p class="card-text">Yoga helps improve flexibility, allowing the body to move with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Boosts Mental Health</h5>
                            <p class="card-text">Yoga incorporates breathing techniques and meditation, reducing anxiety and improving mood.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-duration="800">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Builds Strength</h5>
                            <p class="card-text">Yoga poses strengthen muscles, contributing to better balance, posture, and endurance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    
    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
