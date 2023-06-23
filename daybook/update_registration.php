<?php
function db_connect()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "student";

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}


if (isset($_POST['submit'])) {
    $conn = db_connect();

  
    $studentId = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reg_number = $_POST['reg_number'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', reg_number='$reg_number', gender='$gender', course='$course' WHERE id=$studentId";

    if (mysqli_query($conn, $sql)) {
        echo "Registration updated successfully!";
    } else {
        echo "Error updating registration: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
