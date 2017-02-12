<?php   
include 'config.php'; 
//$json=$_GET ['json']; 
$json = file_get_contents('php://input'); 
$obj = json_decode($json); 
//echo $json; 
 
 $pekerjaan = mysqli_query($conn, "SELECT `AUTO_INCREMENT`-1 idpekerjaan
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'kwh'");

if ($m = mysqli_fetch_array($pekerjaan))
{
	$idpekerjaan = $m['idpekerjaan'];
}
 echo $idpekerjaan;

$foto = mysqli_query($conn,"SELECT `AUTO_INCREMENT`-1 idfoto
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'foto'");


if ($m = mysqli_fetch_array($foto))
{
	$idfoto = $m['idfoto'];
}
//Insert Query 
$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idpekerjaan"); 
//mysql_close($con); 
$conn->close(); 
// 
  //$posts = array($json); 
  if($result) { 
 echo json_encode(array('posts'=>array("Success")));  
  } else { 
 echo json_encode(array('posts'=>array("Fail")));  
  } 
  //$posts = array(1); 
    //header('Content-type: application/json'); 
	    //echo json_encode(array('posts'=>$posts));  
  ?> 