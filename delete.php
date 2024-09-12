<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT image FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$image = $row['image'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    if ($image) {
        unlink("uploads/" . $image); // Delete the image file
    }
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
