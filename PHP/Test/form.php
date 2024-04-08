<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="#">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>
    
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    echo "<br>";
    echo "Your Username: " . $username . "<br>";
    echo "Your Email: " . $email;
}
?>

</body>
</html>
