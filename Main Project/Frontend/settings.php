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
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light Blue */
        }
        section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            padding: 7%;
            font-size: 36px;
            color: #008000; /* Dark Green */
        }
        h2, h3 {
            padding: 3%;
            color: #4b0082; /* Indigo */
        }
        #logout {
            padding: 12px 24px;
            font-weight: bold;
            background-color: #007bff; /* Blue */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        #logout:hover {
            background-color: #0056b3; /* Dark Blue */
        }
        
    </style>
</head>
<body>
    <header>
<?php 
   include_once 'nav.php';
?>
</header>
<section>
   <div class="container">
        <h1>Welcome to a world of learning, discovery, and endless possibilities. Welcome to our student learning website</h1>
        <h2>College Student's Gateway to Academic Success</h2>
        <h3>Our platform is your trusted companion on your academic journey</h3>
    </div>
    <div class="container">
        <button class="btn btn-primary" id="logout">Logout</button>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    const Home = document.getElementById("Home");
    Home.addEventListener("click", () => {
        window.location.href = "homepage.php";
    });
    const ContactUs = document.getElementById("ContactUs");
    ContactUs.addEventListener("click", () => {
        window.location.href = "ContactUs.php";
    });
    const logout = document.getElementById("logout");
    logout.addEventListener("click", () => {
        window.location.href = "signin.php";
    });
</script>
</body>
</html>

