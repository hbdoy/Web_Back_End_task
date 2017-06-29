<?php
$host = 'localhost';
$user = 'hello';
$pass = 'hellooo';
$dbName = 'hello';

// 跟MyMSQL連線並登入，失敗的話顯示錯誤訊息
$db = mysqli_connect($host, $user, $pass, $dbName) or die('Error with MySQL connection');

// 選擇編碼
mysqli_query($db,"SET NAMES utf8");
?>