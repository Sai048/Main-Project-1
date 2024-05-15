
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

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $registerNumber = $_POST["registerNumber"];
    $dob = $_POST["dob"];

   
    $sql = "INSERT INTO signup(first_name, last_name, email, phone_number, register_number, dob)
            VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$registerNumber', '$dob')";

    
    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("succesfully Added Credentials");
            </script>';
        
        header("refresh:0.1; url=../Frontend/signin.php");
        
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
} else {
    
    header("Location: ../signup.php");
    exit;
}
?>




