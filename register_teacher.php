<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Registered Teachers</title>
    <?php include('links.php'); ?>
    <style>
    .col-4 {
        margin-left: -54px;
    }

    .btn-small {
        width: 100%;
        font-size: 0.875rem;
        /* Small button text */
    }

    /* Hide content boxes by default */
    .content-box {
        display: none;
    }

    /* Show content when active class is applied */
    .content-box.active {
        display: block;
    }

    .col-8 .teacher-image-small {
        width: 70%;
        /* Adjust the width as needed */
        height: auto;
        /* Maintain aspect ratio */
        margin-left: 22px;
        margin-top: 12px;
        max-width: 300px;
        /* Maximum width for larger screens */
    }
    .col-8 .row p{
        margin-left: 62px;
    }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="our_registered_school container">
        <h1 class="text-center mt-4">Our Registered <span>Teachers</span></h1>

        <div class="container py-5">
            <div class="row">
                <!-- Left Side - Image -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="./images/sightseeing_box2.jpg" alt="Placeholder Image" class="img-fluid rounded shadow">
                </div>

                <!-- Right Side - Buttons and Content -->
                <div class="col-md-6">
                    <div class="row">
                        <!-- Left half of right side - Vertical Buttons -->
                        <div class="col-4 d-flex flex-column gap-2">
                            <button class="btn_school" onclick="toggleContent(1, 'section1')">About School Name</button>
                            <button class="btn_school" onclick="toggleContent(2, 'section1')">Yoga Courses</button>
                            <button class="btn_school" onclick="toggleContent(3, 'section1')">Our Services</button>
                            <button class="btn_school" onclick="toggleContent(4, 'section1')">Teacher</button>
                            <!-- New Button -->
                        </div>

                        <!-- Right half of right side - Content -->
                        <div class="col-8">
                            <div id="section1-content-1" class="content-box p-3 rounded">
                                <p>This is the content for button 1. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </div>
                            <div id="section1-content-2" class="content-box p-3 rounded">
                                <p>This is the content for button 2. Suspendisse interdum at ligula ac efficitur.</p>
                            </div>
                            <div id="section1-content-3" class="content-box p-3 rounded">
                                <p>This is the content for button 3. Aenean scelerisque, libero ut pharetra vehicula,
                                    justo nisi.</p>
                            </div>
                            <div id="section1-content-4" class="content-box p-3 rounded">
                                <!-- New Content for Teacher -->

                                <div class="row">
                                    <div class="col-6">
                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 1</p>
                                    </div>
                                    <div class="col-6">

                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 2</p>
                                    </div>

                                    <div class="col-6">
                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 3</p>
                                    </div>
                                    <div class="col-6">

                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 4</p>
                                    </div>
                                </div>




                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </section>

    <section class="container our_registered_school2 container mb-5">
        <div class="row">
            <!-- Left Side - Image -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="./images/sightseeing_box3.jpg" alt="Placeholder Image" class="img-fluid rounded shadow">
            </div>

            <!-- Right Side - Buttons and Content -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Left half of right side - Vertical Buttons -->
                    <div class="col-4 d-flex flex-column gap-2">
                        <button class="btn_school" onclick="toggleContent(1, 'section2')">Button 1</button>
                        <button class="btn_school" onclick="toggleContent(2, 'section2')">Button 2</button>
                        <button class="btn_school" onclick="toggleContent(3, 'section2')">Button 3</button>
                        <button class="btn_school" onclick="toggleContent(4, 'section2')">Teacher</button>
                        <!-- New Button -->

                    </div>

                    <!-- Right half of right side - Content -->
                    <div class="col-8">
                        <div id="section2-content-1" class="content-box p-3 bg-light rounded">
                            <p>This is the content for button 1 in Section 2.</p>
                        </div>
                        <div id="section2-content-2" class="content-box p-3 bg-light rounded">
                            <p>This is the content for button 2 in Section 2. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Sint saepe repellendus nulla!</p>
                        </div>
                        <div id="section2-content-3" class="content-box p-3 bg-light rounded">
                            <p>This is the content for button 3 in Section 2.</p>
                        </div>
                        <div id="section2-content-4" class="content-box p-3 rounded">
                            <!-- New Content for Teacher -->
                            <div class="row">
                                    <div class="col-6">
                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 1</p>
                                    </div>
                                    <div class="col-6">

                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 2</p>
                                    </div>

                                    <div class="col-6">
                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 3</p>
                                    </div>
                                    <div class="col-6">

                                        <img src="./images/about_founder_p2.jpg" alt="Teacher Image"
                                            class="img-fluid rounded mb-2 teacher-image-small" />
                                        <p>Teacher 4</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function toggleContent(contentNumber, sectionId) {
        // Select all content boxes within the specified section
        const allContentBoxes = document.querySelectorAll(
            `#${sectionId}-content-1, #${sectionId}-content-2, #${sectionId}-content-3, #${sectionId}-content-4`
            ); // Updated to include the new content

        // Hide all content boxes in this section
        allContentBoxes.forEach(box => box.classList.remove('active'));

        // Show the clicked content box in the specified section
        const selectedContentBox = document.getElementById(`${sectionId}-content-${contentNumber}`);
        if (selectedContentBox) {
            selectedContentBox.classList.add('active');
        }
    }

    // Initialize the first button of each section as open on page load
    document.addEventListener("DOMContentLoaded", function() {
        toggleContent(1, 'section1'); // Open the first content in section1
        toggleContent(1, 'section2'); // Open the first content in section2
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('scroll_top.php'); ?>

    <?php include('footer.php'); ?>
</body>

</html>