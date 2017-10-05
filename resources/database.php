<?php
$dsn='mysql:host=localhost;dbname=register';
$username='root';
$password=1234567;
try{
$db = new PDO($dsn,$username,$password);
//echo "Connected To DataBase";
}
catch(PDOException $ex)
{
//echo "Connection Failed";
}
?>
