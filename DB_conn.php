<?php
$host ="localhost";
$user = "Nic";
$passeword = "123456";
$dbname = "diving";

try{
  $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$passeword);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "連接成功";
}catch(PDOException $e){
  echo "連接失敗".$e->getMessage();
}
?>
