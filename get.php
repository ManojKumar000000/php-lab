<!DOCTYPE html>
<html>
<head>
    <title>GET Method Example</title>
</head>
<body bgcolor ='red'>

<h2>Enter Your Name</h2>

<form method="get" action="">
    Name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
// Check if the GET variable 'username' is set
if (isset($_GET['username'])) {
    $name = htmlspecialchars($_GET['username']); // Prevent XSS
    echo "<h3>Hello, $name!</h3>";
}
?>

</body>
</html>