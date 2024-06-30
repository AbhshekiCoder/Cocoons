<?php
session_start();
if(!isset($_SESSION['id'])){
  header ("Location: singinform.php");
  return;
}

$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");


 
if(!$conn){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}

$sql = "SELECT * FROM user_data";
$result = mysqli_query($conn, $sql);


$sql_2 = "SELECT * FROM user_data INNER JOIN users ON user_data.user_id = users.id ORDER BY RAND()";
$result_2 = mysqli_query($conn, $sql_2);
$user_data = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<htmL>
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
  
  width: auto;
  background-color: #e3fafa;
 
}
.maincontainer{
  background-color: #e3fafa;
  padding: 50px;
}
#profile-container{
  
  background-color: white;
  max-width: 300px;
  margin-left: 200px;
  height: 500px;
  margin: 20px;
  padding: 10px;
}
.profile-image{
  background-color: silver;
  height: 50px;
  display: grid;
  justify-content: center;
  justify-items: center;
}
.profile-image>.fa{
  position: absolute;
  margin-top: 30px;
 

}
#profile-name{
 
  height: 100px;
}
.profile-name{
  margin-top: 30px;
  display: grid;
  justify-content: center;
  font-size: 20px;
}
#profile-name>a{
  display: grid;
  justify-content: center;
}    
.connection{
  border: solid 2px;
  height: 70px;
  display: flex;
  justify-content: center;
  font-size: 20px;
  color: silver;
  border-left: none ;
  border-right: none;
  border-color: rgb(125, 123, 123);
}
.connection>span{
  display: flex;
  justify-content: end;
  justify-items: end;
  width: 30%;

 
}
.my-item{
  border: solid 2px;
  height: 50px;
  display: flex;
  justify-content: center;
  border-right: none;
  border-left: none;
  border-color: rgb(112, 111, 111); 
}
.item{
  margin-top: 30px;
  height: 150px;
  background-color: white;
}
.item>div{
  margin-top: 10px;
}
.discover-more{
  border: solid 2px;
  display: flex;
  justify-content: center;
  color: rgb(129, 125, 125);
  border-right: none;
  border-left: none;
  font-size: 20px;
  margin-top: 20px;
  text-decoration: none;
}
#content-container{

  margin-left: 5%;
  max-width: 900px;
 
  background-color: white;
  margin-top: 20px;
}
#profile-post{
 
  background-color: white;
  display: flex;
  justify-content: center;
  justify-items: center;


}
#add-content{
  
  border-color: silver;
  margin-top: 10px;
 
  border-radius: 20px 20px;
  padding: 10px;
 
  
  background-color: white;
  margin-top: 20px;
  border: solid 1px;
  border-color: silver;
 

}
.profile-post{
  max-width: 900px;
  background-color: white;
 
  display: flex;
  align-items: center;
  margin-top: 20px;
  
}
.profile-post>.fa{
  font-size: 40px;
  color: silver;
  margin-left: 10px;



  
}
.profile-post>input{
  width: 90%;
  height: 50px;
  border-radius: 20px 20px;
  margin-left: 10px;
  border: solid 1px;
  border-color: silver;

}
.profile-item{

  margin-top: 20px;
  display: flex;
}
.profile-item>div{
  display: flex;
  justify-content: center;
  font-size: 20px;
  margin-left: 10px;
  align-items: center;

}
.profile-item>.col-md>.fa{

  color: orange;

}
.profile-item>.col-md{
  margin-left: 10px;
  color: silver;
  
}
.profile-content{

 
 
 padding: 10px;



}

.image{
  height: 50px;
  width: 50px;
 
}


.profile-img{
  display: flex;
  justify-content: center;
  background-color: white;
}

.post-images-container{
  
  height: auto;
  
  background-color: white;
  
  object-position: center;
  
 
}
.post-images-container>img{
  height: 100%;
  background-size: cover;
  object-fit: contain;
  object-position: center;
  background-repeat: no-repeat;
 
  width: 100%;
  opacity: 1;
  filter: brightness(1) contrast(1.2) saturate(1.2);
  box-shadow: 0px 0px 1.25px rgba(0, 0,0, 0.1);
  

}
.post-images-container>video{
  object-fit: contain;
  object-position: center;
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
  opacity: 1;
  box-shadow: 0px 0px 1.25px rgba(0, 0,0, 0.1);
  
 

}
.post-images-container>iframe{
  height: 100%;
  width: 100%;
  opacity: 1;


}
.post-footer{
 
  display: flex;
  margin-top: 10px;
  max-width: 700px;
  
}
.post-footer>.col{
  margin-left: 10px;
  color: silver;

  
}

.post{
  margin-top: 20px;
  background-color: white;
}
.navbar-brand{
font-weight: bold;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
color: blue;
font-size: 30px;
}
#news-footer{
    max-width: 300px;
    margin-left: 5%;
background-color: white;
height: 500px;
margin-top: 20px;

}
#footer-news>h1{
font-size: 20px;
color: blue;
}
#footer-news>.news>li{
margin-top: 10px;
}
.advertising-section{
    height: 150px;
    width: 300px;
    margin-top: 20px;

}
.advertising-section>img{
    height: 100%;
    width: 90%;
}
#navbarSupportedContent{
 
  max-width: 500px;
  margin-right: 5%;
  
}
#menu-items{
 
  margin-right: 20%;
}
.list-section{
 
  max-width: 500px;
  background-color: white;
  padding: 10px;
  display: none;
  margin-left: 100%;
  margin-top: 100px;
  animation: right forwards 2s;
}
@keyframes right{
  0%{
    transform: translateX(0px);

  }
  100%{
    transform: translateX(-500px);

  }
}



#list-cart{
  border: solid 2px;
  padding: 10px;
  max-height: 300px;
  border-radius: 20px 20px;
  border-color: silver;
  

}
.list-heading{
 

  font-size: 20px;
  font-weight: bold;
}
.list-items{
  display: grid;
  grid-template-columns: repeat(3,1fr);

  
}
@media(max-width: 768px){
  .list-heading{
    font-size: 15px;
  }
  #list-items>.fa{
    font-size: 30px;
  }
  .close{
    font-size: 15px;
  }
}
#list-items{
  display: grid ;
  padding: 10px;
  justify-content: center;
 
 
  
 
  padding: 5px;
  color: silver;
  border-color: silver;

}
#list-items>.fa{
 color:deepskyblue;
  font-size: 50px;
  justify-self: center;
}
#list-items>div>a{
  text-decoration: none;
  color: silver;
}
.footer{
 
  height: 200px;
 
 
  width: 300px;
  margin-top: 200px;
  background-color: #e3fafa;
  ;
 
  
  

}

.footer>a{
  margin-left: 10px;
  text-decoration: none;
  color: rgb(97, 94, 94);
  
}

.copyright{
 
  color: blue;
  font-size: 20px;
  font-weight: bold;
  margin-top: 30px;
}
.copyright>span{
  color: rgb(153, 150, 150);
  font-weight: normal;
  
 
}
@media(max-width: 768px){
  .list-section{
    width: 400px;
    animation: left 2s forwards;
    
  }
  @keyframes left {
    0%{
      transform: translateX(0px);

    }
    100%{
      transform: translateX(-400px);
    }
    
  }
}
@media(max-width:768px){
  .voice-assistant{
    margin-left: 50%;
    margin-top: 90%;
  }
 

}
.dashboard{
  margin-left: 70%;
  margin-top: 100px;
  max-width: 300px;
  height: 480px;
  padding: 10px;
  background-color: white;
  border-radius: 20px 20px;
}
.profile{
  display: flex;
  height: 50px;
}
.profile>div>{
  font-size: 30px;
  
}
#name{
  display: flex;
  justify-content: center;
  font-size: 20px;
  margin-left: 20px;

}
.dashboard>.btn{
  width: 100%;
}
.account{
  border: solid 2px;
  border-left: none;
  border-right: none;
  border-color: silver;
  margin-top: 10px;
}
.account>div{
  margin-top: 10px;
}
.account>div>a{
  text-decoration: none;
  color: silver;
 
  

}
.manage{
  border: solid 2px;
  border-left: none;
  border-right: none;
  border-top: none;
  border-color: silver;
 
}
.manage>div{
  margin-top: 10px;
 
}
.manage>div>a{
  text-decoration: none;
  color: silver;
  
}
.signout>a{
  font-size: 15px;
  text-decoration: none;
  color: silver;
  margin-top: 10px;

}
#signup-modal{
 
  width: 100%;
  height: 100%;
  background-color: rgb(224, 219, 219);
}
.navbar>h1{
  margin-left: 20%;
  color: blue;
  font-weight: bold;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.heading{
  display: flex;
  justify-content: center;
  margin-top: 10px;
  font-size: 30px;



  
}
.open{
  
  height: 100%;
  width: 100%;
  background-color: rgb(255, 255, 255);
  color: blue;
  
}
.open>h1{
  margin: auto;
  margin-top: 20%;
  margin-left: 20%;
  font-size: 150px;
  font-weight: bold;
  
  
}
@keyframes move{
  0%{
    transform: rotateY(0deg);
  }
  100%{
    transform: rotateY(360deg);
  }

}
#close-modal{
  display: flex;
  justify-content: end;

}
#close-modal>i:hover{
  cursor: pointer;
  font-size: 40px;

}
.post-modal{
  
  max-width: 800px;
  background-color: white;
  padding: 10px;
  margin-left: 25%;
  margin-top: 100px;
  height: 700px;
}
.post-modal>.profile-image1>.image{
  width: 100px;
  height: 100px;
}
.image>img{
  width: 100px;
  height: 100%;
}
.text{
  max-width: 800px;
  height: 400px;
  
  margin-top: 30px;
 
}
.text>input{
  width: 100%;
  height: 400px;
  
  border: none;
}


.extra-button>.col-md>i{
  font-size: 30px;
  background-color: silver;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.extra-button>.col-md{
  padding: 10px;
 
  width: 50px;
  height: 50px;
}
.text>div>button{
  position: absolute;
  margin-left: 43%;
  margin-top: 50px;
  background-color: silver;
  color: black;
  height: 50px;
  width: 80px;
  border-radius: 20px 20px;

}
#signup-form{
  height: 100%;
  width: 100%;
 
  background-color: rgb(232, 232, 217) ;
  border-bottom: solid 2px silver;
}
#signup-form>.wrapper{
  margin: auto;
  margin-top: 10%;
  height: 550px;
}
#signin-form{
  height: 100%;
  width: 100%;
 
  background-color: rgb(232, 232, 217) ;

}
#signinform{
  margin: auto;
  margin-top: 10%;
  height: 550px;
}
.send-post{
  margin: auto;
  max-width: 800px;
  height: 650px;
  margin-left: 20%;
  border-bottom: solid 2px silver;

  margin-top: 100px;
  background-color: white;
  border-radius: 20px 20px;
  padding: 10px;
  
 
 
}
@media(max-width: 750px){
  .send-post{
    margin-left: 5%;
    max-width: 500px;
  }
  .extra-button>.col-md{
    
    margin-left: 40px;
  }
  #send-post{
    padding: 20px;
  }
  .text>div>button{
    margin-left: 70%;
    width: 50px;
    margin-top: 60px;
  }
  .list-section{
    margin-top: 200px;
  }
 
}
#send-post{
  width: 100%;
  height: 100%;
  background-color: #666666;
 
  border: solid 2px;
 
}
#container{
  
  margin-top: 20px;
  border-radius: 20px 20px;
  background-color: white;
  padding: 10px;
 
}
#content-container{
  background-color: rgb(224, 219, 219);

}
#interested{
  color: blue;
}
#file{
  position: absolute;
  width: 30px;
  height: 30px;
  margin-top: 10px;
 margin-left: 10px;
 
  background-color: #666666;
  opacity: 0.10;
  font-size: 0px;
  place-content: none;
}
::-webkit-input-placeholder{
  text-align: center;
  font-size: 20px;
}
#comment{

  max-width: 780px;
  margin-top: 20px;
 
}
.profile-photo{
  
  width: 50px;
  height: 50px;

}
.profile-photo>img{
  height: 100%;
  width: 50px;
}
.inputs{
  
  margin-left: 20px;
  
  width: 90%;
  
}
.inputs>input{
  width: 90%;
  height: 40px;
  border-radius: 20px 20px;
  border: solid 1px;
  border-color: silver;

}
.inputs>button{
  border-radius: 20px 20px;
  height: 40px;
  background-color: blue;
  color: white;
  
}
.comment-detail{
  margin-left: 20px;
 
}
.comment-detail>div{
  
  color: silver;
}
.follow{
   
    display: grid;
    justify-content: end;
}

#close-form{
  display: flex;
  justify-content: end;
  font-size: 20px;
  color:black;
  
}
@media(max-width: 768px){
  
  .post-footer{
    display: flex;
  }
  
}

.profileimage>i{
  font-size: 200px;
  color: chartreuse;
 
   
 


}
.share_app{
  position: absolute;
  width: 100px;
  margin-left: 80%;
  margin-top: 43%;
  display: none;
}
.share_app>diV>i{
  font-size: 28px;
  margin-top: 10px;
  box-shadow: 0px 0px 10px white;
  padding: 5px;
  background-color: white;
}
i:hover{
  cursor: pointer;
}
@media print {

  html,
        body{
            display: none;
        }
  
}
html{
    user-select: none;
  }
  .comment-box{
    display: flex;
  }
.comments{
  display: none;
}
.header{
  width: 100%;
}
body{
  background-color: #e3fafa;
  overflow-x: hidden;
  
}
@media (max-width : 768px) {
  .profile-container{
    max-width: 200px;

  }
  #content-container{
   
    margin-left: 0px;
    margin-right: 0px;
  }
  
  .main-container{
   
    margin-left: 0px;
    margin-right: 0px;
    padding: 0px;
  }
  .profile-item{
    margin-left: 0px;
  }
  .profile-item>.col-md{
    font-size: 18px;
  }
  .post-images-container{
    
    width: 100%;
  }
  .post-footer>.col{
   
    display: grid;
    justify-content: center;
    
   
  }
  .post-footer>.col>i{ 
    display: flex;
    justify-content: center;
  }

  
}



    </style>
    <body>
 <?php
 include "includes/navbar.php";
 ?>
  <div  id= "main-container"  class = "main-container row" <?php $user_id = $_SESSION['id'];
$num = 1;
$sql = "SELECT * FROM mode WHERE user_id = $user_id AND mode = $num ";
$result =  mysqli_query($conn, $sql);
$row = mysqli_num_rows($result); 
?>
 <?php  if($row == 0){
  ?>
  style  = " background-color: #e3fafa";
  
  
  <?php }else{
    ?>
    style = "background-color: black"
   
     <?php


  }?>>
 
<div id="profile-container" class="col-md">
<div class="profile-image">
  <i class="fa fa-camera"></i>
</div>
<div id="profile-name">
  <div class="profile-name">
  Welcome
  </div>
  <a href="#">Add a photo</a>
</div>
<div class="connection">
  connection <span class="connection-count">1</span>
</div>
<div class="my-item">
  <i class="fa fa-myitem"></i>
  my item
</div>
<div class="item">
  <div id="item1">
  <a href="#">Group</a>
  </div>
  <div id="item2">
  <a href="#">Events</a>
  </div>
  <div id="item3">
  <a href="#">Follwed Hashtags</a>
  </div>
  <a href="#" class="discover-more">Discover more</a>
</div>
</div>  
<div id="content-container" class="col-md" 
<?php $user_id = $_SESSION['id'];
$num = 1;
$sql = "SELECT * FROM mode WHERE user_id = $user_id AND mode = $num ";
$result =  mysqli_query($conn, $sql);
$row = mysqli_num_rows($result); 
?>
 <?php  if($row == 0){
  ?>
  style  = "background-color: #e3fafa;
  "
  
  <?php }else{
    ?>
    style = "background-color: black"
   
     <?php


  }?>>
  <div id="add-content">
    <div class="profile-post">
      <i class="fa fa-user-circle"></i>
      <input type="text" placeholder="start a post" name="post" fdprocessedid="qmvljf" id = "profile-post">
    </div>
    <div class="profile-item ">
      <div class="media col-md">
        <i class="fa fa-picture-o"></i>Media
      </div>
      <div class="event col-md">
        <i class="fa fa-calendar-check-o"></i>Events
      </div>
      <div class="write-articals col-md">
        <i class="fa fa-file-text"></i>article
      </div>
  
    </div>
  </div>
  
  

  <?php
  foreach($user_data as $userdata){
 
  
  ?>
<div id = "container" <?= $userdata['userid'] ?>>
<?php
$user_id = $_SESSION['id'];
$sql = "SELECT * from profile_images WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
$profile_img = mysqli_fetch_assoc($result);
?>
  <div class="profile-content  row">
    <div class="profile-img col-2">
      
      <img src="<?= $profile_img['name'] ?>" class="image rounded-circle">
    </div>
    <div class="names col-7">
      <div class="profile-names">
        <?= $userdata['name'] ?>
      </div>
      <div class="description">
        <?= substr($userdata['description'], 0, 150) ?>
      </div>
    </div>
    <div class="follow col-3" usersid=<?= $userdata['user_id']?> >
   <?php
    $user_id = $_SESSION['id'];
    $users_id = $userdata['userid'];
    $sql = "SELECT * FROM follow WHERE user_id = '$user_id' AND users_id = '$users_id'";
    $result = mysqli_query($conn, $sql);
    
  
    if(mysqli_num_rows($result) < 1){
      
      echo "follow";
      
    }else{
      
      echo "followed";
      
    }
    
    ?>
   </div>

    


  </div>
 
  <div class="post-images-container">
    <?Php
     $mime = mime_content_type($userdata['image']);
    if(strstr($mime, "video/")){
      ?>
      <video src = "<?=$userdata['image'] ?>" controls></video>
      <?php
    }
    else if(strstr($mime, "image/")){
      
      ?>
      <img src ="<?= $userdata['image'] ?>"/>
      <?php

    }
    else if(strstr($mime, "application/pdf")){
     
      ?>
      <iframe src = "<?= $userdata['image'] ?>"></iframe>
      <?php
    }
    
  
    
   ?>
   

  </div>
 
  <div class="post-footer row">
  
    <div class="like col">
      <?php 
      $user_id = $_SESSION['id'];
       $userid = $userdata['userid'];
       $sql = "SELECT * from user_interested WHERE user_id = $userid ";
       $result = mysqli_query($conn, $sql);
       $user_intrested = mysqli_fetch_all($result, MYSQLI_ASSOC);
       $interested_users_count = 0;
       $is_interested = false;
       foreach ($user_intrested as $interested_users) {
           if ($interested_users['user_id'] == $userdata['userid']) {
               $interested_users_count++;
 
               if ($interested_users['users_id'] == $user_id) {
                   $is_interested = true;
               }
           }
       }
       if($is_interested){
        ?>
        <i class="interested fa fa-thumbs-up" user_id = "<?=$userdata['userid'] ?>" id = "interested<?=$userdata['userid'] ?>" ></i>
        
      <?php
      
       }else{
        ?>
        <i class="interested fa fa-thumbs-o-up" user_id = "<?=$userdata['userid'] ?>" id = "interested<?=$userdata['userid'] ?>" ></i>
        <?php

       }
     ?>
          
          
       like<span class = "like"  id = "count<?=$userdata['userid'] ?>"user_id= "<?=$userdata['userid'] ?>" ><?= mysqli_num_rows($result) ?></span>
          
     
      
    </div>
    
    <div class="comment col" id = "comments-boxs" usersid= <?= $userdata['userid'] ?> >
      <i class="fa fa-commenting-o"></i>
      Comments
    </div>
    <div class="repost col">
      <i class="fa fa-refresh"></i>
      Repost
    </div>
    <div class="send col" user_data=<?= $userdata['image'] ?>>
      <i class="fa fa-paper-plane"></i>
      Send
    </div>
    <?php
   $userid = $userdata['userid'];
   $user_id = $_SESSION['id'];
   $sql = "SELECT * FROM comments WHERE usersid = $userid AND user_id = $user_id";
   $result = mysqli_query($conn, $sql);
   ?>
   
     <?php
   if(mysqli_num_rows($result) > 0){
    ?>
     <div id = "comment<?=$userdata['userid'] ?>" class = "comments" user_id= <?= $userdata['userid'] ?> style = "display: block">
      <div class = "comment-box ">
        <div class = "profile-photo col-2 rounded-circle">
          <img src = "pictures/Screenshot (8).png" class = "img rounded-circle"/>
        </div>
        <?php
        $userid = $userdata['userid'];
        $sql = "SELECT * FROM user_data WHERE userid = '$userid'";
        $result = mysqli_query($conn, $sql);
        if(!$result){
          $response = array("success" => false, "message" => "something went wrong");
          echo json_encode($response);
        }
        $users_id = mysqli_fetch_assoc($result);
      
           ?>
           
      
        <form class = "inputs "  method="POST" userid=<?=$userdata['userid'] ?>>
          <input type = "text" name = "message"><button type = "submit">send</button>
          
        </form>
      </div>
      <div class = "profile-photo col-2 rounded-circle">
          <img src = "pictures/Screenshot (8).png" class = "img rounded-circle"/>
        </div>
        
        <div class = "comment-detail col-md">
        <div class = "comment-name">Aditya</div>
          
        <?php 
          
          $user_id = $_SESSION['id'];
          $userid = $userdata['userid'];
          $sql = "SELECT * FROM message WHERE  userid = $userid";
          $result = mysqli_query($conn, $sql);
          $message = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($message as $comments){
           ?>
              
          
            <div class = "reply"><?=$comments['comments'] ?></div>
            <?php
          }
          ?>
         
       

          
       
          
        </div>
     </div>
     <?php
   }else{
    ?>
    <div id = "comment<?=$userdata['userid'] ?>" class = "comments" user_id= <?= $userdata['userid'] ?> style = "display: none">
    <div class = "comment-box ">
      <div class = "profile-photo col-2 rounded-circle">
        <img src = "pictures/Screenshot (8).png" class = "img rounded-circle"/>
      </div>
      <?php
      $userid = $userdata['userid'];
      $sql = "SELECT * FROM user_data WHERE userid = '$userid'";
      $result = mysqli_query($conn, $sql);
      if(!$result){
        $response = array("success" => false, "message" => "something went wrong");
        echo json_encode($response);
      }
      $users_id = mysqli_fetch_assoc($result);
    
         ?>
         
    
      <form class = "inputs "  method="POST" userid=<?=$userdata['userid'] ?>>
        <input type = "text" name = "message"><button type = "submit">send</button>
        
      </form>
    </div>
    <div class = "profile-photo col-2 rounded-circle">
        <img src = "pictures/Screenshot (8).png" class = "img rounded-circle"/>
      </div>
      
      <div class = "comment-detail col-md">
      <div class = "comment-name">Aditya</div>
        
      <?php 
        
        $user_id = $_SESSION['id'];
        $userid = $userdata['userid'];
        $sql = "SELECT * FROM message WHERE  userid = $userid";
        $result = mysqli_query($conn, $sql);
        $message = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($message as $comments){
         ?>
            
        
          <div class = "reply"><?=$comments['comments'] ?></div>
          <?php
        }
        ?>
       
     

        
     
        
      </div>
   </div>
<?php
   }
   ?>
    
  </div>
  
</div>
<?php
  }
  ?>


</div>

<div id = "news-footer" class = "col-md">
    <div id="footer-news">
        <h1 class="heading">Coocons News</h1>
        <ul class="news" id = "news">
         
          <li>austrilia won the world cup</li>
          <li>UST to hire 2000</li>
          <li>Retail set for wedding boost</li>
          <li>satta me paise barbad</li>
          <li>husband beating with her wife</li>
        </ul>
    </div>
    <div class = "advertising-section">
        <img src = "pictures/4.jpg4.jpg">
    </div>
    <div class = "footer ">
      <a href = "#">About</a>
      <a href = "#">Accessiblity</a>
      <a href = "#">Help Center</a>
      <a href = "#" class = "dropdown-toggle">Privacy and Terms</a>
      <a href = "#">Ad Choices</a>
      <a href = "#">Bussiness Services</a>
      <a href = "#"> More</a>
      <div class = "copyright" style="background-color: #e3fafa;
   ">
       Cocoons <span>Cocoons Corpration @ 2024</span>
      </div>
      
    </div>
    <div class = "voice-assistant sticky " id = "voice-assistant1" >
 
  
  <i class = "fa fa-user-circle" id = "voice-assistant"></i>
  Voice assistant
</div>



</div>





</div>
<div class = " modal" id = "send-post">

 <div class = "send-post">
 <div id = "close-form"><i class = "fa fa-times"></i></div>
  <div class = "name1 col-md">
    <h1>Aditiya cs</h1>
    post to anyone
  </div>
  

<form class = "text"  method ="post" action = "user_data.php" enctype="multipart/form-data" id = "form-data">
 
  <div id = "output"></div>
  <input type = "text" name = "text" placeholder="what do you want to talk about?" required>

  
  <div>
  <button type = "submit" class = "btn btn-primary "  id = "button">Post</button>
  </div>

<div class = "extra-button row">
  <div class = "image col-md">
    <input type = "file"  name ="image[]" id = "file" multiple/>
    <i class = "fa fa-image rounded-circle" ></i>
  </div>


  <div class  = "calendar col-md ">
    <i class = "fa fa-calendar rounded-circle"></i>
  </div>
  <div class = "offer col-md " >
    <i class = "fa fa-offer rounded-circle"></i>
  </div>
  <div class = "more col-md">
    <i class = "fa fa-nore rounded-circle"></i>
  </div>
</div>
</form>
 </div>
</div>

<script>
   
  
   let send_comment = document.getElementsByClassName("inputs");
window.addEventListener("load", function(){
    Array.from(send_comment).forEach(comments =>{
        comments.addEventListener("submit", function(event){
        
            var XHR = new XMLHttpRequest();
            var userid = comments.getAttribute("userid");
     
            var form_data = new FormData(comments);
           
            XHR.addEventListener("load", comment_success);
        
            XHR.open("POST", "api/message.php?userid=" + userid);
            XHR.send(form_data);
            event.PreventDefault();


        });

    });
})
var comment_success = function(event){
    var response = JSON.parse(event.target.responseText);
    if(response.success){
       
    }
   else{
   
   }
}

</script>
<script>
 

    let comment =document.getElementsByClassName("comment");
  let comments =document.getElementsByClassName("comments");
  window.addEventListener("load", function(){
    Array.from(comment).forEach(element =>{
      element.addEventListener("click", function(event){
       
         
          var XHR =new XMLHttpRequest();
          var userid = event.target.getAttribute("usersid");
          XHR.addEventListener("load", comment_open);
          XHR.open("GET", "api/comment.php?userid=" + userid);
          XHR.send();
          event.preventDefault();

        })
      })
    })
      
  

    var comment_open =function(event){
      var response = JSON.parse(event.target.responseText);
        if(response.success ){
          var user_id = response.user_id;
          let comment = document.getElementById("comment"+user_id);
          if(response.is_comment){
            
          comment.style.display = "block";
         

          }
          else{
            
          comment.style.display = "none";
         

          }
         
          
         
        }
        else if(!response.success && !response.is_comment){
       
              window.location.reload();

        }
      }

  
   
    
        

  let close =document.getElementById("close-form");
  let form_data =document.getElementById("send-post");
  close.onclick =function(){
    form_data.style.display = "none"
  }


  
  
  
 
 
 
  let num3 = 0;
  window.addEventListener("load", function(){

    let open1 = document.getElementById("open");
    setTimeout(()=>{
      open1.style.display = "block";
    },1000)
    setTimeout(()=>{
      open1.style.display = "none";

    },4000)
  
  });
  let send_modal= document.getElementById("send-post");
let profile_post = document.getElementById("profile-post");
profile_post.onclick = function(){
  send_modal.style.display = "block";
}
 



  
 
  

</script>
<script>

  
        

      </script>
<script>
  let share_icn = document.getElementsByClassName("send");
  window.addEventListener("load", function(){
    Array.from(share_icn).forEach(element =>{
      element.addEventListener("click", function(){
        let userdata = element.getAttribute("user_data");
        let url =encodeURI("http://127.0.0.1/AAG/"+userdata);
        function divToImage(userdata) {
  // Use html2canvas or similar library to capture the content of the div
  html2canvas(userdata).then(canvas => {
    canvas.toBlob(blob => {
      const file = new File([blob], userdata, { type: 'image/jpeg' });

    });
  });
}
const data = {
  files: [file],
  title: 'Shared from my website',
  text: 'Check out this image!',
  url: 'https://example.com'
};
   
        //let data = "skjskd";
       /**  const shareData = {
           title: "MDN",
            text: "hrtyg",
            url: url,
        };
        */
    
        navigator.share(data);

      })

    })
  })
  

 
  


</script>
<script type = "text/javascript" src = "js/follow1.js"></script>
<script type = "text/javascript" src = "js/post_submit.js"></script>



<script type = "text/javascript" src = "js/intrested1.js"></script>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/646e0f1f74285f0ec46d61c5/1h16um5o7';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
</script>


    </body>
</htmL>