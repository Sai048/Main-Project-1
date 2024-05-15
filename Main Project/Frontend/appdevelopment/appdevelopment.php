<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../php.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="icon"  href="../favicon-32x32.png">
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CSE COURSES</title>
    <style>
    :root {
        --lineborder-fill: #9c27b0;
        --lineborder-empty: #bdbdbd;
    }

    ul {
        cursor: pointer;
    }

    #main {
        display: flex;
        justify-content: space-between;
        height: 50px;
        size: 40px;
    }

    .fab.fa-html5 {
        font-size: 1.8em;
        color: red;
        cursor: pointer;
    }

    .fab.fa-css3-alt {
        font-size: 1.8em;
        color: #264de4;
        cursor: pointer;
    }

    .fab.fa-js {
        font-size: 1.8em;
        color: yellow;
        cursor: pointer;
    }

    .fab.fa-php {
        font-size: 1.8em;
        color: plum;
        cursor: pointer;
    }

    .fa-solid.fa-database {
        font-size: 1.8em;
        color: rgb(14, 13, 14);
        cursor: pointer;
    }

    #circle {
        background-color: yellow;
        color: #999;
        border-radius: 50%;
        height: 50px;
        width: 50px;
        border: 3px solid;
        border-color: var(--lineborder-fill);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.4s ease;
        position: relative;
    }
    .horizontal-line {
            width: 80%;
            height: 2px; 
            background-color: #000; 
            margin: 40px 0; 
            position: absolute;
            z-index: -1;
        }

    .container-main {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            z-index: 1;
            position: relative;
            
            
        }


    section {
        text-align: center;
        margin-top: 25%;
       
    }

   

    </style>
</head>

<body>

<header>
    <?php 
   include_once '../nav.php';
?>
</header>
<section>
<div class="container" id="main">
    <div class="horizontal-line"></div>
    <div class="container-main">
    <div class="circle d-flex align-items-center justify-content-center mt-3" id='circle'>
        <a href="javaandroidcourse.php">
            <i class="fab fa-java"></i>
        </a>
    </div>
    <div class="circle d-flex align-items-center justify-content-center mt-3" id='circle'>
        <a href="androidxmlcourse.php">
            <i class="fa-solid fa-file-code"></i>
        </a>
    </div>
    <div class="circle d-flex align-items-center justify-content-center mt-3" id='circle'>
        <a href="androiduicourse.php">
            <i class="fa-solid fa-mobile-android-alt"></i>
        </a>
    </div>
    <div class="circle d-flex align-items-center justify-content-center mt-3" id='circle'>
        <a href="androiddatabasecourse.php">
            <i class="fa-solid fa-database"></i>
        </a>
    </div>
    <div class="circle d-flex align-items-center justify-content-center mt-3" id='circle'>
        <a href="androidapicourse.php">
            <i class="fa-solid fa-cloud"></i>
        </a>
        </div>
    </div>
</div>



</section>
<script>
    const Home=document.getElementById("Home");
        Home.addEventListener("click",()=>{
        window.location.href="../homepage.php";
    });
    const ContactUs=document.getElementById("ContactUs");
    ContactUs.addEventListener("click",()=>{
        window.location.href="../ContactUs.php";
    });
    const Settings=document.getElementById("Settings");
    Settings.addEventListener("click",()=>{
        window.location.href="../Settings.php";
    });
</script>

</body>
</html>