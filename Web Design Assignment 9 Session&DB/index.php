<?php
    session_start();
    $_SESSION['isAdmin'] = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 750px)" href="css/small.css">
</head>
<body>
    <div class="login">
        <h1>神秘管理系統</h1>
        <form action="login.php" method="post">
            <label>
                帳號:<input type="text" name="userName">
            </label>
            <br>
            <label>
                密碼:<input type="password" name="userPass">
            </label>
            <br>
            <input type="submit" value="登入" class="submit">
        </form>
    </div>
</body>
</html>