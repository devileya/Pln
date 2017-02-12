<?php 
include 'config.php'; 
include 'contact.php'; 

$username=$_GET['username'];
$password=$_GET['password']; 
$return_arr = array();
 
$fetch = mysqli_query($conn, "SELECT * FROM user where username='$username' and password=md5('$password')"); 
if ($fetch->num_rows > 0) { 
 while($row = mysqli_fetch_assoc($fetch)) { 
  $c = new Contact(); 
  $c->username = $row['username'];
  $c->password = $row['password'];
  $c->nama = $row['nama'];
  $c->jabatan = $row['jabatan'];
  $c->id = $row['user_id'];
  array_push($return_arr, $c); 
 } 
} else { 
 array_push($return_arr, 'No Data'); 
} 
 
$conn->close(); 
 
echo json_encode(array('contact' => $return_arr)); 
?>   