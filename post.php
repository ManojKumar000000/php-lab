<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
</head>
<body>

<h2>Enter Your Name</h2>

<form method="post" action="">
    Name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
// Check if the POST variable 'username' is set
if (isset($_POST['username'])) {
    $name = htmlspecialchars($_POST['username']); // Prevent XSS
    echo "<h3>Hello, $name!</h3>";
}
?>

</body>
</html>