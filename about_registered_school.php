<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Registered School</title>
    <?php include('links.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
    /* Custom backdrop styles */
    .custom-backdrop {
        backdrop-filter: blur(5px);
        /* Apply blur effect to the background */
        background-color: rgba(255, 255, 255, 0.7);
        /* Adjust transparency */
    }

    /* Styles to make the modal content fully opaque */
    .modal-content {
        background-color: white;
        /* Modal content background */
        opacity: 1;
        /* Ensure modal content is fully opaque */
    }

    /* Make the modal body scrollable */
    .modal-body {
        max-height: 500px;
        /* Adjust this to your preference */
        overflow-y: auto;
        /* Enable vertical scrolling */
    }
    </style>
    <!-- Bootstrap CSS (for modal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php'); ?>
    <section class="registerd_school mt-5 container mb-5" data-aos="fade-up">
        <h1 class="text-center" data-aos="zoom-in">Our Registered <span>School</span></h1>
        <p class="text-center" data-aos="fade-up" data-aos-delay="100">
            It's actually a very significant name in the yoga world, and the head of all Yogshalas and yoga schools in
            Rishikesh. Our alliance insists on maintaining the highest standards of education and practice in yoga. Our
            being a registered body ensures that yoga schools and teachers do not stray from the traditional values and
            principles of yoga while maintaining modern teaching methodologies.
        </p>

        <p class="text-center" data-aos="fade-up" data-aos-delay="200">
            Recognition, credibility, and access to the network of certified professionals bring benefits to Rishikesh
            Yoga Alliance schools and instructors. We allow schools and teachers to upgrade their skills while
            maintaining the authenticity of the knowledge they seek to pass on and then become part of a global movement
            committed to spreading authentic yoga.
        </p>

        <!-- Button to trigger modal -->
        <div class="button text-center" data-aos="fade-up" data-aos-delay="300">
            <button class="btn_main" data-bs-toggle="modal" data-bs-target="#registerModal">Register Your
                School</button>
        </div>
    </section>


    <!-- Modal structure with larger size -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Added modal-lg class here -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Embedded form with adjusted height -->
                    <iframe src="register_school_form.php" frameborder="0" style="width: 100%; height: 400px;"></iframe>
                    <!-- Adjust height as needed -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Add custom backdrop class when the modal is shown
    var myModalEl = document.getElementById('registerModal');
    myModalEl.addEventListener('show.bs.modal', function() {
        var backdrop = document.createElement('div');
        backdrop.className = 'custom-backdrop modal-backdrop fade show';
        document.body.appendChild(backdrop);
    });

    // Remove the custom backdrop class when the modal is hidden
    myModalEl.addEventListener('hide.bs.modal', function() {
        var backdrop = document.querySelector('.custom-backdrop');
        if (backdrop) {
            backdrop.remove();
        }
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({
        duration: 1200, // Animation duration
        easing: 'ease-in-out', // Easing effect
    });
    </script>
    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>
</body>

</html>