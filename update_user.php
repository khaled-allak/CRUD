<?php 
include('connection.php');
$product = $_POST['product'];
$category = $_POST['category'];
$id = $_POST['id'];

$sql = "UPDATE `users` SET  `product`='$product' , `category`= '$category' WHERE id='$id' ";
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