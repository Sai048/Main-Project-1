
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 50px;
            background-image: url('https://t3.ftcdn.net/jpg/02/39/39/92/360_F_239399223_tthRTvt26El5ccmyQIck9ySsHKgX5YBo.jpg');
            background-size: cover;
            background-position:start;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: start;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 30px;
            margin: 0 auto;
            margin-top: 40px;
            justify-content: center;
            margin-left: 120px;
            

        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            width: 100%;
            padding: 12px;
            background-color: #dc3545;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <form id="loginForm" class="needs-validation" action="../Backend/signin.inc.php" method="post" novalidate>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your email">
                <div class="invalid-feedback">Please enter your username.</div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password (YYYY-MM-DD">
                <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-danger" id="signup">Sign Up</button>
        </form>
    </div>

    <script>
        document.getElementById("signup").addEventListener("click", function() {
            window.location.href = "signup.php";
        });
    </script>
</body>
</html>
