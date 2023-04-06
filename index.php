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
$sql= "INSERT INTO NEWS (id,title,summary,rating,category) values(null,'news',' issues',0,'random');";
$result =$conn->query($sql);
if($result===TRUE){
    echo "successfully added";
}
else{
    echo "insertion failed";
}
$conn->close();

?>
