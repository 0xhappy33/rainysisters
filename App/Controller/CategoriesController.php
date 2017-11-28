<?php 
	require_once('ConnectDBController.php');
	$stmt = $db->prepare('SELECT * from catagories');
	//Thiết lập kiểu dữ liệu trả về
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
?>