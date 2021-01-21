<?php
// MSSQL
$serverName = 'xx.xx.xx.xx';
$userName = 'xxx';
$userPassword = 'xxx';
$dbName = 'xxx';
 
try{
	$conn = new PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	die(print_r($e->getMessage()));
}
 

if($_GET['token'] === '1234'){
	$rs = array();
	// query sql
	$query = " SELECT * FROM DB  ;";
	$getRes = $conn->prepare($query);
	$getRes->execute();
	
	while($row = $getRes->fetch( PDO::FETCH_ASSOC ))
	{
	$rs[] = $row;
	}

	echo json_encode($rs);
}else{
	echo 'error';
}
