<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="php.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <link rel="icon"  href="favicon-32x32.png">
    <title>Homepage</title>
    <style>
               #form {
            height: 100vh;
            padding: 10%;
            background-color: #F0F8FF; /* Light Blue */
            font-family: Arial, sans-serif;
        }
        
        #form label {
            font-weight: bold;
            color: #333; /* Dark Gray */
        }
        
        #form input[type="text"],
        #form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* Light Gray */
            border-radius: 5px;
        }
        
        #form input[type="text"]:focus,
        #form input[type="email"]:focus {
            outline: none;
            border-color: #80bdff; /* Light Blue */
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }
        
        #form .btn-primary {
            padding: 12px 24px;
            background-color: #007bff; /* Blue */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
        #form .btn-primary:hover {
            background-color: #0056b3; /* Dark Blue */
        }
    </style>
</head>
<body>
<?php 
   include_once 'nav.php';
?>

<section>
<div id="main" class="container mt-0">
        <form id="form" class="needs-validation" novalidate action="../Backend/contactus.inc.php" method="post">
            <div class="mb-3">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter Your First Name" name="firstname" required>
                <div class="invalid-feedback">Please provide a valid first name.</div>
            </div>
            <div class="mb-3">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter Your Last Name" required name="lastname">
                <div class="invalid-feedback">Please provide a valid last name.</div>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required name="email">
                <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="mb-3">
                <label for="feedback">Feedback:</label>
                <input type="text"  class="form-control" id="feedback" placeholder="Enter Your Feedback" name="feedback">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</section>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
    const Home=document.getElementById("Home");
    Home.addEventListener("click",()=>{
        window.location.href="homepage.php";
    });
    const Settings=document.getElementById("Settings");
    Settings.addEventListener("click",()=>{
        window.location.href="Settings.php";
    });
</script>
</body>
</html>
