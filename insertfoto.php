<?php   
include 'config.php'; 
//$json=$_GET ['json']; 
$json = file_get_contents('php://input'); 
$obj = json_decode($json);

//$isi = '".$obj->{'isi'}."'; 
//$isi = geser;
//isi = geser,smpslp,
 //$image = $_POST['image'];
//echo $json; 
 
//Insert Query 
$result = mysqli_query($conn, "INSERT INTO foto(foto_sebelum,foto_sesudah) 
VALUES ('".$obj->{'foto_sebelum'}."', '".$obj->{'foto_sebelum'}."')"); 
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