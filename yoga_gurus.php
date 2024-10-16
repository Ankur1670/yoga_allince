<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Guru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        .hero-section {
    position: relative; /* Make sure the overlay is positioned correctly */
    height: 74vh; /* Default height for larger screens */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    margin-top: -1px !important;
    animation: fadeIn 3s ease-in-out;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('./images/aadiyogi.webp') no-repeat center center / cover;
}

.hero-section h1 {
    font-size: 2.5rem; /* Default font size for large screens */
    margin-right: 600px;
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
        .guru-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .guru-image {
            position: relative; /* Positioning context for the border */
        }

        .guru-image img {
            width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .orange-border {
            position: absolute;
            right: 0; /* Positioning to the right side */
            top: 0;
            bottom: 0;
            width: 5px; /* Width of the orange border */
            background-color: #ff6f20; /* Orange color */
            border-top-right-radius: 10px; /* Rounded corners */
            border-bottom-right-radius: 10px; /* Rounded corners */
        }


        .v-border {
            position: absolute;
            right: 0; /* Positioning to the right side */
            top: 0;
            bottom: 0;
            width: 5px; /* Width of the orange border */
            background-color: #212529; /* Orange color */
            border-top-right-radius: 10px; /* Rounded corners */
            border-bottom-right-radius: 10px; /* Rounded corners */
        }

        .guru-info {
            padding: 20px;
        }

        .guru-info h2 {
            color: #173B45;
        }

        .guru-info p {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<?php include('header.php'); ?>

<body>

<section class="hero-section">
        <div class="hero-content" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-in-out">
            <h1>Our <span>Gurus</span></h1>
            <p class="text-white"></p>
            </div>
    </section>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Yoga <span>Gurus</span></h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card guru-card">
                    <div class="row no-gutters">
                        <div class="col-md-6 guru-image">
                            <img src="./images/our_guru_img_1.jpg" alt="Guru">
                            <div class="orange-border"></div> <!-- Orange border placed here -->
                        </div>
                        <div class="col-md-6 guru-info">
                            <div class="card-body">
                                <h2 class="card-title">Guru: Patanjali (circa 200 BCE - 200 CE)</h2>
                                <p class="card-text">Patanjali is best known for compiling the Yoga Sutras, a seminal text that serves as a foundational guide to the practice and philosophy of yoga. The Sutras outline the eight limbs of yoga (Ashtanga), which include ethical precepts (Yama and Niyama), physical postures (Asana), breath control (Pranayama), sensory withdrawal (Pratyahara), concentration (Dharana), meditation (Dhyana), and blissful union (Samadhi). Patanjali's teachings emphasize self-discipline and ethical living as prerequisites for spiritual development, making his work a crucial reference for practitioners and scholars alike.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card guru-card">
                    <div class="row no-gutters">
                        <div class="col-md-6 guru-image">
                            <img src="https://via.placeholder.com/600x400.png?text=Guru+Image" alt="Guru">
                            <div class="v-border"></div> <!-- Orange border placed here -->
                        </div>
                        <div class="col-md-6 guru-info">
                            <div class="card-body">
                                <h2 class="card-title">Guru: Buddha (circa 563 - 483 BCE)</h2>
                                <p class="card-text">Siddhartha Gautama, known as Buddha, established a path of enlightenment that integrates meditation and mindfulness, aligning closely with many yogic practices. His Four Noble Truths and the Eightfold Path provide a framework for understanding suffering and achieving liberation. While Buddha’s teachings are distinct from traditional yoga, the emphasis on mindfulness and meditation has greatly influenced modern yoga practices, especially in the West.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card guru-card">
                    <div class="row no-gutters">
                        <div class="col-md-6 guru-image">
                            <img src="https://via.placeholder.com/600x400.png?text=Guru+Image" alt="Guru">
                            <div class="orange-border"></div> <!-- Orange border placed here -->
                        </div>
                        <div class="col-md-6 guru-info">
                            <div class="card-body">
                                <h2 class="card-title">Guru: Maharishi Mahesh Yogi (1918 - 2008)</h2>
                                <p class="card-text"> Maharishi Mahesh Yogi introduced Transcendental Meditation (TM) in the 1960s, which emphasized a simple, natural technique for achieving a deep state of relaxation and mental clarity. He attracted a wide following, including celebrities, and established the Maharishi International University. His work focused on the benefits of meditation for personal development, social change, and global peace, bridging ancient yogic principles with modern science.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>


</body>

</html>
