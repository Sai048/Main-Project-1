<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../php.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="icon"  href="../favicon-32x32.png">
    <title>CSS COURSE</title>
    <style>
        ul{
            cursor: pointer;
        }
        #video1{
         
            height: 65vh;
        }
    
      
    </style>
</head>
<body>
    <header>
    <?php 
   include_once '../nav.php';
?>
    </header>
    <section><div class="container-fluid">    <div id="video1" class="mt-5"></div>
</div>
  
    <div class="container">
    <div id="main" class="d-flex flex-column align-items-center">
        <div id="click" class="text-center mt-3">
            <h3>Click on Youtube Logo to get Full Screen or</h3>
            <h3>Click Here to get full Screen</h3>
        </div>
        <div class="mt-3 " id='buttons'>
            <button id="button2" class="btn btn-primary">Previous</button>
            <button id="button1" class="btn btn-primary me-2">Next</button>
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


    var videoId = 'Icf5D3fEKbM';

// Create iframe element
var iframe = document.createElement('iframe');
iframe.width = '100%';
iframe.height = '100%';
iframe.src = 'https://www.youtube.com/embed/' + videoId;
iframe.frameborder = '0';
iframe.allowfullscreen = true;

document.getElementById('video1').appendChild(iframe);




var h3Elements = document.querySelectorAll("h3");


var secondH3 = h3Elements[1];
secondH3.style.cursor="pointer";
secondH3.addEventListener("click",()=>{
    window.location.href="https://www.youtube.com/watch?v=kUMe1FH4CHE";
    
})


document.getElementById("button1").addEventListener("click",()=>{
    window.location.href="jscourse.php";
})



document.getElementById("button2").addEventListener("click",()=>{ 
    window.location.href="htmlcourse.php";
})
</script>
</body>
</html>