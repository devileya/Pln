<?php   
include 'config.php'; 
//$json=$_GET ['json']; 
$json = file_get_contents('php://input'); 
$obj = json_decode($json); 
//echo $json; 
$nilai = $_GET['nilai'];



 
 $smp = mysqli_query($conn, "SELECT `AUTO_INCREMENT`-1 idsmp
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'smpslp'");

if ($m = mysqli_fetch_array($smp))
{
	$idsmp = $m['idsmp'];
}


 $geser = mysqli_query($conn, "SELECT `AUTO_INCREMENT`-1 idgeser
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'geser'");

if ($m = mysqli_fetch_array($geser))
{
  $idgeser = $m['idgeser'];
}

 $kwh = mysqli_query($conn, "SELECT `AUTO_INCREMENT`-1 idkwh
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'kwh'");

if ($m = mysqli_fetch_array($kwh))
{
  $idkwh = $m['idkwh'];
}


 $mcb = mysqli_query($conn, "SELECT `AUTO_INCREMENT`-1 idmcb
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'mcb'");

if ($m = mysqli_fetch_array($mcb))
{
  $idmcb = $m['idmcb'];
}

$foto = mysqli_query($conn,"SELECT `AUTO_INCREMENT`-1 idfoto
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'db_pln'
AND   TABLE_NAME   = 'foto'");


if ($m = mysqli_fetch_array($foto))
{
	$idfoto = $m['idfoto'];
}
//Insert Query
if($nilai==1){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 
}

if($nilai==2){ 
$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 
}

if($nilai==3){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 
}


if($nilai==4){ 
$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 
}


if($nilai==5){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 
}


if($nilai==6){ 
$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 
}


if($nilai==7){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 
}

if($nilai==8){ 
$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==9){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==10){ 
$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==11){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==12){ 
$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==13){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}


if($nilai==14){ 
$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}

if($nilai==15){ 
$result = mysqli_query($conn, "UPDATE smpslp
SET id_foto = $idfoto 
WHERE smpslp_id = $idsmp"); 

$result = mysqli_query($conn, "UPDATE geser
SET id_foto = $idfoto 
WHERE geser_id = $idgeser"); 

$result = mysqli_query($conn, "UPDATE kwh
SET id_foto = $idfoto 
WHERE kwh_id = $idkwh"); 

$result = mysqli_query($conn, "UPDATE mcb
SET id_foto = $idfoto 
WHERE mcb_id = $idmcb"); 
}
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