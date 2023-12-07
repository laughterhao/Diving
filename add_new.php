<?php
$host ="localhost";
$user = "Nic";
$passeword = "123456";
$dbname = "diving";

try{
  $conn = new PDO("mysql:host = $host;dbname = $dbname",$user,$passeword);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "連接成功";
}catch(PDOException $e){
  echo "連接失敗".$e->getMessage();
}

$sql = "INSERT INTO new (title, Content,)
VALUES ('Cardinal', 'Tom B. Erichsen')";

$RS=$conn->query($sql);
if($RS->rowCount() > 0) {echo "新增紀錄成功";}
else {echo "新增紀錄失敗";}
?>
