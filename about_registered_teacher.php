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
            backdrop-filter: blur(5px); /* Apply blur effect to the background */
            background-color: rgba(255, 255, 255, 0.7); /* Adjust transparency */
        }
        
        /* Styles to make the modal content fully opaque */
        .modal-content {
            background-color: white; /* Modal content background */
            opacity: 1; /* Ensure modal content is fully opaque */
        }
        
        /* Make the modal body scrollable */
        .modal-body {
            max-height: 500px; /* Adjust this to your preference */
            overflow-y: auto; /* Enable vertical scrolling */
        }
    </style>
    <!-- Bootstrap CSS (for modal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php'); ?>

    <section class="registerd_school mt-5 container mb-5" data-aos="fade-up">
    <h1 class="text-center" data-aos="zoom-in">Our Registered <span>Teacher</span></h1>
    <p class="text-center" data-aos="fade-up" data-aos-delay="100">
        At Rishikesh Yoga Alliance, we proudly register and certify yoga teachers who uphold the highest standards of traditional yoga teachings. As the head of all Yogshalas in Rishikesh, our alliance ensures that every teacher meets the rigorous qualifications necessary to deliver authentic and effective yoga instruction.
    </p>

    <p class="text-center" data-aos="fade-up" data-aos-delay="200">
        By becoming a registered teacher with Rishikesh Yoga Alliance, you gain not only credibility but also access to a vast network of reputable yoga schools, both locally and globally. Our certification signifies your commitment to maintaining the essence of yoga, blending ancient wisdom with modern techniques, while adhering to the discipline and ethics that define the practice. Join us to elevate your teaching career and be part of a global community that values integrity and tradition in yoga.
    </p>

    <!-- Button to trigger modal -->
    <div class="button text-center" data-aos="fade-up" data-aos-delay="300">
        <button class="btn_main" data-bs-toggle="modal" data-bs-target="#registerModal">Register Yourself</button>
    </div>
</section>

    <!-- Modal structure with larger size -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Added modal-lg class here -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Embedded form with adjusted height -->
                    <iframe src="register_teacher_form.php" frameborder="0" style="width: 100%; height: 400px;"></iframe> <!-- Adjust height as needed -->
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
        myModalEl.addEventListener('show.bs.modal', function () {
            var backdrop = document.createElement('div');
            backdrop.className = 'custom-backdrop modal-backdrop fade show';
            document.body.appendChild(backdrop);
        });

        // Remove the custom backdrop class when the modal is hidden
        myModalEl.addEventListener('hide.bs.modal', function () {
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
