<?php
session_start();
if(!$_SESSION['isAdmin']){
    header("Location: ../");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shi~ Low profile</title>
    <style>
        body{
            font-family: '微軟正黑體';
            background: linear-gradient(#F1E6EE, #B4DFF8);
            min-height: 100vh;
        }
        h1{
            color: yellow;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            user-select: none;
        }
        .showList{
            width: 500px;
            margin: 0 auto;
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 18px;
        }
        .showList th, td{
            border-bottom: 1px solid black;
            padding: 8px;
        }
        .showList a{
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" media="screen and (max-width: 750px)" href="../css/small.css">
</head>
<body>
    <table class="showList">
        <caption><h1>乾妹妹名單</h1></caption>
        <tr>
            <th>姓名</th>
            <th>年齡</th>
            <th>電話</th>
            <th>居住地</th>
            <th>喜愛程度</th>
        </tr>
<?php
    require('dbconfig.php');

    $sql = "select * from favorite order by level;";
    // $stmt = mysqli_prepare($db, $sql);
    // mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);
    $result = mysqli_query($db, $sql);
    while($rs = mysqli_fetch_assoc($result)){
        echo "<tr><td>", $rs['name'],
        "</td><td>", $rs['age'],
        "</td><td>", $rs['phone'],
        "</td><td>", $rs['country'],
        "</td><td>", $rs['level'],
        "</td>";
    }
    echo "<tr><td colspan=5><a href='../'>登出</a></td></tr>";
?>
    </table>
</body>
</html>