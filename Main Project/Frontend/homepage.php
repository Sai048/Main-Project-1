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
        section{
            background-color:darkgray;
        }
   
        table,th,tr,td{
            border: 5px solid black;
            border-collapse: collapse;
            font-weight: bold;
            text-align: center;
        }
          ul{
            cursor: pointer;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
            
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 32px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 20px;
            color: #555;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php 
   include_once 'nav.php';
?>

<section>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="font-size: 25px;">Sector</th>
                    <th style="font-size: 25px;">Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Computer Science Engineering</td>
                    <td><button type="button" class="btn btn-primary" onclick="window.location.href='cse.php'">Click Here</button></td>
                </tr>
                <tr>
                    <td>Electronic Communication Engineering</td>
                    <td><button type="button" class="btn btn-primary">Click Here</button></td>
                </tr>
                <tr>
                    <td>Information Technology</td>
                    <td><button type="button" class="btn btn-primary">Click Here</button></td>
                </tr>
                <tr>
                    <td>Mechanical Engineering</td>
                    <td><button type="button" class="btn btn-primary">Click Here</button></td>
                </tr>
                <tr>
                    <td>Bio Medical Engineering</td>
                    <td><button type="button" class="btn btn-primary">Click Here</button></td>
                </tr>
                <tr>
                    <td>AgriCulutre Engineering</td>
                    <td><button type="button" class="btn btn-primary">Click Here</button></td>
                </tr>
            </tbody>
        </table>
        <br>
       

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Contact Us If Any Queries</h1>
                <h4 class="card-text">Email: aaaa@gmail.com</h4>
                <h4 class="card-text">Phone: 9999999999</h4>
            </div>
        </div>
        </div>
    </section>

    </div>
    

<script>
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

</body>
</html>




