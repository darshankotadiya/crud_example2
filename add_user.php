<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Validate and move uploaded image
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($image_tmp, $target_file);

    $sql = "INSERT INTO users (name, email, image) VALUES ('$name', '$email', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
?>
