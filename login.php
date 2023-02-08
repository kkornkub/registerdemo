
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="header">
    <h2>Login</h2>
</div>

<form action="login_db.php" method="post">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>

    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login_user" class="btn">Login</button>
    </div>
    <p>not yet a member? <a href="register.php"> sign up</a></p>
</form>
    
</body>
</html>