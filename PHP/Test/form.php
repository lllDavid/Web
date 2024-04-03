<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>

<h2>PHP Form Example</h2>

<form method="post" action="#">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>
