<?php

include 'connection.php';
// Retrieve all student records from the database
$conn = db_connect();
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        
    </style>
</head>
<body>
    <h2>Registered Students</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Registration Number</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['reg_number']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this registration?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No registered students found.</p>
    <?php endif; ?>

    <?php mysqli_close($conn); ?>
</body>
</html>
