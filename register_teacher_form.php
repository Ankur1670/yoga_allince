<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
      body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            font-family: 'Roboto', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            font-weight: 700;
            color: #333333;
            margin-bottom: 30px;
            position: relative;
            text-align: center;
        }
        h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background-color: #007bff;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }
        .form-label {
            font-weight: 500;
            color: #555555;
        }
        .form-control, .btn {
            border-radius: 8px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .add-field-btn, .remove-field-btn {
            border: none;
            padding: 0 12px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .add-field-btn {
            background-color: #28a745;
            color: white;
        }
        .add-field-btn:hover {
            background-color: #218838;
        }
        .remove-field-btn {
            background-color: #dc3545;
            color: white;
        }
        .remove-field-btn:hover {
            background-color: #c82333;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }
            .add-field-btn, .remove-field-btn {
                padding: 0 8px;
                font-size: 16px;
            }
            .btn-primary {
                width: 100%;
                padding: 12px;
            }
        }

        /* Loader Overlay Styles */
        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1050; /* Above other elements */
        }
    </style>
</head>
<body>

    <!-- Loader Overlay -->
    <div id="loaderOverlay" class="loader-overlay d-none">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Uploading...</span>
        </div>
    </div>

    <div class="container">
        <h2>Register as a Teacher</h2>
        <form id="teacherForm" enctype="multipart/form-data">
            <!-- Teacher Name -->
            <div class="mb-4">
                <label for="teacherName" class="form-label">Teacher Name</label>
                <input type="text" class="form-control shadow-sm" id="teacherName" name="teacherName" placeholder="Enter your name" required>
            </div>

            <!-- Year of Experience -->
            <div class="mb-4">
                <label for="yearOfExperience" class="form-label">Year of Experience</label>
                <input type="number" class="form-control shadow-sm" id="yearOfExperience" name="yearOfExperience" placeholder="Enter your years of experience" required min="0">
            </div>

            <!-- Lead School Name (Dynamic Fields) -->
            <div class="mb-4">
                <label class="form-label">Lead School Name</label>
                <div id="schools-container">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control shadow-sm" name="leadSchools[]" placeholder="Lead School Name" required>
                        <button type="button" class="btn add-field-btn" onclick="addSchoolField()" title="Add another school">+</button>
                    </div>
                </div>
            </div>

            <!-- Certificate Photo Upload (Multiple) -->
            <div class="mb-4">
                <label class="form-label">Certificate Photos Upload</label>
                <div id="certificates-container">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control shadow-sm" name="certificatePhotos" accept="image/*" required>
                        <button type="button" class="btn add-field-btn" onclick="addCertificateField()" title="Add another certificate">+</button>
                    </div>
                </div>
            </div>

            <!-- Images Upload -->
            <div class="mb-4">
                <label for="images" class="form-label">Images Upload</label>
                <input type="file" class="form-control shadow-sm" id="images" name="images" accept="image/*" multiple>
            </div>

            <!-- About/Description -->
            <div class="mb-4">
                <label for="description" class="form-label">About / Description</label>
                <textarea class="form-control shadow-sm" id="description" name="description" rows="4" placeholder="Tell us about yourself" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary" id="submitButton">
                    <span id="submitButtonText">Submit</span>
                    <span id="submitButtonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
            </div>
        </form>
    </div>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JS and dependencies (Popper, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for adding/removing school and certificate fields and handling form submission -->
    <script>
        // Function to add a new Lead School Name field
        function addSchoolField() {
            const schoolsContainer = document.getElementById('schools-container');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-3';

            const inputField = document.createElement('input');
            inputField.type = 'text';
            inputField.className = 'form-control shadow-sm';
            inputField.name = 'leadSchools[]'; // Ensure the name is correctly set for array handling
            inputField.placeholder = "Lead School Name";
            inputField.required = true;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn remove-field-btn';
            removeButton.title = 'Remove this school';
            removeButton.innerHTML = '&minus;';
            removeButton.onclick = function() {
                schoolsContainer.removeChild(inputGroup);
            };

            inputGroup.appendChild(inputField);
            inputGroup.appendChild(removeButton);
            schoolsContainer.appendChild(inputGroup);
        }

        // Function to add a new Certificate Photo upload field
        function addCertificateField() {
            const certificatesContainer = document.getElementById('certificates-container');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-3';

            const inputField = document.createElement('input');
            inputField.type = 'file';
            inputField.className = 'form-control shadow-sm';
            inputField.name = 'certificatePhotos'; // Changed from 'certificatePhotos[]' to 'certificatePhotos'
            inputField.accept = 'image/*';
            inputField.required = true;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn remove-field-btn';
            removeButton.title = 'Remove this certificate';
            removeButton.innerHTML = '&minus;';
            removeButton.onclick = function() {
                certificatesContainer.removeChild(inputGroup);
            };

            inputGroup.appendChild(inputField);
            inputGroup.appendChild(removeButton);
            certificatesContainer.appendChild(inputGroup);
        }

        // Handle form submission
        document.getElementById('teacherForm').addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const formData = new FormData(form);

            // Show the loader
            const loaderOverlay = document.getElementById('loaderOverlay');
            loaderOverlay.classList.remove('d-none');

            // Disable submit button and show spinner
            const submitButton = document.getElementById('submitButton');
            const submitButtonText = document.getElementById('submitButtonText');
            const submitButtonSpinner = document.getElementById('submitButtonSpinner');

            submitButton.disabled = true;
            submitButtonText.classList.add('d-none');
            submitButtonSpinner.classList.remove('d-none');

            try {
                const response = await fetch('/api2/teacher/register', {
                    method: 'POST',
                    body: formData
                });

                // Hide the loader
                loaderOverlay.classList.add('d-none');

                // Enable submit button and hide spinner
                submitButton.disabled = false;
                submitButtonText.classList.remove('d-none');
                submitButtonSpinner.classList.add('d-none');

                if (response.ok) {
                    const result = await response.json();

                    // Display success popup using SweetAlert2
                    Swal.fire({
                        title: 'Success!',
                        text: 'Teacher registered successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    }).then(() => {
                        // Optionally, reset the form after successful submission
                        form.reset();

                        // Remove any dynamically added school fields except the first one
                        const schoolsContainer = document.getElementById('schools-container');
                        schoolsContainer.innerHTML = `
                            <div class="input-group mb-3">
                                <input type="text" class="form-control shadow-sm" name="leadSchools[]" placeholder="Lead School Name" required>
                                <button type="button" class="btn add-field-btn" onclick="addSchoolField()" title="Add another school">+</button>
                            </div>
                        `;

                        // Remove any dynamically added certificate fields except the first one
                        const certificatesContainer = document.getElementById('certificates-container');
                        certificatesContainer.innerHTML = `
                            <div class="input-group mb-3">
                                <input type="file" class="form-control shadow-sm" name="certificatePhotos" accept="image/*" required>
                                <button type="button" class="btn add-field-btn" onclick="addCertificateField()" title="Add another certificate">+</button>
                            </div>
                        `;
                    });

                } else {
                    // Handle errors returned from the server
                    const errorData = await response.json();
                    Swal.fire({
                        title: 'Error!',
                        text: errorData.message || 'An error occurred while submitting the form.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            } catch (error) {
                // Hide the loader in case of network or other errors
                loaderOverlay.classList.add('d-none');

                // Enable submit button and hide spinner
                submitButton.disabled = false;
                submitButtonText.classList.remove('d-none');
                submitButtonSpinner.classList.add('d-none');

                // Handle network or other errors
                Swal.fire({
                    title: 'Error!',
                    text: error.message || 'An unexpected error occurred.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>

</body>
</html>
