<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DB_NAME = "globe";

// Create connection
$conn = new mysqli($HOST, $USER, $PASSWORD, $DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$company_name = $_POST['company_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$contact = $_POST['contact'];

$insert = "insert into quotations(company_name,email,quotation_subject,quotation_message,contact)values('$company_name','$email','$subject','$message','$contact')";
if($conn->query($insert) === TRUE){
    header("Location: https://globestationers.com");
    exit();
}else{
    echo "Something went wrong. Try Again";
}

$conn->close();
?>