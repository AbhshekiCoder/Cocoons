<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");
if(!$conn){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;

}
$id = $_GET['course-id'];
$sql = "SELECT * FROM courses WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;
}
$courses_id = mysqli_fetch_assoc($result);

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
            height: 100%;
            width: 100%;
            
           
           
        }
        .syllabus-container{
            border: solid 2px white;
            max-width: 300px;
            height: 80vh;
            overflow-y: auto;
            box-shadow: 0px 0px 10px grey;
            
        }
    
        
        .module{
            padding: 10px;
            font-weight: bold;
        }
        .module>h5{
            color: silver;

        }
        .module-title{
            border: solid 1px silver;
            display: grid;
            grid-template-columns: auto auto auto auto;
            height: 50px;
            justify-content: center;
        }
        .module-icon{
            display: flex;
            justify-content: end;
          
            align-items: center;
          
            width: 100px;
         
        }
        .module-name{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .syllabus-list{
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.5s;
            border: solid 1px grey;

        }
        .syllabus-list>ol>li{
            color: grey;
            font-weight: lighter;
            font-size: 15px;
            margin-top: 10px;
        }
        .topics>h5{
            color: silver;
        }
        
        .topics-title>.col-10{
           
           
          
            align-items: center;
            height: 50px;
           
           
         
        }
        .topics-title>.col-1{
         
            display: flex;
            justify-content: end;
            align-items: center;
           
            margin-left: 10px;
        }
        .topics-title>.col-10>div{
          
            display: flex;
            align-items: center;
            
            height: 100%;
           
        }
       
        .topics-title{
           border: solid 1px silver;
            margin-top: 30px;
            

        }
        .topics{
            padding: 20px;
        }
        
        .topics-videos{
            display: flex;
           
        }
        .video-title{
            margin-left: 20px;
        }
        .video-title>p{
            color: silver;
        }
        .video-icon>i{
            color: silver;
        }
        .topic-video{
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s;
           
           
           width: 100%;
          
        }
        .video-container{
            padding: 10px;
         
            max-height: 80%;
           
            max-width: 1100px;
            margin-left: 20px;
            
        
          
        }
        .video-container>video{
            margin: auto;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 10px grey;
            
           
        }
        @media print{
        html,
        body{
            display: none;
        }

     }
     html{
        user-select: none;
        
     }
     .sidebar{
        background-color: aliceblue;
        display: none;
     }
     .sidebar>i{
        font-size: 30px;
        margin-left: 20px;
        
     }
     @media(max-width: 768px){
       
        .video-container{
            margin-left: 0px;
        }
       
     }
    
     .assistant{
           
           height: 200px;
           width: 250px;
           position: absolute;
       
           
           
           margin-top: 30%;
           margin-left: 70%;
           position: fixed;
       
     }
       .assistant>img{
           width: 150px;
           height: 150px;
       }
       #message1{
          
          display: flex;
           justify-content: center;
           width: 150px;
           color: blue;
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         
}
.chat-container{
    border: solid 2px;
    position: absolute;
    margin-left: 30%;
   
    width: 800px;
    margin-top: 50px;
    height: 500px;
    background-color: cyan;

   

}
.assistant1{
    height: 100px;
    width: 100px;
    position: absolute;
   margin-top: 230px;
   margin-left: 650px;
    position: fixed;
    
}
.assistant1>img{
    height: 100px;
    width: 100px;

}
#message{
        display: flex;
           justify-content: center;
           width: 100px;
           color: blue;
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           
         

}
.maincontainer{
    width: 100%;
    height: 100%;
    background-color: #666666;
    opacity: 0.9;
    z-index: 10000000;

}
.chat{
  
   
    width: 600px;
    margin-left: 50px;
    border-radius: 20px 20px;
    height: 200px;
    margin-top: 170px;
    border-color: white;
    background-color: white;
   
    font-size: 20px;
    align-items: center;
    border: solid 2px;
    display: flex;
    justify-content: center;
}
#chat_open{
    display: flex;
    justify-content: end;
    font-size: 20px;
    
}
.chat-questions{
   
    height:  40px;
    background-color: white;
    width: 680px;
    margin: auto;
    display: flex;
    justify-content: center;
    margin-top: 50px;
    border-radius: 20px 20px;
}

#chat-start{
    position: absolute;
    margin-top: 200px;
    margin-left: 100px;
    color: blue;
}
#send{
    position: absolute;
    margin-top: 330px;
    margin-left: 550px;
}
        
       
    </style>
    <body>
        <?php
        include ("includes/navbar.php");
        ?>
        <div class = "sidebar " id = "sidebar">
            <i class = "fa fa-align-justify" id = "module" onclick = "sidebar()"></i>
        </div>
        
        <div class = "main-container row">
            <div class = "syllabus-container col-md">
                <div class = "module">
                    <h5>Module</h5>
                    <div class = "module-title"  onclick = "moduleicon()" >
                    <?php
                     $user_id = $_SESSION['id'];
                     $sql = "SELECT * FROM videos_run WHERE user_id = '$user_id'AND course_id = '$id' ";
                     $result = mysqli_query($conn, $sql);
                     $syllabus_id = mysqli_fetch_assoc($result);
                     if(mysqli_num_rows($result) < 1){
                          
                        $sql3 = "SELECT * FROM syllabus WHERE courses_id = '$id'";
                        $result3 = mysqli_query($conn, $sql3);
                        $coursesid = mysqli_fetch_assoc($result3);
                        $num = $coursesid['id'];  
                        $course_id = $num;  
                                         


                     }
                     else{
                        $course_id = $syllabus_id['syllabus_id'];
                     }
                     
                     
                   
                     
                     $sql_2 = "SELECT * FROM syllabus WHERE id= '$course_id'";
                     $result_2 = mysqli_query($conn, $sql_2);
                     $syllabus = mysqli_fetch_assoc($result_2);

                    
                    ?>
                        <div class = "module-name  border-blue-300" id = "module-name">
                        <?= $syllabus['name']  ?>
                        </div>
                        <div class = "module-icon " id = "module-icon">
                        <i class = 'fa fa-chevron-down'></i>

                        </div>
                        

                    </div>
                    <div class = "syllabus-list" id = "syllabus-list">
                        <?php
                        $sql_2 = "SELECT * FROM syllabus WHERE courses_id = '$id'";
                        $result_2 = mysqli_query($conn, $sql_2);
                        $syllabus = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
                        
                        ?>
                        <ol type = "1">
                            <?php
                            foreach($syllabus as $syllabuses){

                            
                            ?>
                            <li class = "syllabuslist" syllabus_id=<?=$syllabuses['id'] ?> course_id = <?=$id ?>><?= $syllabuses['name'] ?></li>
                            <?php
                            }
                            ?>
                        </ol>
                    </div>
                </div>
                <div class = "topics">
                    <h5>Topics</h5>
                    <?php
                    $user_id = $_SESSION['id'];
                    $sql = "SELECT * FROM videos_run WHERE user_id = '$user_id' AND course_id = '$id' ";
                    $result = mysqli_query($conn, $sql);
                    $syllabus_id = mysqli_fetch_assoc($result);
                 
                  
                    if(mysqli_num_rows($result) >0){
                        $course_id1 = $syllabus_id['syllabus_id'];
                                         
                     }
                     else{
                      
                        $sql = "SELECT * FROM syllabus WHERE courses_id = '$id'";
                        $result = mysqli_query($conn, $sql);
                        $coursesid = mysqli_fetch_assoc($result);
                        $num = $coursesid['id'];  
                        $course_id1 = $num;  
                     }
                    $sql_2 = "SELECT * FROM topics WHERE topics_id = '$course_id1'";
                    $result_2 = mysqli_query($conn, $sql_2);
                    $topics = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
                    $num = 0;
                    foreach($topics as $topicses){
                        $num++;

                    
                    ?>
                    <div class = "topic" onclick = "topic<?=$num ?>()" >
                    
                    <div class = "topics-title row">
                        <div class = "col-10">
                            <div>
                             <?= $topicses['name'] ?>

                             </div>

                        </div>
                        <div class = "col-1" id = "add-icon<?=$num ?>">
                            <i class = "fa fa-plus"></i>
                            
                        </div>
                        <div class = "topic-video" id = "topic-video<?=$num ?>">
                            <?php
                          
                            $topics_id = $topicses['id'];
                            $sql= "SELECT * FROM videos WHERE video_id = '$topics_id'";
                            $result_2 = mysqli_query($conn, $sql);
                            $content = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
                            
                            foreach($content as $content){

                            
                            ?>
                            
                        <div class = "topics-videos" video_id=<?= $content['id'] ?>>
                            <div class = "video-icon">
                                <i class = "fa fa-play-circle"></i>
                            </div>
                            <div class = "video-title">
                                <?= $content['name'] ?>
                                <p>1m 20sec</p>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    
                       
                    </div>
                      


                    </div>
                    
                 
                    </div>
                    <?php
                    }
                    ?>
                  
                </div>

            </div>
         
             
            <div class = "video-container col-md">
            <div class="assistant"  id = "assistant " onclick="assistant1()" >
           <div id = "message1"></div>
            <img src = "img/ezgif.com-optimize-5.gif" id = "assistant1" />
        </div>
               <div class="maincontainer modal" id = "maincontainer">
             
                <div class = "chat-container" >
                   <div id = "chat_open"><i class = "fa fa-close"></i></div>
                   <div class = "chat-questions" id = "chat-questions"></div>
                <div class="assistant1" id = "assistant1" onclick = "voice_assistant()" >
           <div id = "message"></div>
            <img src = "img/ezgif.com-optimize-5.gif" id = "assistant" />
        </div>
        <h5 id = "chat-start">Click here to start chat...</h5>
        <button id = "send">Send</button>
        <form id = "chat" name = "chats">
          
            <input type ="text" class = "chat" name = "chat"/>

        </form>
 


</div>

                </div>
               
          
            
         
                <div id = "video-name"></div>
               
       
                
                <?php
                $user_id = $_SESSION['id'];
                
           
               $sql = "SELECT * FROM content WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql); 
                $video_id = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)  > 1){
                    $videoid = $topics_id;
                }
                else{
                    $videoid = $video_id['video_id'];

                }
               
                $sql_2 = "SELECT * FROM videos WHERE id = '$videoid'";
                $result_2 = mysqli_query($conn, $sql_2);
                $video = mysqli_fetch_assoc($result_2);
                $user_id = $_SESSION['id'];
                
                $sql_3= "SELECT * FROM videos_run WHERE user_id = '$user_id' AND course_id = '$id'";
                $result_3 = mysqli_query($conn, $sql_3);
                
                
            ?>
          
            <?php if(mysqli_num_rows($result_3) < 1) {
               
            }else{
                ?> 
                 <video id = "video" controls autoplay = "true" controlsList = "nodownload"  preload="metadata">
            
            <source src="<?= $video['video'] ?>" type='video/mp4'   id="my-video1"/>
            <source src="<?= $video['video'] ?>" type='video/mp4'  id="my-video2" />
            <source src="<?= $video['video'] ?>" type='video/mp4'  id="my-video3" />
           
         
               </video>
             <?php

            }
              ?>     
              
             
     
        </div>
        
     
        </div>
       
      
        <?php
        include "includes/footer.php";
        ?>
       
       
        <script>
        
        let chatopen =document.getElementById("chat_open");
        chatopen.onclick =function(){
            let maincontainer = document.getElementById("maincontainer");
            let assistant1 =document.getElementById("assistant1");
           maincontainer.style.display = "none";
           assistant1.style.display = "block";
        }
    
         function assistant1(){
            let maincontainer =document.getElementById("maincontainer");
            let assistant1 =document.getElementById("assistant1");
            maincontainer.style.display = "block";
            assistant1.style.display = "none";

         }
           

  

     
             let  module_icon =document.getElementById("module-icon");
            let syllabuslist =document.getElementsByClassName("syllabuslist");
          
            let num = 1;
            let moduleicon =function(){
                num++;
                let syllabus_list = document.getElementById("syllabus-list");
                if(num % 2 == 0){
                    syllabus_list.style.maxHeight = "200px";
                     module_icon.innerHTML = "<i class = 'fa fa-chevron-up'></i>";


                }
                else{
                    syllabus_list.style.maxHeight = "0";
                    module_icon.innerHTML = "<i class = 'fa fa-chevron-down'></i>";
                }
               

            }
          
            window.addEventListener("load", function(){
                Array.from(syllabuslist).forEach(element =>{
                    element.addEventListener("click", function(event){
                    
                        let module_name =document.getElementById("module-name");
                        module_name.innerText = element.innerHTML;
                        element.style.color = "black";
                        element.style.fontWeight = "bold";
                        event.preventDefault();

                    })
                })
            });
           

            let syllabus_lists =document.getElementsByClassName("syllabuslist");
            window.addEventListener("load", function(){
                Array.from(syllabus_lists).forEach(element =>{
                    element.addEventListener("click", function(event){
                        let syllabus_id =  element.getAttribute("syllabus_id");
                        let course_id =  element.getAttribute("course_id");
                        var XHR = new XMLHttpRequest();
                        XHR.addEventListener("load", syllabus_success);
                        
                        XHR.open("GET", "api/video.php?syllabus_id=" +  syllabus_id  );
                      
                        XHR.send();
                        event.preventDefault();


                    })
                })

            })
            var syllabus_success =function(event){
                var response = JSON.parse(event.target.responseText);
                if(response.success){
                    window.location.reload();
                }
               
            }
           
          
            let topicvideo1 =document.getElementById("topic-video1");
           let topicvideo2 =document.getElementById("topic-video2");
           let topicvideo3 =document.getElementById("topic-video3");
           let topicvideo4 =document.getElementById("topic-video4");
           let topicvideo5 =document.getElementById("topic-video5");
           let topicvideo6 =document.getElementById("topic-video6");
           let topicvideo7 =document.getElementById("topic-video7");
           let topicvideo8 =document.getElementById("topic-video8");
           let topicvideo9 =document.getElementById("topic-video9");
           let topicvideo10 =document.getElementById("topic-video10");
           let nums = 1;

           let topic1 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo1.style.maxHeight = "500px";
                let add_icon1 =document.getElementById("add-icon1");
                add_icon1.innerHTML = "<i class = 'fa fa-minus'></i>";

            }
            else{
                topicvideo1.style.maxHeight = "0px";
                let add_icon1 =document.getElementById("add-icon1");
                add_icon1.innerHTML = "<i class = 'fa fa-plus'></i>";

            }
            
           }
           let topic2 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo2.style.maxHeight = "500px";
                let add_icon2 =document.getElementById("add-icon2");
                add_icon2.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo2.style.maxHeight = "0px";
                let add_icon2 =document.getElementById("add-icon2");
                add_icon2.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           
           }
           let topic3 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo3.style.maxHeight = "500px";
                let add_icon3 =document.getElementById("add-icon3");
                add_icon3.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo3.style.maxHeight = "0px";
                let add_icon3=document.getElementById("add-icon3");
                add_icon3.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }
           let topic4 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo4.style.maxHeight = "500px";
                let add_icon4 =document.getElementById("add-icon4");
                add_icon4.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo4.style.maxHeight = "0px";
                let add_icon4 =document.getElementById("add-icon4");
                add_icon4.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }
           let topic5 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo5.style.maxHeight = "500px";
                let add_icon5 =document.getElementById("add-icon5");
                add_icon5.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo5.style.maxHeight = "0px";
                let add_icon5 =document.getElementById("add-icon5");
                add_icon5.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }


           let topic6 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo6.style.maxHeight = "500px";
                let add_icon6 =document.getElementById("add-icon6");
                add_icon6.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo6.style.maxHeight = "0px";
                let add_icon6 =document.getElementById("add-icon6");
                add_icon6.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }


           let topic7 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo7.style.maxHeight = "500px";
                let add_icon7 =document.getElementById("add-icon7");
                add_icon7.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo7.style.maxHeight = "0px";
                let add_icon7 =document.getElementById("add-icon7");
                add_icon7.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }


           let topic8 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo8.style.maxHeight = "500px";
                let add_icon8 =document.getElementById("add-icon8");
                add_icon8.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo8.style.maxHeight = "0px";
                let add_icon8 =document.getElementById("add-icon8");
                add_icon8.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }
           let topic9 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo9.style.maxHeight = "500px";
                let add_icon9 =document.getElementById("add-icon9");
                add_icon9.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo9.style.maxHeight = "0px";
                let add_icon9=document.getElementById("add-icon9");
                add_icon9.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }
           let topic10 =function(){
            nums++;
            if(nums % 2 == 0){
                topicvideo10.style.maxHeight = "500px";
                let add_icon10 =document.getElementById("add-icon10");
                add_icon10.innerHTML = "<i class = 'fa fa-minus'></i>"

            }
            else{
                topicvideo10.style.maxHeight = "0px";
                let add_icon10=document.getElementById("add-icon10");
                add_icon10.innerHTML = "<i class = 'fa fa-plus'></i>"
            }
           }
         
           let video_title = document.getElementsByClassName("topics-videos");
           window.addEventListener("load", function(){
            Array.from(video_title).forEach(element =>{
                element.addEventListener("click", function(){
                    let video_id =element.getAttribute("video_id");
                    var XHR = new XMLHttpRequest();
                    XHR.addEventListener("load", success);
                    XHR.open("GET", "api/content.php?video_id="+ video_id);
                    XHR.send();
                    event.preventDefault();

                })
               
            })
           
           })
           var success =function(event){
            var response =JSON.parse(event.target.responseText);
            if(response.success){
                window.location.reload();
            }

           }
          
         
            
        </script>
        <script>
        const videoPlayer = document.getElementById('video');
    const qualitySelector = document.getElementById('qualitySelector');
    const sourceLow = document.getElementById('my-video1');
    const sourceMedium = document.getElementById('my-video2');
    const sourceHigh = document.getElementById('my-video3');

    // Function to change video source based on selected quality
    function changeQuality() {
      const selectedQuality = qualitySelector.value;

      switch(selectedQuality) {
        case 'low':
          sourceLow.removeAttribute('disabled');
          sourceMedium.setAttribute('disabled', true);
          sourceHigh.setAttribute('disabled', true);
          break;
        case 'medium':
          sourceMedium.removeAttribute('disabled');
          sourceLow.setAttribute('disabled', true);
          sourceHigh.setAttribute('disabled', true);
          break;
        case 'high':
          sourceHigh.removeAttribute('disabled');
          sourceLow.setAttribute('disabled', true);
          sourceMedium.setAttribute('disabled', true);
          break;
        default:
          sourceLow.removeAttribute('disabled');
          sourceMedium.setAttribute('disabled', true);
          sourceHigh.setAttribute('disabled', true);
      }

      videoPlayer.load();
      videoPlayer.play();
    }

    // Event listener to change video quality when selection changes
    qualitySelector.addEventListener('change', changeQuality);
  </script>
</script>

        </script>
     
   </script>
  
  
       <script type = "t ext/javascript" src = "js/jquery-3.3.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
var count = setInterval(() =>{


setTimeout(()=>{
document.getElementById("message").innerHTML = "Hii I am here to help you";

},2000)
setTimeout(()=>{
document.getElementById("message").innerHTML = "";

},4000)


},4000)


let assistant = document.getElementById("assistant");

let number = 0;
let chat =document.forms['chats'];
function voice_assistant(){
document.getElementById("chat-start").style.display = "none";
number++;
clearInterval(count);



console.log("hello")


function getVoices(){
let voices = speechSynthesis.getVoices();
if(!voices.length){
let utterance = new SpeechSynthesisUtterance(" ");
speechSynthesis.speak(utterance);
voices = speechSynthesis.getVoices();
}
return voices;
}
function speak(text, voice, rate, pitch, volume){
let speakData = new SpeechSynthesisUtterance();
speakData.volume = volume;
speakData.rate = rate;
speakData.pitch = pitch;
speakData.voice = voice;
speakData.text = text;
speakData.lang = 'en';
speechSynthesis.speak(speakData);
}
if(number == 1){
if('speechSynthesis' in window && number == 1){
    let voices = getVoices();
    let rate = 1, pitch = 1, volume = 1;
    let text = "hello sir i am  your digital assistant how can you help you? you can ask any questions  related to about your videos or written in this box then after click me ";
    speak(text, voices[1],rate,pitch,volume);
    chat.chat.value = text;
    }
    else{
    console.log("error");
    
    }
    
    setTimeout(() =>{
    var recongnization = new webkitSpeechRecognition();
    recongnization.onstart =() =>{
    document.getElementById("message").innerHTML = "Listening..."
    chat.chat.value = " ";
    
    
    
    } 
    recongnization.onresult = (e) =>{
    document.getElementById("message").innerHTML = " "
    
    
    var transcript = e.results[0][0].transcript;
    
    
    
    let array = transcript.split(' ');
    let s = array[array.length -1];
    
    
    
        if('speechSynthesis' in window ){
            let voices = getVoices();
            let rate = 0.9, pitch = 1, volume = 1;
            let text = 'hello' + transcript + 'jai shree ram';
            speak(text, voices[1],rate,pitch,volume);
        }
       
        
       
      
    
    else{
        console.log("error");
    
    }
    
    
    }
    recongnization.start();
    document.getElementById("chat").onclick = function(){
        recongnization.stop();
        document.getElementById("message").innerHTML = " "
    }
    
    },10000)


}
else if(document.getElementById("chat").innerHTML == "" && number != 1){
setTimeout(() =>{
    var recongnization = new webkitSpeechRecognition();
    recongnization.onstart =() =>{
    document.getElementById("message").innerHTML = "Listening..."
    document.getElementById("chat").innerHTML =" "
    
    
    
    } 
    recongnization.onresult = (e) =>{
    document.getElementById("message").innerHTML = " "
    
    
    var transcript = e.results[0][0].transcript;
    
    
    
    let array = transcript.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');

   let data =  array.toLowerCase();
  
    
    
    const responses = {
          
          
          
        "hello.": ["Hi there! How can I assist you today?"]
        ,

        
        
        
        
        "hello": "Hi there! How can I assist you today?"
        ,
       
        "coding hubs": "Here you will get Notes, Ebooks, project source Code, Interview questions. visit Coding Hubs.<a href='https://thecodinghubs.com' target='_blank'>Visit Website</a>" ,
        
        "how are you": "I'm just a bot"
        ,
        "need help": "How I can help you today?"
        ,
        "bye": "Goodbye! Have a great day!"
        ,
        "default": "i didn't understand"
       ,
                      "expert": "",
       
        "no": "Okay, if you change your mind just let me know!"
      ,
        "hii" : "Hi Whats'up"
     ,
        "hi" : "Hi Whats'up"
      ,
        "hii." : "Hi Whats'up"
      ,
        "you are single": "yes i am  single"
      ,
       
       
        
      };
   
      let userInput;
      if(chat.innerHTML = " "){
          userInput = data;

      }
      else{
        userInput = chat.chat.value;
      }
      
      if (userInput !== '') {
          //appendMessage('user', userInput);
          respondToUser(userInput);
       
          document.getElementById("chat-questions").innerHTML = userInput;
          
      }
      function respondToUser(userInput) {
       
       // let length = responses[userInput].length;
       // let num = Math.floor(Math.random() * (length -0) + 0);
       // console.log(num);
        console.log(responses[userInput[0]]);
     

      
        const response = responses[userInput]  || responses["default"];
          chat.chat.value = response;

        console.log(response);
        if('speechSynthesis' in window){
          let voices = getVoices();
          let rate = 1.2, pitch = 1, volume = 1;
          let text = response;
          speak(text, voices[1],rate,pitch,volume);
      }
      else{
          console.log("error");
      
      }
       
      }
   
      

    

    
    
    }
    recongnization.start();
    document.getElementById("chat").onclick = function(){
        recongnization.stop();
        document.getElementById("message").innerHTML = " "
    }
    
    },1000)

}
/** 
else if(document.getElementById("chat").innerHTML != "" && number != 1){
setTimeout(() =>{

   let chat = document.getElementById("chat");
    

  let data =  chat.toLowerCase();
  
    
    
   const responses = {
          
          
          
        "hello.": "Hi there! How can I assist you today?"
        ,

        
        
        
        
        "hello": "Hi there! How can I assist you today?"
        ,
       
        "coding hubs": "Here you will get Notes, Ebooks, project source Code, Interview questions. visit Coding Hubs.<a href='https://thecodinghubs.com' target='_blank'>Visit Website</a>" ,
        
        "how are you": "I'm just a bot"
        ,
        "need help": "How I can help you today?"
        ,
        "bye": "Goodbye! Have a great day!"
        ,
        "default": "i didn't understand"
       ,
                      "expert": "",
       
        "no": "Okay, if you change your mind just let me know!"
      ,
        "hii" : "Hi Whats'up"
     ,
        "hi" : "Hi Whats'up"
      ,
        "hii." : "Hi Whats'up"
      ,
        "you are single": "yes i am  single"
      ,
       
       
        
      };
      
      let userInput = chat.innerHTML ;
      
      if (userInput !== '') {
          //appendMessage('user', userInput);
          respondToUser(userInput);
       
          document.getElementById("chat-questions").innerHTML = userInput;
          
      }
      function respondToUser(userInput) {
       
       // let length = responses[userInput].length;
       // let num = Math.floor(Math.random() * (length -0) + 0);
       // console.log(num);
        
     

      
        const response = responses[userInput]  || responses["default"];
        document.getElementById("chat").innerHTML = response;

        console.log(response);
        
       
      }
   
      

    

    
    
    },1000)
 




}
*/



let send = document.getElementById("send");
send.onclick = function(){

function getVoices(){
  let voices = speechSynthesis.getVoices();
  if(!voices.length){
  let utterance = new SpeechSynthesisUtterance(" ");
  speechSynthesis.speak(utterance);
  voices = speechSynthesis.getVoices();
  }
  return voices;
  }
  function speak(text, voice, rate, pitch, volume){
  let speakData = new SpeechSynthesisUtterance();
  speakData.volume = volume;
  speakData.rate = rate;
  speakData.pitch = pitch;
  speakData.voice = voice;
  speakData.text = text;
  speakData.lang = 'en';
  speechSynthesis.speak(speakData);
  }
  let chat =document.forms['chats'];

const userMessage = [
  ["hi", "hey", "hello"],
  ["sure", "yes", "no"],
  ["are you genious", "are you nerd", "are you intelligent"],
  ["i hate you", "i dont like you"],
  ["how are you", "how is life", "how are things", "how are you doing"],
  ["how is corona", "how is covid 19", "how is covid19 situation"],
  ["what are you doing", "what is going on", "what is up"],
  ["how old are you"],
  ["who are you", "are you human", "are you bot", "are you human or bot"],
  ["who created you", "who made you", "who is your creator"],

  [
    "your name please",
    "your name",
    "may i know your name",
    "what is your name",
    "what call yourself"
  ],
  ["i love you"],
  ["happy", "good", "fun", "wonderful", "fantastic", "cool", "very good"],
  ["bad", "bored", "tired"],
  ["help me", "tell me story", "tell me joke"],
  ["ah", "ok", "okay", "nice", "welcome"],
  ["thanks", "thank you"],
  ["what should i eat today"],
  ["bro"],
  ["what", "why", "how", "where", "when"],
  ["corona", "covid19", "coronavirus"],
  ["you are funny"],
  ["i dont know"],
  ["boring"],
  ["im tired"]
];
const botReply = [
  ["Hello!", "Hi!", "Hey!", "Hi there!"],
  ["Okay"],
  ["Yes I am! "],
  ["I'm sorry about that. But I like you dude."],
  [
    "Fine... how are you?",
    "Pretty well, how are you?",
    "Fantastic, how are you?"
  ],
  ["Getting better. There?", "Somewhat okay!", "Yeah fine. Better stay home!"],

  [
    "Nothing much",
    "About to go to sleep",
    "Can you guess?",
    "I don't know actually"
  ],
  ["I am always young."],
  ["I am just a bot", "I am a bot. What are you?"],
  ["Sabitha Kuppusamy"],
  ["I am nameless", "I don't have a name"],
  ["I love you too", "Me too"],
  ["Have you ever felt bad?", "Glad to hear it"],
  ["Why?", "Why? You shouldn't!", "Try watching TV", "Chat with me."],
  ["What about?", "Once upon a time..."],
  ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
  ["You're welcome"],
  ["Briyani", "Burger", "Sushi", "Pizza"],
  ["Dude!"],
  ["Yes?"],
  ["Please stay home"],
  ["Glad to hear it"],
  ["Say something interesting"],
  ["Sorry for that. Let's chat!"],
  ["Take some rest, Dude!"]
];

let string = chat.chat.value;
console.log(string);
let item;
let items;
for (let x = 0; x < userMessage.length; x++) {
for (let y = 0; y <botReply.length; y++) {
if (userMessage[x][y] == string) {
  
  items = botReply[x];

  item = items[Math.floor(Math.random() * items.length)];
  console.log(item)
 
}
}
}
if(item){
chat.chat.value = item;
document.getElementById("chat-questions").innerHTML =string;
if('speechSynthesis' in window){
          let voices = getVoices();
          let rate = 1.2, pitch = 1, volume = 1;
          let text = item;
          speak(text, voices[1],rate,pitch,volume);
      }
      else{
          console.log("error");
      
      }
}
else{
let expectedReply = [
[
  "Good Bye, dude",
  "Bye, See you!",
  "Dude, Bye. Take care of your health in this situation."
],
["Good Night, dude", "Have a sound sleep", "Sweet dreams"],
["Have a pleasant evening!", "Good evening too", "Evening!"],
["Good morning, Have a great day!", "Morning, dude!"],
["Good Afternoon", "Noon, dude!", "Afternoon, dude!"]
];
let expectedMessage = [
["bye", "tc", "take care"],
["night", "good night"],
["evening", "good evening"],
["morning", "good morning"],
["noon"]
];

for (let x = 0; x < expectedMessage.length; x++) {
if (expectedMessage[x].includes(string)) {
  items = expectedReply[x];
  item = items[Math.floor(Math.random() * items.length)];
}
}
chat.chat.value = item;
}




}

}






</script>
    </body>
</html>