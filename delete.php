<?php 


include 'con.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
	
	$sql = $db->prepare("DELETE FROM kota  where id = :id");
	$sql->bindParam(':id', $id);
	$sql->execute();
}

 ?>