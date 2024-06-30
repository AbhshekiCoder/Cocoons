<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: sigin-form.php');
    return;
}
$conn = mysqli_connect("localhost:3307", "root",  "", "cocoonse");


 
if(!$conn){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM user_information WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
if(!$result){
  $response = array("success" => false , "message" => "Something went wron");
  echo json_encode($response);
  return;

}
$userinformation = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./output.css" rel="stylesheet">
  <link rel = "stylesheet" href="css/common.css"/>






    </head>
    <style>
     .main-container{
        max-width: 1000px;
        margin: auto;
        margin-top: 50px;
        background-color: white;
       
     }
     th{
        padding-left:  100px;
        color: grey;
        background-color: silver;
        height: 50px;
       
     }
     td{
        padding-left: 100px;
        
     }
     td>button{
      height: 40px;
      color: white;
      font-size: 15px;
      width: 150px;
      border-radius: 20px 20px;
      background-color: blue;
     }
     td>button>a{
      text-decoration: none;
      color: white;
     }
    
    .my-profile{
        max-width: 800px;
      background-color:  rgb(231, 231, 221);
      margin:auto;
      padding: 10px;


      
        background-color: white;
       
        padding: 10px;
        border-radius: 20px 20px;
        max-height: 500px;
    }
    @media(max-width: 768px){
      .my-profiles{
        margin-left: 0%;
      }
      .main-container{
        padding: 10px ;
      }
      .analytics{
        margin-left: 0%;
      }
      .my-network{
        margin-left: 0%;
      }
      .resources{
        margin-left: 0%;
      }
    }
    
    .background-image{
     
      height: 200px;
      background-color: rgb(151, 160, 170);
    }
    .camera-img{
      display: flex;
      justify-content: end;
    }
    .profile-image{
    
    
      
      border-color: white;
      box-shadow: 0px 0px  10px white;
    
      position: absolute;
      height: 200px;
      width: 200px;
      margin-top: 30px;
      margin-left: 5%;
      
    }
    .profile-image>img{
      border: solid 2px;
      border-color: white;
      box-shadow: 0px 0px 5px white;
    
      height: 100%;
      width: 100%;
     

    }
    .edit{
      display: flex;
      justify-content: end;
    }
    #profile-name{
      font-size: 20px;
      margin-top: 30px;
      font-weight: bold;
     
    }
    .skills{
      
      color: rgb(167, 167, 167);
      font-size: 20px;
      
    }
    .address{
      font-size: 18px;
    }
    .address>span>a{
      font-size: 18px;
      text-decoration: none;
      margin-left: 10px;

    }
    .followers>a{
      text-decoration: none;
      
    }
    .more-details{
      padding: 10px
    }
    .button1{
      margin-left: 10px;
   
      background-color: blue;
      height: 50px;
      border-radius: 10px 10px;
      font-weight: bold;
    
    }
    .button2{
      margin-left: 10px;
      border: solid 2px;
      width: 180px;
      color: blue;
      background-color: rgb(138, 194, 213);
      border-radius: 10px 10px;
      font-weight: bold;
      font-size: 18px;
    }
    .button3{
      border-radius: 10px 10px;
      margin-left: 10px;
      color: grey;
      background-color: white;
      font-weight: bold;
      font-size: 18px;
      
    }
   
    #input-text{
      margin-top: 10px;
    }
    .experiance>ul>li>img{
      height: 30px;
      width: 30px;


    }
    .experiance>ul>li{
      margin-top: 10px;
    }
    .analytics{
     
   
     background-color: white;
     max-width: 800px;
     border-radius: 20px 20px;
     padding: 10px;
     margin: auto;
     margin-top: 50px;
     
   }

   .analytics>div{
     margin-top: 20px;
   }
   .analytics>div>span{
     color: silver;
     font-weight: bold;
   }
   .profile-view>i{
     font-size: 30px;
     color: black;

   }
   .profile-view>span{
    
     font-size: 18px;
   }
   .post-immpressionview>a{
     font-size: 30px;
     color: black;
   
   }
   .post-immpressionview>span{
     font-size: 18px;
   }
   .resources{
     border-radius: 20px 20px;
     margin-top: 20px;
     background-color: white;
    
     max-width: 800px;
     padding: 10px;
   }
   .resources>div>span{
     font-size: 18px;
     color: silver;
     font-weight: bold;

   }
   @media(max-width:768px){
     .analytics{
       margin-left: 0%;
     }
     .resources{
       margin-left: 0%;
     }
     .advertising{
       margin-top: 100%;
       
     }
   }
   .creator-mode{
     border: solid 2px;
     margin-top: 20px;
     border-color: silver;
     border-top: none;
     border-right: none;
     border-left: none;
     
   }
   .creator-mode>span{
     font-size: 20px;
     color: black;
   }
   .creator-mode>i{
     font-size: 30px;
     color: black;
   }
   .creator-mode>span>button{
     background-color: green;
     color: white;
   }
   .creator-mode>div{
     font-size: 18px;
   }
   .my-network{
     margin: 20px;
     border-bottom: solid 2px;
     border-color: silver;
     height: 70px;
   }
   .my-network>i{
     font-size: 30px;
     color: black;
   }
   .my-network>div{
     font-size: 18px;
   }
   .Activity{
   
     max-width: 800px;
     background-color: white;
     padding: 10px;
     margin-top: 20px;
     border-radius: 20px 20px;
     margin: auto;
     margin-top: 40px;

   }
   .Activity-heading>button{
     color: blue;
     font-size: 18px;
     font-weight: bold;
     border-color: blue;
     background-color: white;
     height: 50px;
     max-width: 200px;
     border-radius: 20px 20px;
     margin-left: 40%;
    
    
   

   }
   .Activity-heading>i{
     display: flex;
     justify-content: end;
   }
   .Activity>.followers>a{
     font-size: 18px;
     text-decoration: none;
   }
   .activity{
     max-width: 400px;
     padding: 10px;
   }
   .activity>button{
     margin-left: 20px;
     color: rgb(98, 96, 96);
     border-color: silver;
     background-color: white;
     border-radius: 20px 20px;
     font-weight: bold;
     
   }
   .activity-documents>div{
     color: silver;
   }
  .documents-image>.document-image{
  
   height: 100px;
   width: 100px;
   background-color: antiquewhite;
   padding: 10px;
   


  }
  .document-image>img{
   height: 80px;
   width: 80px;
  }
  .document-image>video{
    height: 80px;
   width: 80px;

  }
  .document-image>iframe{
    height: 80px;
     width: 80px;
  }

  
  .documents-detail{
   font-size: 18px;
   color: black;
  
  }
  .activity-container{
    overflow-x: hidden;
    overflow-y: auto;
    height: 300px;
    
  }
  body{
    background-color: #e3fafa;
  }
  #introform{
    max-width: 800px;
    margin-left: 25%;
    height: 600px;
   
    margin-top: 100px;
  }
  .fa:hover{
    cursor: pointer;
  }
  #profile-image{
    width: 300px;
    height: 300px;
   
    background-color: blue;
    display: none;
    margin-top: 150px;
    margin-left: 40%;
  }
  .profileimage{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .profileimage>form>input{
    position: absolute;
    width: 50px;
    height: 50px;

   margin-top: 120px;
   margin-left: 20px;
   
  
  opacity: 0.10;
  background-color: blue;
  font-size: 0px;
  place-content: none;
  color: blue;
   
    
  }
  .profileimage>.fa{
    position: absolute;
   font-size: 100px;
   margin-top: 20px;
   color: grey;
  

  

  
  }
  .profileimage>form>button{
  
    margin-top: 200px;
   
    width: 100px;
    background-color: blue;
    color: white;
    
  
   
  }
  .btn{
    background-color: "blue";
  }
  #intromodal{
    display: flex;
    justify-content: end;
  }
  .profilemodal{
    display: flex;
    justify-content: end;

  }
    </style>
    <body>
        <?php
        include "includes/navbar.php";
        include "includes/sidebar.php";
        ?>
        
        <div class = "my-profile">
                <div class = "background-image">
                  <div class = "camera-img">
                    <i class = "fa fa-camera" onclick = "profile_img()"></i>
                  </div>
                  <?php
                  $user_id = $_SESSION['id'];
                  $sql = "SELECT * FROM profile_images WHERE user_id = '$user_id'";
                  $result = mysqli_query($conn, $sql);
                  $profile_img = mysqli_fetch_assoc($result);
                  ?>
                  <div class = "profile-image rounded-circle">
                  <img src = "<?= $profile_img['name'] ?>" class = "rounded-circle">
                  </div>

                </div>
                <div class = "profile-detail">
                  <div class = "edit">
                    <i class = "fa fa-pencil" onclick = "onClick()" ></i>
                    
                  </div>
                  <div id = "profile-name">
                    <?= $userinformation['first_name'] ?> <?= $userinformation['sirname'] ?> 
                       
                  </div>
                  <div class = "skills">
                   <?php
                     

                   
                   ?>
                  </div>
                  <div class = "address" id = "input-text">
                    <?=$userinformation['email'] ?>
                  </div>
                  <div class = "followers" id = "input-text">
                    <a href = "#">400 followers</a>
                  </div>
                 

                </div>
              


        </div>
        <div class = "analytics">
                  <h1>Analytics</h1>
                  <div><i class = "fa fa-eye"></i> <span>Private to you</span></div>
                  <div class = "post-impression row">
                    <div class = "profile-view col-md" >
                      <i class = "fa fa-user"></i>
                      <span> 
                        7 Profile Views
                        Discover who's viewed your profile.
    
                      </span>
                    </div>
                    <div class = "post-immpressionview col-md">
                      <i class = "fa fa-bar-chart"></i><span>
                        <?php
                        $sql = "SELECT * from user_intrested"
                        ?>
                        post impression
                        Checking who enaging with you</span>
                    </div>
                  </div>
                
    
                </div>
        <div class = "main-container">
            <table>
                <tr>
                    <th class="th">Training</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>
                        Web Devlopment
                    </td>
                    <td>
                       6/01/2023
                    </td>
                    <td>
                        7/02/2023
                    </td>
                    <td>
                      999
                    </td>
                    <td>
                      <button><a href = "course_training.php?course-id=<?= 2 ?>">Go to Training</a></button>
                    </td>
                </tr>
                <tr>
                    <td>
                      Android App Devlopment
                    </td>
                    <td>
                       3/01/2021
                    </td>
                    <td>
                        5/02/2021
                    </td>
                    <td>
                      999
                    </td>
                    <td>
                      <button><a href = "course_training.php?course-id=<?= 1 ?>">Go to Training</a></button>
                    </td>
                </tr>
                
            </table>

        </div>
        <div class = "Activity">
                  <div class = "Activity-heading row">
                    <h1 class = "col-md">Activity</h1>
                    <button class = "btn btn-secondary col-md">Create a post</button>
                    <i class = "fa fa-pencil col-md"></i></span>
                  </div>
                 <?php
                 //$user_id = $_SESSION['id'];
                // $sql = "SELECT * FROM follow WHERE user_id = '$user_id' " ;
                // $result = mysqli_query($conn, $sql);
                // $row_count = mysqli_num_rows($result);
                 ?>
                 
                  <div class = "activity row">
                    <?php
                     $sql_3 = "SELECT * From filter WHERE user_id = '$user_id'";
                     $result_3 = mysqli_query($conn, $sql_3);
                     if(mysqli_num_rows($result_3) > 0){
                      $type = mysqli_fetch_assoc($result_3);
                      $name = $type['type'];
                      if($name == "post"){
                        ?>
                         <button class = "btn btn-primary col-md" id = "post1" type = "post" style= "background-color:cornflowerblue">Posts</button>
                    <button class = "btn btn-primary col-md" id = "image1" type = "image">Images</button>
                    <button class = "btn btn-primary col-md" id = "pdf" type = "pdf">Documents</button>
                    <?php
                      }
                      else if($name == "image"){
                        ?>
                         <button class = "btn btn-primary col-md" id = "post1" type = "post">Posts</button>
                    <button class = "btn btn-primary col-md" id = "image1" type = "image" style= "background-color:cornflowerblue">Images</button>
                    <button class = "btn btn-primary col-md" id = "pdf" type = "pdf">Documents</button>
                    <?php
                      }
                     else if($name == "pdf"){
                        ?>
                         <button class = "btn btn-primary col-md" id = "post1" type = "post">Posts</button>
                    <button class = "btn btn-primary col-md" id = "image1" type = "image">Images</button>
                    <button class = "btn btn-primary col-md" id = "pdf" type = "pdf" style= "background-color:cornflowerblue">Documents</button>
                    <?php
                      }
                     

                     
                   }else{
                    ?>
                     
                      
                        <button class = "btn btn-primary col-md" id = "post1" type = "post">Posts</button>
                    <button class = "btn btn-primary col-md" id = "image1" type = "image">Images</button>
                    <button class = "btn btn-primary col-md" id = "pdf" type = "pdf">Documents</button>
                    <?php
                      
                   }
                   ?>
                  </div>
                  <div class = "activity-container">
                  <?php
                  $user_id = $_SESSION['id'];
                  
                  $sql_3 = "SELECT * From filter WHERE user_id = '$user_id'";
                  $result_3 = mysqli_query($conn, $sql_3);
                 
                  if(mysqli_num_rows($result_3) > 0){
                    $type = mysqli_fetch_assoc($result_3);
                    $name = $type['type'];
                    if($name == "image"){

                      $sql = "SELECT * FROM user_data WHERE user_id = '$user_id' AND type = 'image'" ;
                      $result = mysqli_query($conn, $sql);
                      $userdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      foreach($userdata as $usersdata){
                        ?>
                         <div class = "activity-documents" userid = <?php $usersdata['userid'] ?>>
                        
                        <div><?=  $_SESSION['name'] ?> cs posted this. 2d</div>
                        <div class = "activity-img row">
                          <div class = "documents-image col-md rounded-circle">
                            <div class = "document-image rounded-circle">
                              <?php
                              $mime = mime_content_type($usersdata['image']);
                              if(strstr($mime, "video/")){
                                ?>
                                <video src = "<?=$usersdata['image'] ?>" controls></video>
                                <?php
                              }
                              else if(strstr($mime, "image/")){
                                
                                ?>
                                <img src ="<?= $usersdata['image'] ?>"/>
                                <?php
                          
                              }
                              else if(strstr($mime, "application/pdf")){
                               
                                ?>
                                <iframe src = "<?= $usersdata['image'] ?>"></iframe>
                                <?php
                              }
                              
                            
                              
                             ?>
                             
                             
                            </div>
                          </div>
                          <div class = "documents-detail col-md"><?php  $usersdata['description'] ?></div>
                        </div>
                                                   
        
                      </div>
                      <?php
    
                      }
                      
  
                    }
                    if($name == "post"){
                      $sql = "SELECT * FROM user_data WHERE user_id = '$user_id'" ;
                      $result = mysqli_query($conn, $sql);
                      $userdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      foreach($userdata as $usersdata){
                        ?>
                         <div class = "activity-documents" userid = <?php $usersdata['userid'] ?>>
                        <div><?=  $_SESSION['name'] ?> cs posted this. 2d</div>
                        <div class = "activity-img row">
                          <div class = "documents-image col-md rounded-circle">
                            <div class = "document-image rounded-circle">
                              <?php
                              $mime = mime_content_type($usersdata['image']);
                              if(strstr($mime, "video/")){
                                ?>
                                <video src = "<?=$usersdata['image'] ?>" controls></video>
                                <?php
                              }
                              else if(strstr($mime, "image/")){
                                
                                ?>
                                <img src ="<?= $usersdata['image'] ?>"/>
                                <?php
                          
                              }
                              else if(strstr($mime, "application/pdf")){
                               
                                ?>
                                <iframe src = "<?= $usersdata['image'] ?>"></iframe>
                                <?php
                              }
                              
                            
                              
                             ?>
                             
                             
                            </div>
                          </div>
                          <div class = "documents-detail col-md"><?php  $usersdata['description'] ?></div>
                        </div>
                                                   
        
                      </div>
                      <?php
    
                      }
  
  
                    }
                   if($name == "pdf"){
                      $sql = "SELECT * FROM user_data WHERE user_id = '$user_id' AND type = 'pdf'" ;
                      $result = mysqli_query($conn, $sql);
                      $userdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      foreach($userdata as $usersdata){
                        ?>
                         <div class = "activity-documents" userid = <?php $usersdata['userid'] ?>>
                         
                        <div><?=  $_SESSION['name'] ?> cs posted this. 2d</div>
                        <div class = "activity-img row">
                      
                          <div class = "documents-image col-md rounded-circle">
                            <div class = "document-image rounded-circle">
                              <?php
                              $mime = mime_content_type($usersdata['image']);
                              if(strstr($mime, "video/")){
                                ?>
                                <video src = "<?=$usersdata['image'] ?>" controls></video>
                                <?php
                              }
                              else if(strstr($mime, "image/")){
                                
                                ?>
                                <img src ="<?= $usersdata['image'] ?>"/>
                                <?php
                          
                              }
                              else if(strstr($mime, "application/pdf")){
                               
                                ?>
                                <iframe src = "<?= $usersdata['image'] ?>"></iframe>
                                <?php
                              }
                              
                            
                              
                             ?>
                             
                             
                            </div>
                          </div>
                          <div class = "documents-detail col-md"><?php  $usersdata['description'] ?></div>
                        </div>
                                                   
        
                      </div>
                      <?php
    
                      }
  
                    }

                  }
                  
                  else{
                    $sql = "SELECT * FROM user_data WHERE user_id = '$user_id'" ;
                    $result = mysqli_query($conn, $sql);
                    $userdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($userdata as $usersdata){
                      ?>
                       <div class = "activity-documents" userid = <?php $usersdata['userid'] ?>>
                     
                      <div><?=  $_SESSION['name'] ?> cs posted this. 2d </div>
                      <div class = "activity-img row">
                        <div class = "documents-image col-md rounded-circle">
                          <div class = "document-image rounded-circle">
                            <?php
                            $mime = mime_content_type($usersdata['image']);
                            if(strstr($mime, "video/")){
                              ?>
                              <video src = "<?=$usersdata['image'] ?>" controls></video>
                              <?php
                            }
                            else if(strstr($mime, "image/")){
                              
                              ?>
                              <img src ="<?= $usersdata['image'] ?>"/>
                              <?php
                        
                            }
                            else if(strstr($mime, "application/pdf")){
                             
                              ?>
                              <iframe src = "<?= $usersdata['image'] ?>"></iframe>
                              <?php
                            }
                            
                          
                            
                           ?>
                           
                           
                          </div>
                        </div>
                        <div class = "documents-detail col-md"><?php  $usersdata['description'] ?></div>
                      </div>
                                                 
      
                    </div>
                    <?php
  
                    }
                  }
                  ?>

                 
                  </div>
                 
                </div>
                <div class = "modal" id = "introform">   
   
   <form class = "bg-white  introform" id = "intro-form"  method = "post" >
    <div id = "intromodal"><i class = "fa fa-times"></i></div>
    <div  id = "output"></div>
   <div class = "mb-3 bg-white ">Edit Intro</div>    
   
   <div class = "form-group" >
    <div class="mb-3">
     
      <h1>Basic Info</h1>
  
      <label for="exampleInputEmail1" class="form-label">first name </label>
      <input type="name" name = "first-name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
     
    </div>
    <label for="exampleInputEmail1" class="form-label">last name </label>
      <input type="name" name = "sirname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  
     
      <div class = "mb-3">Name Pronounciation</div>
  
      <div class = "mb-3">Pronouns</div>
    <div class="mb-3"> 
      
      <select class = "form-select" name = "pronoun" id = "validationDefault04" >
        <option select disabled  value ="">please select</option>
        <option>She/Her</option>
        <option>He/Him</option>
        <option>They/Them</option>
        <option>Custom</option>
        
        
      </select>
    </div>
    <div class="mb-3"> 
      <label for="exampleInputPassword1" class="form-label">Email Adress</label>
      <input type="text" name = "email" class="form-control" id="exampleInputPassword1">
    </div>
  
    
   
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   
  </form>
  
    </div>
    <div  class = "modal" id = "profile-image">
    <div class = "profilemodal" onclick = "profilemodal()"><i class = "fa fa-times"></i></div>
      <div class = "profileimage">
    <i class = "fa fa-user-circle"></i>
    <form id = "profile-form1" method = "post" enctype="multipart/form-data" action = "profile_image.php">
    
    
    
      <input type = "file" name = "image"/>
      <button type = "submit">Send</button>
      
      
    </form>
      </div>
  </div>
        <script type = "text/javascript" src = "js/image1.js"></script>
        <script type = "text/javascript" src = "js/user_intro.js"></script>
        <script type = "text/javascript" src = "js/sidebar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <script>
         let post = document.getElementById("post1");
         let image1 =document.getElementById("image1");
         let pdf = document.getElementById("pdf");
         
            window.addEventListener("load", function(){
              post.addEventListener("click", function(event){
                console.log("clcick")
                try{
                  var type = post.getAttribute("type");
                var XHR = new XMLHttpRequest();
       
                XHR.addEventListener("load", post_send );
               
                XHR.open("GET", "api/filter.php?type=" + type );
                XHR.send();
                event.preventDefault();

                }
                catch(err){
                  console.log("err")
                }
               
            

              })
            })
           
             var post_send =function(event){
              var response = JSON.parse(event.target.responseText);
              if(response.success){
                window.location.reload();
               
              }
              else{
                alert(response.message);
              }

             }

             window.addEventListener("load", function(){
              image1.addEventListener("click", function(event){
                console.log("clcick")
                try{
                  var type = image1.getAttribute("type");
                var XHR = new XMLHttpRequest();
       
                XHR.addEventListener("load", image_send );
               
                XHR.open("GET", "api/filter.php?type=" + type );
                XHR.send();
                event.preventDefault();

                }
                catch(err){
                  console.log("err")
                }
               
            

              })
            })
           
             var image_send =function(event){
              var response = JSON.parse(event.target.responseText);
              if(response.success){
                window.location.reload();
               
                
              }
              

             }
             window.addEventListener("load", function(){
              pdf.addEventListener("click", function(event){
                console.log("clcick")
                try{
                  var type = pdf.getAttribute("type");
                var XHR = new XMLHttpRequest();
       
                XHR.addEventListener("load", pdf_send );
               
                XHR.open("GET", "api/filter.php?type=" + type );
                XHR.send();
                event.preventDefault();

                }
                catch(err){
                  console.log("err")
                }
               
            

              })
            })
           
             var pdf_send =function(event){
              var response = JSON.parse(event.target.responseText);
              if(response.success){
                window.location.reload();
              
                
              }
              

             }
      </script>
        <script>
            let introform = document.getElementById("introform");
            function onClick(){
                introform.style.display = "block";
            }
            function profile_img(){
              let profile_image =document.getElementById("profile-image");
              profile_image.style.display = "block";
            }
          
        </script>
        <script>
        let intromodal =document.getElementById("intromodal");
        intromodal.onclick =function(){
          introform.style.display = "none";
        }
        function profilemodal(){
          document.getElementById("profile-image").style.display = "none";

        }
          
        </script>
    </body>
</html>