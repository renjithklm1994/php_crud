<?php

require 'connection.php';


if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    $conn = db_connect();

  
    $sql = "DELETE FROM students WHERE id = $studentId";

    if (mysqli_query($conn, $sql)) {
        echo "Registration deleted successfully.";
    } else {
        echo "Error deleting registration: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
