<?php 
include('connection.php');
$product = $_POST['product'];
$category = $_POST['category'];

$sql = "INSERT INTO `users` (`product`,`category`) values ('$product', '$category')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>