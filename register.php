<?php
// Start the session
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body style="padding-top: 3rem;">

<div class="container">
    <form action="create_user.php" method="post">
        First name: <input type="text" name="first_name"><br>
        Last name: <input type="text" name="last_name"><br>
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" class="btn" value="Register">
    </form>
</div>

</body>
</html>