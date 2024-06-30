<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");
if(!$conn){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;

}
$user_id = $_SESSION['id'];
$file = $_FILES['image'];
$description = $_POST['text'];
$upload_dir = './pictures/'.DIRECTORY_SEPARATOR;
$allowed_types = array('jpg', 'png', 'jpeg', 'gif');
$maxsize = 2*1024*1024;
if(!empty(array_filter($file['name'])))
foreach($file['tmp_name'] as $key => $value){
    $filename = $file['name'][$key];
    $file_tmpname = $file['tmp_name'][$key];
    $fileerror = $file['error'][$key];
    $filesize = $file['size'][$key];
    if($fileerror == 0){
        $destfile = $upload_dir.$filename;
        move_uploaded_file($file_tmpname, $destfile);
    }
    


}

$mime = mime_content_type($destfile);
                          if(strstr($mime, "video/")){
                            $type = "video";
                            
                          }
                          else if(strstr($mime, "image/")){
                            
                           $type = "image";
                      
                          }
                          else if(strstr($mime, "application/pdf")){
                           
                           $type = "pdf";
                          }
                          
                        
                          



$sql = "INSERT INTO user_data (user_id, image, description, type) VALUES ('$user_id','$destfile','$description', '$type')";
$result = mysqli_query($conn, $sql );
if(!$result){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$response = array("success" => true , "message" => "successfully send");
echo json_encode($response);


