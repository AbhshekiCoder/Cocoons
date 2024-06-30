<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");
if(!$conn){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;

}
$user_id = $_SESSION['id'];
$sql_1 = "SELECT * FROM profile_images WHERE user_id = '$user_id' ";
$result_1 = mysqli_query($conn, $sql_1);
if(mysqli_num_rows($result_1) > 0){
    $sql_2 = "DELETE  FROM profile_images WHERE user_id = '$user_id' ";
    $result_2 = mysqli_query($conn, $sql_2);
    if(!$result_2){
        $response = array("success" => false , "message" => "Something went wrong");
        echo json_encode($response);
        
    
    }
    

    

}
$file = $_FILES['image'];

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if($fileerror == 0||$fileerror2 == 0){
    $destfile = 'pictures/'.$filename;
    move_uploaded_file($filepath, $destfile);
}


$sql = "INSERT INTO profile_images (name, user_id) VALUES ('$destfile','$user_id')";
$result = mysqli_query($conn, $sql );
if(!$result){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
else{
    $response = array("success" => true , "message" => "successfully send");
    echo json_encode($response);

}


