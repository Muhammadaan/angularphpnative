<?php 
include 'con.php';
$sql = $db->prepare('select * from kota')
$sql->execute();
$nama =$sql->fetcALL(PDO::FETCH_ASSOC);
echo  json_encode($nama);
 ?>