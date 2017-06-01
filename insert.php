<?php 


include 'con.php';


$data = json_decode(file_get_contents('php://input'));

if ($data) {
	

	$sql = $db->prepare("insert into kota (nama) values(:nama)");
	$sql->bindParam('nama',$data->nama);
	$sql->execute();

	$res['status'] = true;

}else {
	
	$res['status'] = false;
}

echo json_encode($res);

 ?>
