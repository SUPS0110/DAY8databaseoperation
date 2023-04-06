<?php 
$servername="localhost";
$username="root";
$password="";
$database="obnews";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("connection failed");
}
echo ("connection success");
$sql= "DELETE FROM NEWS where id=5";
$result =$conn->query($sql);
if($result===TRUE){
    echo "successfully added";
}
else{
    echo "insertion failed";
}
$conn->close();

?>
