<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");
if(!$conn){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;

}

$course = $_GET["course"];
$sql = "SELECT * FROM courses WHERE name LIKE '%$course%' OR name LIKE '%$course%'"  ;
$result = mysqli_query($conn, $sql);
if(!$result){
    echo json_encode(array("success" => false, "msessage" => "something went wrong"));
    return;
}
$course_detail = mysqli_fetch_assoc($result);
$course_id = $course_detail['id'];

$sql_2 = "SELECT * FROM syllabus WHERE courses_id = '$course_id'";
$result_2 = mysqli_query($conn, $sql_2);
$syllabus = mysqli_fetch_all($result_2, MYSQLI_ASSOC);

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
  <link rel = "stylesheet" href = "css/common.css"/>

    </head>
    <style>
       
       
        .course-intro{
            position: relative;
            max-width: 1000px;
            margin: auto;
            min-height: 500px;
            padding: 10px;
            border-radius: 10px 10px;
            background-color: green;
           
          
        
            
        }
     
        .price{
            display: grid;
            justify-content: end;
            margin-top: 20px;
            
           
            
            
        }
        .price-input{
           width: 300px;
          
            padding: 10px;
            background-color: white;
            border-radius: 10px 10px;
            border-color: white;
            color: black;
            height: 150px;
        }
        .price-input>.cost{
            margin-top: 20px;
        }
        .price-input>button{
            width: 100%;
            margin-top: 20px;
            border-radius: 10px 10px;
            background-color: cyan;
            color: white;
            font-weight: bold;
            height: 30px;
        }
        .heading>.intro-detail>h5{
            max-width: 300px;
            border-radius: 10px 10px;
            height: 40px;
            background-color: yellow;
            color: green;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .heading>.intro-detail>div{
            margin-top: 20px;
           
        }
        .tarining-heading{
            font-size: 30px;
            font-weight: bold;
            color: white;

        }
        .course-detail{
            font-size: 20px;
            font-weight: bold;
            color: white;
            
        }
        .language>i{
            font-size: 30px;
          
            padding: 5px;
            box-shadow: 0px 0px 10px white;
           
            
            
        }
        .language{
            font-size: 20px;
            font-weight: bold;
            color: white;
        }
        .rating>.col-md{
            border-radius: 20px 20px;
            
            display: flex;
            justify-content: center;
            height: 40px;
            background-color: white;
            color: black;
            align-items: center;
            margin-left: 20px;
           
            font-weight: bold;
            margin-top: 10px;
            
        }
        #rating{
            max-width: 100px;
            
        }
        #rating>i{
            color: gold;
        }
        #students{
            max-width: 180px;
        }
        #placement{
            max-width: 220px;
        }
        .schedule{
            border-radius: 20px 20px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            background-color: white;
            max-width: 300px;
            border: solid 2px;
            height: 40px;
            font-weight: bold;
        }
        .offer{
            color: black;
            background-color: white;
            border-radius: 10px 10px;
            padding: 10px;
        }
        .coursedetail{
            margin-top: 70px;
            padding: 10px;
        }
        .coursedetail>.col-md>img{
            max-width: 500px;
            max-height: 500px;
            padding: 10px;
        }
        .coursedetail>.col-md{
            display: grid;
            justify-content: center;
            align-items: center;
            padding: 10px;
            
        }
        .point{
            max-width: 600px;
        }
        .coursedetail>.col-md>.point>.sub-heading{
            font-size: 25px;
            color: black;

        }
        .point>.description{
            color: rgb(90, 88, 88);
            font-size: 20px;
        }
        .course-highlight{
            max-width: 1000px;
            margin: auto;
            margin-top: 30px;
    }
    .input-group{
        margin-top: 20px;
        display: flex;
       
    }
    .input-group>div{
        margin-left: 20px;
    }
    .input-type{
        margin-left: 100px;
       
    }
    .input-icon{
       
       
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: lightblue;
        font-size: 30px;
        color: blue;

    }
    @media(max-width: 768px){
        .course-highlight{
            display: grid;
            justify-content: center;
        }
        .input-label{
            display: grid;
            justify-content: center;
           
        }
        .input-icon{
            width: 50px;
            height: 50px;
        }
        .input-group{
            display: flex;
            
        }
        .input-type{
            font-size: 15px;
        }
        .coursedetail>.col-md>img{
            max-width: 350px;
            max-height: 350px;
        }

    }
    .syllabus-conatiner{
        max-width: 800px;
        margin: auto;
      
        display: grid;
        justify-content: center;
        padding: 10px;
        margin-top: 100px;
    }
    .syllabus-conatiner>h1{
        
        font-size: 30px;
        display: flex;
        justify-content: center;
    }
    .syllabus-conatiner>div{
        margin-top: 20px;
    }
    .syllabus-content{
        display: flex;
        
        align-items: center;
    }
    .syllabus-content>div{
        display: flex;
        margin-left: 20px;
    }
    .content-icon{
      
        width: 30px;
        height: 30px;
    }
    
    .introduction{
        border: solid 1px;
        padding: 10px;
        border-color: silver;
    }
    .introduction>div{
        margin-top: 20px;
    }
    
    .intro>.col-6{
        
        display: flex;
        justify-content: end;
    }
    .intro>.col-5{
        font-weight: bold;
        
        
    }
    .syllabus-list{
        overflow: hidden;
        max-height: 0;
        transition: max-height 0.5s;
    }
    .syllabus-list>ol>li{
        margin-top: 20px;
    }
    .syllabuslist{
        max-height: 400px ;
    }
    .project{
        margin-top: 50px;
        max-width: 1200px;
        margin: auto;
        margin-bottom: 20px;
        padding: 10px;
    }
    .project>h1{
        display: flex;
        justify-content: center;
    }
    .projects{
        padding: 10px;
        column-gap: 20px;
    }
    .projects>.col-md{
        padding: 10px;
        border: solid 1px;
        border-color: silver;
       
        border-radius: 20px 20px;
        margin-top: 20px;
    }
    .projects>.col-md>div{
        margin-top: 20px;
        border-bottom: solid 2px blue;
        max-width: 200px;
    }
    .projects>.col-md>p{
        margin-top: 20px;
    }
    @media(max-width: 768px){

        .project>.col-md>p{
            font-size: 15px;
        }
        .project>h1{
            font-size: 18px;
        }
      
    }
    .course-overview{
        max-width: 1000px;
        margin: auto;
        margin-top: 50px;
        display: grid;
        justify-content: center;
        margin-bottom: 100px;
        padding: 10px;

    }
     .course-overview>h1{
        display: flex;
        justify-content: center;
        font-size: 30px;
     }
     .content-hide{
        max-height: 30px;
        overflow: hidden;
       
        transition: max-height 0.5s;
        padding: 10px;
      
       
     }
   .btn{
        height: 50px;
        width: 200px;
      
        color: blue;
        
        display: flex;
        justify-content: start;
        
       

     }
     .readless{
        height: 50px;
        width: 200px;
       
        color: blue;
        
        display: flex;
        justify-content: start;
        
     }
     #readless{
        display: none;
        
      

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

     
     .coursedetail{
        
        width: 100%;
       
     }
     body{
        overflow-x: hidden;
        background-color: #e3fafa;
       
        
     }
     
  
   
    
    </style>
    <body>
    <?php
    include "includes/navbar.php";
    include "includes/sidebar.php";
    ?>
      
        <div class = "course-intro">
            
            <div class = "heading row">
                <div class = "intro-detail col-md">
                    <h5>Certified Training</h5>
                    <div class = "tarining-heading">
                        <?= $course_detail['name'] ?>
                    </div>
                    <div class = "course-detail">
                       <?= $course_detail['description']?>
                    </div>
                    <div class = "language">
                        <i class = "fa fa-volume-up rounded-circle"></i>  <?=$course_detail['language'] ?>
                    </div>
                    <div class = "rating row">
                        <div class = "col-md" id = "rating">
                            <i class = "fa fa-star"></i> <?= $course_detail['rating'] ?>
                        </div>
                        <div class = "col-md" id = "students">
                            <i class = "fa fa-user" ></i> <?= $course_detail['students'] ?>students
                        </div>
                        <div class = "col-md"  id = "placement">
                            <i class = "fa fa-handshake-o"></i> Placement Assistance 
                        </div>
                    </div>
                    <div class = "schedule">
                        <i class = "fa fa-calendar-check-o"></i> <?= $course_detail['duration'] ?> weeks, <?= $course_detail['time'] ?>hr/day(flexible schedule)
                    </div>
                    <div class = "offer">
                        <b>1+1 Offer:</b>
                        Get Internship &amp; Job Preparation training <b>FREE</b> on purchase of <?=$course_detail['name'] ?> Training!
                    </div>
                </div>
                <div class = "col-md price">
                    <div class = "price-input">
                    
                        <h5 >Training Price</h5>
                        <div class = "cost"><?= $course_detail['price'] ?></div>
                        <button>Pay now</button>
                    </div>

                </div>
                

            </div>
            
        </div>
        <div class = "course-highlight">
            <h1>Course highlight</h1>
            <div class = "input-label row">
                <div class="col-md">
                    <div class = "input-group row">
                       <div class = "input-icon col-1 ">
                        <i class = "fa fa-play-circle"></i>
                       </div>
                        <div class = "input-type left-5 border-solid col-8">
                            <b>Learn Online</b>
                            <p>At Your Own Sechdule</p>

                        </div>

                    </div>
                    <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-commenting-o"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Doubt Clearining </b>
                             <p>Trough Q&Fourms</p>
 
                         </div>
 
                     </div>
                     <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-download"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Download Content</b>
                             <p>With Life Time Access</p>
 
                         </div>
 
                     </div>
                   
                </div>
                <div class = "col-md">
                    <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-mobile"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Mobile Friendly</b>
                             <p>At Your Own Sechdule</p>
 
                         </div>
 
                     </div>
                     <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-cog"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Building <?= $course_detail['projects'] ?> Projects</b>
                             <p>To Help You To Practicing</p>
 
                         </div>
 
                     </div>
                     <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-line-chart"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Beginer Friendly</b>
                             <p>No Prior Knowledge Required</p>
 
                         </div>
 
                     </div>



                    
                    
                </div>
                <div class = "col-md">
                    <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-handshake-o"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Placement Assistance</b>
                             <p>To Build a Carrier</p>
 
                         </div>
 
                     </div>
                     <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-volume-up"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b>Learn In English/Hindi</b>
                             <p>As Your Per Choice</p>
 
                         </div>
 
                     </div>
                     <div class = "input-group row">
                        <div class = "input-icon col-1 ">
                         <i class = "fa fa-calendar-o"></i>
                        </div>
                         <div class = "input-type left-5 border-solid col-8">
                             <b><?= $course_detail['duration'] ?> weeks Duration</b>
                             <p><?= $course_detail['time'] ?>hr/Day (flexible Sechdule)</p>
 
                         </div>
 
                     </div>
                   

                </div>
                
            </div>
        </div>
        <div class = "coursedetail row">
            <div class="col-md">
                <h2 class="heading"><b> Learn <?= $course_detail['name'] ?>?</b></h2>
                <div class="point">
                    <p class="sub-heading">Popularity</p>
                    <p class="description">With 2.6Mn apps on Play Store and 75 Billion downloads a year, Android App Development is one of the most popular skills today.</p>
                </div>
                <div class="point">
                    <p class="sub-heading">Build your own app</p>
                    <p class="description">Imagine an app on Play Store under your name. There is nothing more exciting than that!</p>
                </div>
                <div class="point">
                    <p class="sub-heading">Lucrative salary</p>
                    <p class="description">The Android Developers earn as high as 9 LPA+ according to Glassdoor.</p>
                </div>

            </div>
            <div class = "col-md">
                <img src ="img/Android App Development Course_ Learn Android Online with Certificate and 4 more pages - Personal - Microsoft​ Edge 2_20_2024 5_51_36 PM (1).png"/>
            </div>
        </div>
       <div class = "syllabus-conatiner">
        <h1>Android Training Syllabus</h1>
       <div class = "syllabus-content">
        <div class = "syllabus-input">
        
           <div class = "content-icon"> <i class = "fa fa-play-circle"></i> </div><b>135 video Content</b></span>
        </div>
        <div>
            <div class = "content-icon"><i class = "fa fa-cog"></i> </div><span><b><?= $course_detail['projects'] ?> + projects</b></span>
        </div>
       </div>
       <h5>After completed an this syllabus you can download videos</h5>
       <div class = "syllabus">
        <?php
        foreach($syllabus as $syllabses){
            ?>
        <div class = "introduction" id = "intro1" onclick = "intro<?=$syllabses['id']?>()" syllabus_id=<?= $syllabses['id'] ?>>
            <div class = "intro row">
                <div class = "col-5">
                     <?= $syllabses['name'] ?>

                </div>
                <div class = "col-6" id = "icon<?=$syllabses['id'] ?>">
                    <i class = "fa fa-chevron-down"></i>
                    
                </div>
               


            </div>
            <div class = "syllabus-content">
                <?php
                $syllabus_id = $syllabses['id'];
                $sql_3 = "SELECT * from topics WHERE topics_id = '$syllabus_id'";
                $result_2 = mysqli_query($conn, $sql_3);
                $topics = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
                

                ?>
                <div class = "syllabus-input">
                   
                   <div class = "content-icon"> <i class = "fa fa-file-text-o"></i> </div><?=mysqli_num_rows($result_2) ?> topics</span>
                    
                
                </div>
                <div>
                   
                    <div class = "content-icon"><i class = "fa fa-play-circle"></i> </div><span> 30 video inside</span>
                </div>
            </div>
            <div class = "syllabus-list" id = "syllabus-list<?=$syllabses['id'] ?>">
                <ul type = "point">
                    <?php 
                  
                    foreach($topics as $topics){
    
                    ?>
                    <li><?= $topics['name'] ?></li>
                    <?php
                    }
                    ?>


                </ul>
            </div>
        </div>
        <?php
        }
        ?>
       </div>
       
    </div>
    <div class = "project">
        <h1>Android App Developement Course Project Details</h1>
        <div class = "projects row">
            <?php
            $sql = "SELECT *  FROM project WHERE user_id = '$course_id'";
            $result = mysqli_query($conn, $sql);
            $project = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($project as $project){
                ?>
             <div class = "col-md">
                <div>
                    <b><?= $project['name'] ?></b>
                </div>
                <p><?=$project['description'] ?></p>

            </div>
           <?Php
            }
           ?>

        </div>
    </div>
    <div class = "course-overview">
        <h1><?= $course_detail['name'] ?>Course Overview</h1>
        <div class = "course-content">
        <p>In a digitally dominated world, people spend more time on mobile applications than on web pages or website searches. Android-based applications like e-commerce, social media communications, and gaming are the most popular. A study says that the number of app downloads exceeded 142 billion and is expected to reach 200 billion by 2025. As a result, Android development has emerged as one of the most in-demand skills in the job market.&nbsp;</p>
       <p>&nbsp;</p>
      
       <p>To gain expertise in this field, taking an Android Development course is ideal. Internshala’s course on Android development is a unique government-certified online training from NSDC (National Skill Development Corporation) &amp; Skill India. This course will equip learners with the right skills required to land their dream Android development job.</p>    
        </div>
        <div class = "content-hide" id = "content-hide">
            <h1>Android Online Course Outien</h1>
            <p>The course outline covers all the knowledge areas and skills that are required for enthusiastic learners to become skilled Android developers. It starts with a basic understanding of what Android is, its working environment, and the tools that are used to develop an Android application. Learners will also gain a logical understanding of writing code using the most important Android programming language, Kotlin.&nbsp;</p>
            Moving ahead, the participants will discover a comprehensive understanding of setting up an environment to develop an app with all the necessary components. It will walk you through the advanced concepts associated with Android development and its functionalities. The course will end with final completion only when the participants successfully submit a final project of their choice, that is, building an Android application from scratch.      
        </div>

       
    <div>
        <div  class = "btn" ><div id = "read" onclick = "courseread()">Read More <i class = "fa fa-chevron-down"></i></div> </div>
          <div class = "readless"  ><div id = "readless" onclick="readless()">Read Less <i class = "fa fa-chevron-up"></i></div> </div>
    </div>
       
    </div>
    </div>
 </div>


      
        <?php
        include "includes/footer.php";
        ?>
        
        <?php
        include "includes/course_modal.php";
    
        
        ?>
       
        


      <script>
       let sidebarbutton = document.getElementById("sidebar-button");
let sidebar_modal = document.getElementById("sidebar-modal");
let counts = 1;
sidebar_modal.onclick = function(){
   

counts++;
if(counts % 2 == 0){
sidebarbutton.style.display = "block";

}
else{
sidebarbutton.style.display = "none";
}

}

let signupbutton = function(){
window.location.href = "signup-form.php";

}



let nums = 1;
let sidebar = function(){
nums++;
if(nums % 2 == 0){
sidebarbutton.style.display = "block";

}
else{
sidebarbutton.style.display = "none";
}

}
let countes = 0;

let toggle =function(){
countes++;
if(countes % 2 == 0){
document.body.style.backgroundColor = "white";
document.body.style.color = "black";
let mode =document.getElementById("mode");
mode.classList.remove("fa-moon-o");
mode.classList.add ("fa-sun-o");
mode.style.color = "orange";


}
else{
document.body.style.backgroundColor = "black";
document.body.style.color = "white";
let courses=  document.getElementsByClassName("top-courses");
Array.from(courses).forEach(element =>{
element.style.backgroundColor = "orange";
let mode =document.getElementById("mode");
mode.classList.remove("fa-sun-o");
mode.classList.add("fa-moon-o");
mode.style.color = "white";


});
}

}

        let courseread = function(){
            let courseview = document.getElementById("content-hide");
            let readbtn =document.getElementById("read");
            let readless =document.getElementById("readless");
            courseview.style.maxHeight = "500px";
            
           
            readless.style.display = "block";
            readbtn.style.display = "none";
           
            
        }
        let readless =function(){
            let courseview = document.getElementById("content-hide");
            let readless =document.getElementById("readless");
            let readbtn =document.getElementById("read");
            courseview.style.height = "30px";
           
            readbtn.style.display = "block";
            readless.style.display = "none";
            window.location.reload();



        }
        
        let count = 1;
        let intro1 = function(){
            count++;
          
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list1");
                syllabus_list1.classList.add("syllabuslist");
                let icon1 = document.getElementById("icon1");
                icon1.innerHTML = "<i class = 'fa fa-chevron-up'></i>";

            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list1");
                let icon1 = document.getElementById("icon1");
              
                syllabus_list1.classList.remove("syllabuslist");
                icon1.innerHTML = "<i class = 'fa fa-chevron-down'></i>";

            }
            
        }
        let intro2 = function(){
            count++;
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list2");
                let icon2 = document.getElementById("icon2");
              
                syllabus_list1.classList.add("syllabuslist");
                icon2.innerHTML = "<i class = 'fa fa-chevron-up'></i>";

            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list2");
                syllabus_list1.classList.remove("syllabuslist");
                let icon2 = document.getElementById("icon2");
                icon2.innerHTML = "<i class = 'fa fa-chevron-down'></i>";


            }
            
        }
        let intro3 = function(){
            count++;
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list3");
                syllabus_list1.classList.add("syllabuslist");
                let icon3 = document.getElementById("icon3");
                icon3.innerHTML = "<i class = 'fa fa-chevron-up'></i>";

            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list3");
                syllabus_list1.classList.remove("syllabuslist");
                let icon3 = document.getElementById("icon3");
                icon3.innerHTML = "<i class = 'fa fa-chevron-down'></i>";



            }
            
        }
        let intro4 = function(){
            count++;
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list4");
                syllabus_list1.classList.add("syllabuslist");
                let icon4 = document.getElementById("icon4");
                icon4.innerHTML = "<i class = 'fa fa-chevron-up'></i>";


            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list4");
                syllabus_list1.classList.remove("syllabuslist");
                let icon4 = document.getElementById("icon4");
                icon4.innerHTML = "<i class = 'fa fa-chevron-down'></i>";


            }
            
        }
        let intro5 = function(){
            count++;
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list5");
                syllabus_list1.classList.add("syllabuslist");
                let icon5= document.getElementById("icon5");
                icon5.innerHTML = "<i class = 'fa fa-chevron-up'></i>";

            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list5");
                syllabus_list1.classList.remove("syllabuslist");
                let icon5= document.getElementById("icon5");
                icon5.innerHTML = "<i class = 'fa fa-chevron-down'></i>";



            }
            
        }
        let intro6 = function(){
            count++;
            if(count % 2 == 0){
                let syllabus_list1 = document.getElementById("syllabus-list6");
                let icon6= document.getElementById("icon6");
                syllabus_list1.classList.add("syllabuslist");
                icon6.innerHTML = "<i class = 'fa fa-chevron-up'></i>";

            }
            else{
                let syllabus_list1 = document.getElementById("syllabus-list6");
                syllabus_list1.classList.remove("syllabuslist");
                let icon6= document.getElementById("icon6");
                icon6.innerHTML = "<i class = 'fa fa-chevron-down'></i>";


            }
            
        }
      </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <script type = "text/javascript" src = "js/common.js"></script>
      

    </body>
</html>