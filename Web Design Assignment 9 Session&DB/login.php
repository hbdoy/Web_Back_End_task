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
    <title>Document</title>
    <style>
        body {
            font-family: '微軟正黑體';
            background: linear-gradient(#F1E6EE, #B4DFF8);
            min-height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    if($userName == "admin" && $userPass == "adminnn"){
        $_SESSION['isAdmin'] = true;
        header("Location: mysticSystem");
        exit;
    }else{
        echo "<h1>帳號或密碼錯誤!!</h1><a href='./'>重新登入</a>";
    }
?>
</body>
</html>