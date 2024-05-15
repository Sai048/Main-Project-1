
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-32x32.png">
    <style>
        body {
            background-color: #E6E6FA;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url();
            background-size: cover;
            background-position:center;
            background-repeat: no-repeat;
            background-image: url("https://t3.ftcdn.net/jpg/02/39/39/92/360_F_239399223_tthRTvt26El5ccmyQIck9ySsHKgX5YBo.jpg");
            display: flex;
            align-items: center;
            justify-content: start;

        }
        #main {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 30px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn {
            cursor: pointer;
        }
        section{
            height: 50%;
            width: 50%;
        }
    </style>
</head>
<body>
<section>
<div id="main" class="container mt-3">
    <form id="signupForm" action="../Backend/signup.inc.php" method="POST">
        <h2 class="mb-4 text-center">Signup Form</h2>
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstName" name= "firstName" placeholder="Enter Your First name" required>
            <div class="invalid-feedback">Please enter your first name.</div>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Your Last Name" required>
            <div class="invalid-feedback">Please enter your last name.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter Your Phone Number" required pattern="[0-9]{10}">
            <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
        </div>
        <div class="mb-3">
            <label for="registerNumber" class="form-label">Register Number:</label>
            <input type="text" class="form-control" id="registerNumber" name="registerNumber" placeholder="Enter Your Register Number" required>
            <div class="invalid-feedback">Please enter your register number.</div>
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
            <div class="invalid-feedback">Please enter your date of birth.</div>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <button id="signup" type="submit" class="btn btn-primary">Sign up</button> 
            <button id="back" type="button" class="btn btn-secondary">Back</button>
        </div>
    </form>
</div>
</section>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $('#signup').click(function() {
        var isValid = $('#signupForm')[0].checkValidity();
        if (isValid) {
            $.ajax({
                type: 'POST',
                url: 'backend/signup.inc.php',
                data: $('#signupForm').serialize(),
                success: function(response) {
                    console.log('Form submitted successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    });

    $('#back').click(function() {
        window.location.href = 'signin.php';
    });
</script>

</body>
</html>
