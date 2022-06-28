<?php
session_start();
require_once __DIR__ . "/models/contact-model.php";
$msgSuccess = '';
if (!empty($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_us (fname, lname, email, subject, message) 
            values ('$fname', '$lname', '$email', '$subject', '$message')";
    if (mysqli_query($conn, $sql)){
    $msgSuccess = "Message successfully sent!";
        // echo "Message successfully sent!";
    }else{
        echo "Error : ". $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}



//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-contact-page.php";


//FOOTER
require __DIR__ . "/views/_layout/footer.php";



























?>