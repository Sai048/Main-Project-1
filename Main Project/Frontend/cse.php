<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="php.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="icon"  href="favicon-32x32.png">
    <title>CSE COURSES</title>
    <style>
        ul{
            cursor: pointer;
        }
    </style>
</head>

<body>

<header>
    <?php 
   include_once 'nav.php';
?>
</header>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <a href="webdevelopment/webdevelopment.php">
          <img src="website-development-banner.jpg" class="card-img-top" alt="Web Development">
        </a>
        <div class="card-body">
          <h5 class="card-title">Web Development</h5>
        </div>
      </div>
      <div class="card">
        <a href="appdevelopment/appdevelopment.php">
          <img src="app-development-banner.jpg" class="card-img-top" alt="App Development">
        </a>
        <div class="card-body">
          <h5 class="card-title">App Development</h5>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="design-thinking.jpg" class="card-img-top" alt="Design Thinking">
        <div class="card-body">
          <h5 class="card-title">Design Thinking</h5>
        </div>
      </div>
      <div class="card">
        <img src="saas-concept-collage.jpg" class="card-img-top" alt="Cloud Computing">
        <div class="card-body">
          <h5 class="card-title">Cloud Computing</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    const Home=document.getElementById("Home");
        Home.addEventListener("click",()=>{
        window.location.href="homepage.php";
    });
    const ContactUs=document.getElementById("ContactUs");
    ContactUs.addEventListener("click",()=>{
        window.location.href="./ContactUs.php";
    });
    const Settings=document.getElementById("Settings");
    Settings.addEventListener("click",()=>{
        window.location.href="Settings.php";
    });
</script>

</body>
</html>

