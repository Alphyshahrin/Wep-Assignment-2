<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $link = mysqli_connect("localhost", "root", "", "test");
    if($link ==  false){
        die("ERROR" . mysqli_connect_error());
    }
    $sql = "INSERT INTO 'contact-data' (firstName, lastName, phone, email, message) VALUES ('$firstName', '$lastName', '$phone', '$email', '$message')";
    if(mysqli_query($link, $sql)){
        echo "Data added successfully.";
    }
    else{
        echo "Error" . mysqli_error($link);
    }
    mysqli_close($link);

?>