<?php

require 'connection.php';
require 'validation.php';


if (isset($_POST['submit'])) {
    $conn = db_connect();

  
    $studentId = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reg_number = $_POST['reg_number'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $errors = [];
    
    $valid = validaton_db($name,$email,$phone,$reg_number,$gender,$course,$errors);
    if ($valid) {

    
        $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', reg_number='$reg_number', gender='$gender', course='$course' WHERE id=$studentId";

        if (mysqli_query($conn,$sql)) {

            echo "Registration updated successfully!";
        } else {
            echo "Error updating registration: " . mysqli_error($conn);
    }}

    mysqli_close($conn);
}
?>
