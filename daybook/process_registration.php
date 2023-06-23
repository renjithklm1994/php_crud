<?php
// Establish a connection to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the registration form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reg_number = $_POST['reg_number'];
$gender = $_POST['gender'];
$course = $_POST['course'];

$errors = [];


if (empty($name)) {
    $errors[] = "Name is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($phone)) {
    $errors[] = "Phone number is required.";
} elseif (!preg_match('/^\d{10}$/', $phone)) {
    $errors[] = "Invalid phone number format.";
}

if (empty($reg_number)) {
    $errors[] = "Registration number is required.";
}

$allowedGenders = ['male', 'female', 'other'];
if (empty($gender) || !in_array($gender, $allowedGenders)) {
    $errors[] = "Invalid gender.";
}


if (empty($course)) {
    $errors[] = "Course is required.";
}


if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }

} else {
$sql = "INSERT INTO students (name, email, phone, reg_number, gender, course) VALUES ('$name', '$email', '$phone', '$reg_number', '$gender', '$course')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
