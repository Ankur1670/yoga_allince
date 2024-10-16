<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php include('links.php'); ?>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        #headerContainer {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            color: #ff7e5f;
        }

        h1 span {
            color: #feb47b;
        }

        #registerBtn {
            padding: 15px 30px;
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s ease;
            margin-top: 20px;
        }

        #registerBtn:hover {
            transform: scale(1.1);
        }

        .modal {
            display: none; /* Make sure the modal is hidden initially */
            position: fixed; 
            z-index: 1000; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        .modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-50px);
            animation: slideDown 0.5s forwards;
        }

        @keyframes slideDown {
            from {transform: translateY(-50px); opacity: 0;}
            to {transform: translateY(0); opacity: 1;}
        }

        .close {
            color: #333;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #ff7e5f;
            text-decoration: none;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        input {
            padding: 12px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #ff7e5f;
            outline: none;
        }

        button {
            padding: 15px;
            background: linear-gradient(45deg, #36d1dc, #5b86e5);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background: linear-gradient(45deg, #5b86e5, #36d1dc);
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div id="headerContainer">
    <h1>Teacher <span>Registration</span></h1> 
    <button id="registerBtn">Register as Teacher</button>
</div>

<div id="registerModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Registration Form</h2>
        <form action="send_email.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // Get modal elements
    var modal = document.getElementById("registerModal");
    var btn = document.getElementById("registerBtn");
    var span = document.getElementsByClassName("close")[0];

    // Ensure the modal is closed on page load
    window.onload = function() {
        modal.style.display = "none";
    }

    // Open the modal when button is clicked
    btn.onclick = function() {
        modal.style.display = "flex";
    }

    // Close the modal when (x) is clicked
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal when clicking outside of the modal content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
