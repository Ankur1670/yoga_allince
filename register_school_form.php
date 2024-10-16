<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
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
        <h2>Register Your School</h2>
        <form id="schoolForm" enctype="multipart/form-data">
            <!-- School Name -->
            <div class="mb-4">
                <label for="schoolName" class="form-label">Name of School</label>
                <input type="text" class="form-control shadow-sm" id="schoolName" name="schoolName" placeholder="Enter the name of the school" required>
            </div>

            <!-- Founder Name -->
            <div class="mb-4">
                <label for="founderName" class="form-label">Founder Name</label>
                <input type="text" class="form-control shadow-sm" id="founderName" name="founderName" placeholder="Enter the founder's name" required>
            </div>

            <!-- Founded Year -->
            <div class="mb-4">
                <label for="foundedYear" class="form-label">Founded Year</label>
                <input type="number" class="form-control shadow-sm" id="foundedYear" name="foundedYear" placeholder="Enter the year the school was founded" required min="1800" max="2100">
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="form-label">School Address</label>
                <input type="text" class="form-control shadow-sm" id="address" name="address" placeholder="Enter the address of the school" required>
            </div>

            <!-- Website Link -->
            <div class="mb-4">
                <label for="websiteLink" class="form-label">Website Link</label>
                <input type="url" class="form-control shadow-sm" id="websiteLink" name="websiteLink" placeholder="Enter the school's website URL" required>
            </div>

            <!-- Teachers Name (Dynamic Fields) -->
            <div class="mb-4">
                <label class="form-label">Teachers Name (Yoga Style)</label>
                <div id="teachers-container">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control shadow-sm" name="teachers[]" placeholder="Teacher's name" required>
                        <button type="button" class="btn add-field-btn" onclick="addTeacherField()" title="Add another teacher">+</button>
                    </div>
                </div>
            </div>

            <!-- Total Number of Teachers -->
            <div class="mb-4">
                <label for="totalTeachers" class="form-label">Total Number of Teachers</label>
                <input type="number" class="form-control shadow-sm" id="totalTeachers" name="totalTeachers" placeholder="Enter the total number of teachers" required min="1">
            </div>

            <!-- Certificate Photo Upload -->
            <div class="mb-4">
                <label for="certificatePhoto" class="form-label">Certificate Photo Upload</label>
                <input type="file" class="form-control shadow-sm" id="certificatePhoto" name="certificatePhoto" accept="image/*" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="form-label">Description of School</label>
                <textarea class="form-control shadow-sm" id="description" name="description" rows="4" placeholder="Enter a brief description of the school" required></textarea>
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

    <!-- JavaScript for adding/removing teacher fields and handling form submission -->
    <script>
        // Function to add a new teacher field
        function addTeacherField() {
            const teachersContainer = document.getElementById('teachers-container');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-3';

            const inputField = document.createElement('input');
            inputField.type = 'text';
            inputField.className = 'form-control shadow-sm';
            inputField.name = 'teachers[]'; // Ensure the name is correctly set for array handling
            inputField.placeholder = "Teacher's name";
            inputField.required = true;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn remove-field-btn';
            removeButton.title = 'Remove this teacher';
            removeButton.innerHTML = '&minus;';
            removeButton.onclick = function() {
                teachersContainer.removeChild(inputGroup);
            };

            inputGroup.appendChild(inputField);
            inputGroup.appendChild(removeButton);
            teachersContainer.appendChild(inputGroup);
        }

        // Handle form submission
        document.getElementById('schoolForm').addEventListener('submit', async function(event) {
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
                const response = await fetch('http://localhost:5000/api/school/register', {
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
                        text: 'School registered successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    }).then(() => {
                        // Optionally, reset the form after successful submission
                        form.reset();

                        // Remove any dynamically added teacher fields except the first one
                        const teachersContainer = document.getElementById('teachers-container');
                        teachersContainer.innerHTML = `
                            <div class="input-group mb-3">
                                <input type="text" class="form-control shadow-sm" name="teachers[]" placeholder="Teacher's name" required>
                                <button type="button" class="btn add-field-btn" onclick="addTeacherField()" title="Add another teacher">+</button>
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
