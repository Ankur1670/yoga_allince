<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup and Login Page</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('./images/aboutrishikesh_background.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: auto;
    }

    .signup-login-card {
      max-width: 600px; /* Increased width to accommodate new fields */
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 30px; /* Increased padding for better spacing */
      background-color: white;
      margin: auto;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      padding: 10px 0;
    }

    .animated-button {
      width: 48%;
      padding: 10px;
      transition: 0.3s;
      font-weight: bold;
    }

    .animated-button.active {
      background-color: #0d6efd !important;
      color: white !important;
    }

    /* Adjust padding for form content */
    .form-content {
      padding-top: 10px;
    }

    .form-content {
      display: none;
    }

    .form-content.active {
      display: block;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: scale(0.95); }
      100% { opacity: 1; transform: scale(1); }
    }

    .animated.fadeIn {
      animation: fadeIn 0.5s ease forwards;
    }

    @keyframes fadeOut {
      0% { opacity: 1; transform: scale(1); }
      100% { opacity: 0; transform: scale(0.95); }
    }

    .animated.fadeOut {
      animation: fadeOut 0.5s ease forwards;
      display: none !important;
    }

    /* Message Container Styles */
    .message {
      padding: 10px 20px;
      margin-bottom: 15px;
      border-radius: 5px;
      display: none; /* Hidden by default */
    }

    .message.success {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .message.error {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="card signup-login-card">
      <div class="card-body">
        <!-- Message Container -->
        <div id="message" class="message"></div>

        <div class="buttons">
          <button id="signupBtn" class="btn btn-primary animated-button active">Sign Up</button>
          <button id="loginBtn" class="btn btn-secondary animated-button">Login</button>
        </div>
        
        <!-- Signup Form -->
        <div id="signupForm" class="form-content animated fadeIn active">
          <h3 class="text-center">Sign Up</h3>
          <form id="signupFormElement">
            <!-- Username -->
            <div class="mb-3">
              <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" required>
            </div>

            <!-- Name Fields in One Line -->
            <div class="row">
              <!-- First Name -->
              <div class="col-md-4 mb-3">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstName" placeholder="First name" required>
              </div>
              
              <!-- Middle Name (Optional) -->
              <div class="col-md-4 mb-3">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middleName" placeholder="Middle name (optional)">
              </div>
              
              <!-- Last Name -->
              <div class="col-md-4 mb-3">
                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
              </div>
            </div>
            
            <!-- Country -->
            <div class="mb-3">
              <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
              <select class="form-select" id="country" required>
                <option value="" selected disabled>Select your country</option>
                <!-- You can populate this list dynamically or manually add options -->
                <option value="India">India</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <!-- Add more countries as needed -->
              </select>
            </div>
            
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            
            <!-- Confirm Password -->
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
            </div>
            
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
          </form>
        </div>
        
        <!-- Login Form -->
        <div id="loginForm" class="form-content animated fadeOut">
          <h3 class="text-center">Login</h3>
          <form id="loginFormElement">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Your Custom Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const signupBtn = document.getElementById('signupBtn');
      const loginBtn = document.getElementById('loginBtn');
      const signupForm = document.getElementById('signupForm');
      const loginForm = document.getElementById('loginForm');
      const messageDiv = document.getElementById('message');

      // Show signup form by default
      signupForm.classList.add('active');

      signupBtn.addEventListener('click', () => {
        showForm('signup');
      });

      loginBtn.addEventListener('click', () => {
        showForm('login');
      });

      function showForm(formType) {
        if (formType === 'signup') {
          signupForm.classList.add('active');
          loginForm.classList.remove('active');
          signupBtn.classList.add('active', 'btn-primary');
          signupBtn.classList.remove('btn-secondary');
          loginBtn.classList.remove('active', 'btn-primary');
          loginBtn.classList.add('btn-secondary');
          signupForm.classList.remove('fadeOut');
          signupForm.classList.add('fadeIn');
          loginForm.classList.add('fadeOut');
        } else if (formType === 'login') {
          loginForm.classList.add('active');
          signupForm.classList.remove('active');
          loginBtn.classList.add('active', 'btn-primary');
          loginBtn.classList.remove('btn-secondary');
          signupBtn.classList.remove('active', 'btn-primary');
          signupBtn.classList.add('btn-secondary');
          loginForm.classList.remove('fadeOut');
          loginForm.classList.add('fadeIn');
          signupForm.classList.add('fadeOut');
        }
      }

      // Function to display messages
      function showMessage(message, type = 'success') {
        messageDiv.textContent = message;
        messageDiv.className = `message ${type}`;
        messageDiv.style.display = 'block';

        // Hide the message after 5 seconds
        setTimeout(() => {
          messageDiv.style.display = 'none';
        }, 5000);
      }

      // Handle Signup Form Submission
      signupForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const username = document.getElementById('username').value.trim();
        const firstName = document.getElementById('firstName').value.trim();
        const middleName = document.getElementById('middleName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const country = document.getElementById('country').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirmPassword').value.trim();

        // Client-side validation for password confirmation
        if (password !== confirmPassword) {
          showMessage('Passwords do not match', 'error');
          return;
        }

        try {
          const response = await fetch('http://localhost:5000/api/auth/register', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ username, firstName, middleName, lastName, country, email, password })
          });

          const data = await response.json();

          if (response.ok) {
            showMessage('Registration successful! You can now log in.', 'success');
            // Switch to login form after a short delay
            setTimeout(() => {
              loginBtn.click();
            }, 2000);
          } else {
            showMessage(data.message || 'Something went wrong', 'error');
          }
        } catch (error) {
          console.error('Error:', error);
          showMessage('An error occurred during registration', 'error');
        }
      });

      // Handle Login Form Submission
      loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const email = document.getElementById('loginEmail').value.trim();
        const password = document.getElementById('loginPassword').value.trim();

        try {
          const response = await fetch('http://localhost:5000/api/auth/login', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ email, password })
          });

          const data = await response.json();

          if (response.ok) {
            showMessage('Login successful! Redirecting...', 'success');
            // Save token and username to localStorage
            localStorage.setItem('token', data.token);
            localStorage.setItem('username', data.fullName); // Ensure your API returns the full name
            // Redirect to index.php after a short delay
            setTimeout(() => {
              window.location.href = 'index.php';
            }, 2000); // 2-second delay before redirecting
          } else {
            showMessage(data.message || 'Something went wrong', 'error');
          }
        } catch (error) {
          console.error('Error:', error);
          showMessage('An error occurred during login', 'error');
        }
      });
    });
  </script>
</body>
</html>
