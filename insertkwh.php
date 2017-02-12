<?php   
include 'config.php'; 
//$json=$_GET ['json']; 
$json = file_get_contents('php://input'); 
$obj = json_decode($json);

//isi = geser,smpslp,
 //$image = $_POST['image'];
//echo $json; 
 
//Insert Query 
$result = mysqli_query($conn, "INSERT INTO kwh(id_pelanggan,lama_merk,lama_stand,lama_no_seri,lama_type,baru_merk,baru_stand,baru_no_seri,baru_type,baru_segel) 
VALUES (".$obj->{'id_pelanggan'}.", '".$obj->{'lama_merk'}."', '".$obj->{'lama_stand'}."', '".$obj->{'lama_no_seri'}."', '".$obj->{'lama_type'}."', '".$obj->{'baru_merk'}."', '".$obj->{'baru_stand'}."', '".$obj->{'baru_no_seri'}."', '".$obj->{'baru_type'}."', '".$obj->{'baru_segel'}."')"); 
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