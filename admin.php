<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Registration</title>
<link rel="stylesheet" href="style1.css"> <!-- Link to external CSS file for styling -->
<style>
    body {
        background-image: url('admin1.jpg'); /* Replace 'background_image.jpg' with the path to your image */
        background-size: cover; /* Cover the entire viewport */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
    }
</style>
</head>
<body>
<div class="container">
    <h2><u>Admin Registration</u></h2>
    <form action="admin_process.php" method="post">
        <label for="admin_name">Name:</label><br>
        <input type="text" id="admin_name" name="admin_name"><br>
        <label for="admin_id">Admin ID:</label><br>
        <input type="text" id="admin_id" name="admin_id"><br>
        <label for="admin_password">Password:</label><br>
        <input type="password" id="admin_password" name="admin_password"><br>
        <input type="submit" value="Register">
    </form>
</div>
</body>
</html>
