<!DOCTYPE html>
<html>
<head>
    <title>Login Form/title>
</head>
<body>

<h2>Please Login</h2>

<form method="post" action="#">
    <label for="password">Password:</label><br>
    <input type="password" id="password"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passsword = $_POST['password'];
    $email = $_POST['email'];
    
    echo "Password: " . $password. "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
