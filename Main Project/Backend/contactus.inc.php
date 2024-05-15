<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "feedback data"; // Corrected database name


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstName = $_POST["firstname"]; 
    $lastName = $_POST["lastname"]; 
    $email = $_POST["email"]; 
    $feedback=$_POST['feedback'];

    $sql ="INSERT INTO feedback_table (first_name, last_name, email, feedback)
    VALUES ('$firstName', '$lastName', '$email', '$feedback')"; 


if ($conn->query($sql) === TRUE) {
    echo '<script>
        alert("Successfully Added Feedback");
        </script>';
    
    header("refresh:0.1; url=../Frontend/contactus.php");
    exit;
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
} else {

// header("Location: ../contactus.php");
exit;
}
?>
