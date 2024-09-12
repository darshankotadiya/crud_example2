<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add User</h1>
    <form action="add_user.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Add User">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
