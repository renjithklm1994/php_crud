<?php
require 'connection.php';
$conn = db_connect();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo "<h2>Edit Registration Details</h2>";
        echo "<form method='POST' action='update_registration.php'>";
        echo "<input type='hidden' name='id' value='".$row['id']."'>";
        echo "Name: <input type='text' name='name' value='".$row['name']."' required><br><br>";
        echo "Email: <input type='email' name='email' value='".$row['email']."' required><br><br>";
        echo "Phone: <input type='text' name='phone' value='".$row['phone']."' required><br><br>";
        echo "Registration Number: <input type='text' name='reg_number' value='".$row['reg_number']."' required><br><br>";
        echo "Gender: ";
        echo "<input type='radio' name='gender' value='Male' required";
        if ($row['gender'] == 'Male') echo " checked";
        echo "> Male";
        echo "<input type='radio' name='gender' value='Female' required";
        if ($row['gender'] == 'Female') echo " checked";
        echo "> Female<br><br>";
        echo "Course: <input type='text' name='course' value='".$row['course']."' required><br><br>";
        echo "<input type='submit' name='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "Student record not found.";
    }
} else {
    echo "Invalid request.";
}


?>
