<?php
require 'connection.php';
require 'validation.php';

$conn = db_connect();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reg_number = $_POST['reg_number'];
$gender = $_POST['gender'];
$course = $_POST['course'];

$errors = [];

$valid = validaton_db ($name, $email,$phone,$reg_number,$gender,$course,$errors);
if ($valid) {

    $sql = "INSERT INTO students (name, email, phone, reg_number, gender, course) VALUES ('$name', '$email', '$phone', '$reg_number', '$gender', '$course')";

    if (mysqli_query($conn,$sql)) {
        echo "Registration successful!";
    }   else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}}


mysqli_close($conn);
?>
