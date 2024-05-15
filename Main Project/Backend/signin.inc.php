
<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "signup data"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST["username"];
    $dob = $_POST["password"]; 

    $sql = "SELECT * FROM signup WHERE email = '$email'";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     
        $row = $result->fetch_assoc();
        
       
        if ($dob == $row["dob"]) {
         
            header("Location: ../Frontend/homepage.php");
            exit;
        } else {
          
            echo '<script>
            alert("Invalid email or password");
            </script>';
           
            header("refresh:0.1; url=../Frontend/signin.php");
            exit;
          }
    } else {
      
        echo '<script>
        alert("Invalid email or password");
        </script>';

        header("refresh:0.1; url=../Frontend/signin.php");
        exit;
       
    }


    $conn->close();
} else {
    
    header("Location: ../signin.php");
    exit;
}
?>
