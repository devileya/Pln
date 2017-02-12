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
$result = mysqli_query($conn, "INSERT INTO mcb(id_pelanggan,kapasitas,merk) 
VALUES (".$obj->{'id_pelanggan'}.", '".$obj->{'kapasitas'}."', '".$obj->{'merk'}."')"); 
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