<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header with Navbar</title>
    <?php include('links.php'); ?>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* General header styles */
        .header {
        background-color: #FFF0BA;
        padding: 10px 20px;
        font-size: 14px;
        top: 0;
        z-index: 1020;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-left .contact-item {
        margin-bottom: 5px;
    }

    /* Adjust margin and spacing between icons and text */
    .header .contact-item i {
        color: black;
    }

    .header .social-icons a {
        color: black;
    }

    .header-right span {
        white-space: nowrap;
        color: black;
    }

    .header-left span {
        color: black;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            align-items: flex-start;
        }

        .header-left {
            display: flex;
            flex-direction: row; /* Keep items in one line */
            justify-content: space-between;
            width: 100%;
            flex-wrap: nowrap; /* Prevent wrapping */
        }

        .header-left .contact-item {
            margin-right: 15px; /* Spacing between the items */
            white-space: nowrap; /* Prevent text from wrapping */
        }

        .header-right {
            width: 100%;
            justify-content: flex-start;
            margin-top: 10px;
        }

        .header .social-icons {
            flex-wrap: wrap;
        }

        .header .social-icons a {
            margin-right: 5px;
            margin-bottom: 5px;
        }
    }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header class="header d-flex justify-content-between align-items-center p-2">
    <div class="header-left d-flex flex-wrap align-items-center">
        <div class="contact-item d-flex align-items-center me-3">
            <i class="fas fa-envelope me-1"></i>
            <span>gmail@example.com</span>
        </div>
        <div class="contact-item d-flex align-items-center me-3">
            <i class="fa-solid fa-phone me-1"></i>
            <span>+123-456-7890</span>
        </div>
        <div class="contact-item d-flex align-items-center">
            <i class="fas fa-map-marker-alt me-1"></i>
            <span>Location</span>
        </div>
    </div>

    <div class="header-right d-flex align-items-center">
        <span class="me-2">Follow us:</span>
        <div class="social-icons d-flex">
            <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="me-2"><i class="fab fa-youtube"></i></a>
            <a href="#" class="me-2"><i class="fa-brands fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</header>


    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo.png" alt="Logo" height="40">
            </a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Tabs in the middle -->
                <ul class="navbar-nav mx-auto">
                    <!-- Home tab -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <!-- About Us dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAboutUs" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAboutUs">
                            <li><a class="dropdown-item" href="aboutassociation.php">About Yoga Association</a></li>
                            <li><a class="dropdown-item" href="aboutrishikesh.php">About Rishikesh</a></li>
                            <li><a class="dropdown-item" href="aboutfounderandmember.php">About Members</a></li>
                        </ul>
                    </li>

                    <!-- Other tabs -->
                    <li class="nav-item"><a class="nav-link" href="about_registered_school.php">Registered School</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_registered_teacher.php">Registered Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="yoga_courses.php">Yoga Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="our_vision.php">Our Vision</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_yoga.php">About Yoga</a></li>
                    <li class="nav-item"><a class="nav-link" href="yoga_gurus.php">Yoga Gurus</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSettings" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownSettings">
                            <li><a class="dropdown-item" href="faq_page.php">FAQs</a></li>
                            <li><a class="dropdown-item" href="privacy_policy.php">Privacy Policy</a></li>
                            <li><a class="dropdown-item" href="term_condition.php">Term and Conditions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                </ul>

                <!-- Signup button on the right -->
                <button id="signupButton" class="btn btn-outline-success me-2">
                    <a href="signup.php" class="text-decoration-none">Sign Up</a>
                </button>

                <!-- Username display (hidden by default) -->
                 <div class="display_name">
                 <span id="usernameDisplay" class="" style="display: none;"></span>

                 </div>

                <!-- Logout Button (hidden by default) -->
                <button id="logoutButton" class="btn btn-outline-danger mx-2" style="display: none;">Logout</button>
            </div>
        </div>
    </nav>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Header Update Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const signupButton = document.getElementById('signupButton');
        const usernameDisplay = document.getElementById('usernameDisplay');
        const logoutButton = document.getElementById('logoutButton');

        // Function to update header based on login state
        function updateHeader() {
          const token = localStorage.getItem('token');
          const username = localStorage.getItem('username');

          if (token && username) {
            // User is logged in
            signupButton.style.display = 'none';
            usernameDisplay.style.display = 'inline';
            usernameDisplay.textContent = `Welcome, ${username}`;
            logoutButton.style.display = 'inline-block';
          } else {
            // User is not logged in
            signupButton.style.display = 'block';
            usernameDisplay.style.display = 'none';
            logoutButton.style.display = 'none';
          }
        }

        // Logout function
        logoutButton.addEventListener('click', function() {
          localStorage.removeItem('token');
          localStorage.removeItem('username');
          updateHeader();
          // Redirect to the home page
          window.location.href = 'index.php';
        });

        // Call updateHeader on page load
        updateHeader();
      });
    </script>

</body>

</html>
