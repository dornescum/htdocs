<?php 
// connetc to db
$conn =mysqli_connect('localhost', 'Misu', 'test1234', 'ninja_pizza');
// check connection
if(!$conn){
    echo "Connection error : " . mysqli_connect_error();
}
?>