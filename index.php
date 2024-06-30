<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "cocoonse");
if(!$conn){
    echo json_encode(array("success" => false, "message" => "something went wrong"));
    return;

}

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
        
     *{
        margin-left: 0px;
        margin-right: 0px;
        padding: 0;
     }
        .ads-modal{
           
            margin-top: 5px;
            background-image: linear-gradient(cyan, blue);
            position: relative;
            
            
          
         
        }
        .carousel{
            margin: auto;
          
            height: 300px;
            width: 600px;
           
           
        }
        .carousel>.carousel-inner{
         
            height: 300px;
            width: 600px;
           
        }
        .carousel-item>img{
            
            height: 300px;
            object-fit: cover;
            width: 600px;
            
         

        }
        .carousel-item>video{
            width: 600px;
            height: 300px;
            object-fit: cover;

        }
       
        @media(max-width: 768px){
            .carousel{
                height: 200px;
            }
            .carousel>.carousel-inner{
                height: 200px;
            }
            .carousel-item>img{
                height: 200px;
            }
          
            .form{
                display: block;
            }
            
        

        }
        .programms-subject{
         
          
          
            padding: 10px;
            
        }
        .items{
           
            margin-top: 30px;
           
            border-color: silver;
            font-weight: bold;

        }
        .items>a{
            text-decoration: none;
            font-size: 18px;
            color: grey;

        }
      
      
        .nav-item>a{
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: rgb(87, 85, 85);
            
        }
      
        h2{
            font-family:'Times New Roman', Times, serif;
        }
        
        
      .ads{
        width: 100%;
      
        display: flex;
       
       
      }  
      .ad1{
      
        display: flex;
        
        font-size: 20px;
        max-width: 600px;
      
        animation: slideright 10s alternate-reverse infinite;
        
      
        
       
        margin-left: 50px;
        
      }
      @keyframes slideright{
        0%{
            transform: translateX(0);
           
        }
        50%{
            transform: translateX(60vw);
            animation-play-state: paused;
            display: flex;
        }
        
        100%{
            transform: translateX(100vw);
            display: none;
        }
      }
      .ad2{
      
        display: flex;
        font-size: 20px;
        max-width: 600px;
        
       
       
        animation: slideleft 10s  alternate-reverse infinite;
      

        
      }
      @keyframes slideleft{
        0%{
            transform: translateX(0px);
        }
        50%{
            transform: translateX(-60vw);
            animation-play-state: paused;
        }
        100%{
            transform: translateX(-70vw);
            
        }
      }
    .ad1>p{
       
        color: blue;
        background-color: yellow;
      
        
        border-radius: 10px 10px;
        margin-left: 50px;
        display: flex;
        justify-content: center;
        border-color: grey;

    }
    .ad2>p{
       
        color: blue;
        background-color: yellow;
        display: flex;
        justify-content: center;
        
        border-radius: 10px 10px;
        margin-left: 50px;
        border-color: grey;

    }
    .form{
        max-width: 500px;
       margin: auto;
       display: none;
       
       
    }
    .form>input{
        width: 90%;
      
      

    }
    .maincontainer{
       
        max-width: 100%;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 20px;
        background-color: white;
        display: grid;
    justify-content: center;
       

    }
   
.ad{
   
    max-width: 300px;
}
.container{

    width: 100vw;
    padding: 10px;
    display: grid;
    justify-content: center;
   
    
    
}

.top-courses{
    border-radius: 20px 20px;
 
    margin-top: 20px;
    background-color: white;
    width: 1200px;

}
.it-courses{
    display: flex;
    overflow-x: auto;
    width: 1200px;
   
}

.it-courses>.col{
    width: 370px;
    height: 270px;
    margin-left: 20px;
    
    
}
.it-courses>.col>a{
    width: 370px;
    height: 270px;
   
    

}
.top-courses>h2>b{
    display: flex;
    justify-content: center;

}
.it-courses>.col>a>img{
    width: 370px;
    height: 250px;
    border-radius: 20px 20px;
    filter: brightness(1) contrast(1.2) saturate(1.2);
    box-shadow: 0px  4px 8px 0px rgba(0, 0, 0, 0.2);
    object-fit: fill;
}
.it-courses>.col>a>img:hover{
    width: 380px;
    height: 260px;
}

    
 
    
    @media(max-width: 768px){
        .ad1{
            display: none;
        }
        .form{
            display: block;
        }
        .ad2>p{
            font-size: 15px;
            width: 300px;
        }
        .maincontainer{
            padding: 0px;
        }
        .container{
            background-color: aliceblue;
            border-radius: 20px 20px;
        }
        .top-courses{
            padding: 5px;
        }
        .it-courses{
            width: 340px;
            overflow-x: auto;
            
           
            margin: auto;
        }
        .it-courses>.col{
          width: 320px;
        height: 260px;
        margin-left: 10px;
        scroll-snap-type: mandatory x;
    
        }
   .it-courses>.col>a{
    width: 320px;
    height: 250px;
    

}
.it-courses>.col>a>img{
    width: 300px;
    height: 100%;
    

}
.it-courses>.col>a>img:hover{
    width: 310px;
    height: 260px;
}
    }
    
    body{
        overflow-x: hidden;
        background-color: #e3fafa;
       
      
      
     }
     @media screen {
        html, body{
            user-select: none;
        }
        
     }
     .mode{
        display: flex;
        justify-content: end;
        background-color: purple;
      
     }
     .header{
    height: 100px;
    display: flex;
    align-items: center;
    
    
}

.assistant{
           
            height: 200px;
            width: 250px;
            position: absolute;
            margin-top: 50px;
            position: fixed;
        
            
            
           
          
        
      }
        .assistant>img{
            width: 150px;
            height: 150px;
           
        }
        #message{
           
           display: flex;
            justify-content: center;
            width: 250px;
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          
}

.courses-modal{
    max-width: 800px;
    height: 320px;

  
   margin-left: 20%;
   margin-top: 100px;
}
.course-container{
    border: solid 1px silver;
    background-color: white;
   
}
.course-container>.col-md{
    border: solid 1px;
    border-color: grey;

}
.course-container>.col-md>.course-name{
    margin-top: 20px;

}
.course-name>.course{
    display: flex;
    justify-content: center;
    font-weight: bold;
    font-size: 20px;
    color: grey;
   
    width: 200px;
}
.course-name>.icon{
    display: flex;
    justify-content: end;
    color: silver;
}
.it{
    margin-top: 20px;
    display: none;

}
.it>.coursename{
    margin-top: 20px;
    
}
.course-details{
    display: grid;
    justify-content: center;
}
.coursename>a{
    text-decoration: none;
    color: grey;
   
}
.coursename{
    color: grey;
   
   
}
.ad>img{
    width: 300px
}
.it-courses::-webkit-scrollbar{
    width: 20px;
    height: 5px;
    display: none;
 
}


.left-btn{
    position: absolute;
    margin-top: 100px;
   z-index: 999;
   

}
.left-btn>i{
    font-size: 30px;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 1px silver;
    color: silver;
    box-shadow: 0px 0px 10px cyan;
    background-color: white;
}
.right{
    position: absolute;
  margin-left: 90%;
  margin-top: 100px;
  z-index: 999;
   
  
    
}
.right>i{
    font-size: 30px;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 1px silver;
    color: silver;
    box-shadow: 0px 0px 10px cyan;
    background-color: white;

}
.top-courses>h2{
    display: flex;
   
    justify-content: center;
    align-items: center;
}
.title{
    display: flex;
    justify-content: center;
    font-size: 30px;
    font-weight: bold;
    color: rgb(63, 63, 66)
}
.title>span{
    margin-left: 20px;
}
.ad{
    position: absolute;
   
    width: 200px;
    background-color: white;
   
    z-index: 999;
    margin-left: 85%;
    padding-bottom: 10px;
    border: solid 1px blue;

    
}
.data-icon{
    height: 50px;
    overflow: hidden;
   
    transition: height 0.5s;
    padding: 10px;
    font-size: 15px;
    

}
.dataicon{
    margin-top:2e30px;
}
.dataicon>a{
    color: blue;
    text-decoration: none;
}
.ad-icon{
    position: absolute;
    z-index: 10000;
    margin-left: 50%;
  
    
     
}
.ad-icon>i{
    font-size: 30px;
    height: 30px;
    width: 30px;
    color: blue;
    display: flex;

    justify-content: center;
    border: solid 1px;
    background-color: white;
    box-shadow: 0px 0px  10px blue;
}
.adicon{
    height: 100%;
  
}
.ad>h5{
    display: flex;
    justify-content: center;
    color: blue;
}

    </style>
    <body>
        <?php
         include "includes/navbar.php";
         include "includes/sidebar.php"
        ?>
        <div class="ad">
        <h5>do you listen</h5>
        <div class="data-icon">
            <?php
            $sql = "SELECT * FROM user_data WHERE description LIKE '%Tech%' OR '%company%' OR '%Hiring%'  OR '%Requirtment%'" ;
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
           
            foreach($data as $datas){
                ?>
                
                <div class = "dataicon"<?= $datas['userid']?>>
                   <?= substr($datas['description'], 0, 100) ?>
                    <a href = "review_page.php">Read More</a>
                </div>

               
              
                <?php

            }
           
                       ?>
         </div>
                         <div class = "ad-icon">   <i class = "fa fa-angle-down rounded-circle"></i></div>

        </div>
        <div class = "ads">
            <div class = "ad1 " id = "ad1"> 
            <p >please visit our review page</p>
            <p>please visit our review page</p>
           
           </div>
           <div class="ad2"  id = "ad2"> 
            <p>please visit our review page</p>
            <p>please visit our review page</p>
           
           </div>

        </div>

       <form class = "form max-w-lg" method = "GET" action = "course.php">
            <input type = "text"  class = "max-w-md" name = "course" placeholder="Search like buterfly"  >
            <button type = "submit"><i class="fa fa-search"></i></button>
        </form>
       
       

       

     
    
       
<div class = "ads-modal">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <img src = "img/Orange Illustrative Playful Welcome To My Channel Video.gif"  class = "d-block w-100"/>
                       
                  </div>
                  <div class="carousel-item">
                    <img src="img/banner-hands-people-solving-puzzle-riddle-playing-intellectual-game-taking-part-quiz-tournament-challenging-their-141653231.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/Colorful Geometric Shapes Math Moodle Course Thumbnail (2) (1).png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
        <div class = "maincontainer">
    <div class = "container col-md">
        <div class = "top-courses" >
         
            <div class = "title">Hi, <?php if(!isset($_SESSION['id'])){
                echo ' ';
            }else{
                echo $_SESSION['name'];
            }?><span><img src = "img/Internships _ Jobs _ Trainings & Placement Guarantee Courses _ Post a Job and 6 more pages - Personal - Microsoft​ Edge 6_5_2024 5_23_18 PM.png"/></span></div>
        
            <h2><b>Trending on cocoons</b><span><img src = "img/Internships _ Jobs _ Trainings & Placement Guarantee Courses _ Post a Job and 6 more pages - Personal - Microsoft​ Edge 6_5_2024 5_12_03 PM.png"/></span></h2>
            <div onclick=" right()" class = "right"><i class ="fa fa-angle-right  rounded-circle"></i></div>
            <div class = "it-courses">
            
            <div onclick="left()" class = "left-btn"><i class ="fa fa-angle-left rounded-circle" ></i></div>
            
            <div class = "col">
                            <a href = "#">
                            <img src = "img/java.png"/>
                            </a>
        
                        </div>
                        <div class = "col">
                            <a href = "course.php?course=Android App Devlopement">
                            <img src = "img/web devlopment.jpeg"/>
                            </a>
                           
                            
                        </div>
                        <div class = "col">
                            <a href = "#">
                            <img src = "img/react.png"/>

                            </a>
                            
                        </div>
                        <div class = "col">
                            <a href = "#">
                            <img src = "img/management.jpeg"/>
                            </a>
        
                        </div>
                        <div class = "col">
                            <a href = "course.php?course=Web">
                            <img src = "img/personality devlopment.jpeg"/>
                            </a>
                           
                            
                        </div>
                        <div class = "col">
                            <a href = "#">
                            <img src = "img/bussiness training.jpeg"/>

                            </a>
                            
                        </div>
                        <div class = "col">
                            <a href = "#">
                            <img src = "img/projectm.jpeg">
                            </a>
        
                        </div>
                        <div class = "col">
                            <a href = "course.php?course=Web">
                            <img src = "img/bussinessanalaytics.jpeg"/>
                            </a>
                           
                            
                        </div>
                        <div class = "col">
                            <a href = "#">
                            <img src = "img/financwle busjjd.jpeg"/>

                            </a>
                            
                        </div>
            </div>
          
        </div>
        </div>
       
       
       
       

    </div>
    

</div>
      
    <div class = "courses-modal modal" id = "course-modal" onmouseleave="course1()">
        <div class = "course-container row">
            <div class = "col-md">
              <div class = "course-name row">
                <div class = "course col-md">
                    IT

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right course_icon " course="it"  ></i>
                </div>
              </div>
              <div class = "course-name row">
                <div class = "course col-md">
                   Web Devlopment

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right course_icon " course="bussiness-management"></i>
                </div>
              </div>
              <div class = "course-name row">
                <div class = "course col-md">
                   Bussiness management

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right course_icon " ></i>
                </div>
              </div>
              <div class = "course-name row">
                <div class = "course col-md">
                    Skill Devlopement

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right" course="skill-development"></i>
                </div>
              </div>
              <div class = "course-name row">
                <div class = "course col-md">
                   Subjects

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right course_icon " course="subjects"></i>
                </div>
              </div>
              <div class = "course-name row">
                <div class = "course col-md">
                    Skills

                </div>
                <div class = "icon col-2">
                    <i class = "fa fa-chevron-circle-right" coursr="skill"></i>
                </div>
              </div>

            </div>
            <div class = "col-md course-details">
                <div id = "it" class = "it " onmouseleave="it()">
                    <div class = "coursename">
                        Web Devlopement
                    </div>
                    <div class = "coursename">
                        <a href = "course.php?course=Android">Android App Devlopement</a>
                    </div>
                    <div class = "coursename">
                        React
                    </div>
                    <div class = "coursename">
                        Java
                    </div>
                    <div class = "coursename">
                        C/C++
                    </div>
                </div>
                <div id = "bussiness_management" class = "it " onmouseleave="bussiness_management()">
                    <div class = "coursename">
                      Digital Marketing
                    </div>
                    <div class = "coursename">
                        Investement
                    </div>
                    <div class = "coursename">
                       Data Science
                    </div>
                    <div class = "coursename">
                        Expenses analysus
                    </div>
                    <div class = "coursename">
                       Accounting for busisins
                    </div>
                </div>
                <div id = "skill-devlopment" class = "it " onmouseleave="skill_development()">
                    <div class = "coursename">
                        Web Devlopement
                    </div>
                    <div class = "coursename">
                        Android Devlopment
                    </div>
                    <div class = "coursename">
                        React
                    </div>
                    <div class = "coursename">
                        Java
                    </div>
                    <div class = "coursename">
                        C/C++
                    </div>
                </div>
                <div id = "subject" class = "it " onmouseleave="subject()">
                    <div class = "coursename">
                        Web Devlopement
                    </div>
                    <div class = "coursename">
                        Android Devlopment
                    </div>
                    <div class = "coursename">
                        React
                    </div>
                    <div class = "coursename">
                        Java
                    </div>
                    <div class = "coursename">
                        C/C++
                    </div>
                </div>
                <div id = "skill" class = "it " onmouseleave="skill()">
                    <div class = "coursename">
                        Web Devlopement
                    </div>
                    <div class = "coursename">
                        Android Devlopment
                    </div>
                    <div class = "coursename">
                        React
                    </div>
                    <div class = "coursename">
                        Java
                    </div>
                    <div class = "coursename">
                        C/C++
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
    
      
        </div>
       
       
        <div class = "footer">
            <div class = "social-media flex">
                <div>
                    <h4 class="" style="color: white" >This is avhsbjdbnd djndjmnd kd</h4>
                </div>
                <div class = "social-media-app row">
                    <div class = "col-md">
                        <a href = "#"><i class = "fa fa-twitter"></i></a>
                    </div>
                    <div class = "col-md">
                        <a href = "#"><i class = "fa fa-facebook"></i></a>
                    </div>

                    <div class = "col-md">
                        <a href = "#"><i class = "fa fa-whatsapp"></i></a>
                    </div>

                    <div class = "col-md">
                        <a href = "#"><i class = "fa fa-instagram"></i></a>
                    </div>


                </div>
            </div>
            <div class = "content row">
               <div class = "col-md">
                <a href = "#">
                    Cocoons Bussiness
                </a>
                <a href = "#">
                    Teach on Cocoons
                </a>
                <a href = "#">
                    Get the app
                </a>
                <a href = "#">
                    About us
                </a>
                <a href = "#">
                    Contact us
                </a>

               </div>
               <div class = "col-md">
                <a href="#">Careers</a>
                <a href = "#">Blog</a>
                <a href = "#">Help and Support</a>
                <a href = "#"> Afflite</a>
                <a href = "#">Investors</a>
               </div>
               <div class = "col-md">
                <a href = "#">Terms</a>
                <a href = "#">Privacy Policy</a>
                <a href = "#">Cookie settings</a>
                <a href = "#">SItemap</a>
                <a href = "#">Accessiblity statement</a>
                
               </div>
            </div>
            <div class = "copyright">
                <a href = "#">Coccons</a>
                <p>copyright@2024coccons</p>
            </div>
        </div>

        
        <script type = "text/javascript" src = "js/assistant1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      
       <script type = "text/javascript" src = "js/sidebar.js"></script>
       <script>
       
     
       
       </script>
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
  <script>
   let course =document.getElementsByClassName("course_icon");
   Array.from(course).forEach(element =>{
    element.addEventListener("mouseover", function(){
        var courses =element.getAttribute("course");
        if(courses == "it"){
            document.getElementById("it").style.display = "block";
            document.getElementById("bussiness_management").style.display = "none";
            document.getElementById("skill-devlopment").style.display = "none";
            document.getElementById("subject").style.display = "none";
            document.getElementById("skill").style.display = "none";
        }
        if(courses == "bussiness-management"){
            document.getElementById("bussiness_management").style.display = "block";
            document.getElementById("it").style.display = "none";
            document.getElementById("skill-devlopment").style.display = "none";
            document.getElementById("subject").style.display = "none";
            document.getElementById("skill").style.display = "none";

        }
       if(courses == "skill-development"){
            document.getElementById("skill-devlopment").style.display = "block";
            document.getElementById("it").style.display = "none";
            document.getElementById("bussiness_management").style.display = "none";
            document.getElementById("subject").style.display = "none";
            document.getElementById("skill").style.display = "none";

        }
        if(courses == "subjects"){
            document.getElementById("subject").style.display = "block";
            document.getElementById("it").style.display = "none";
            document.getElementById("bussiness_management").style.display = "none";
            document.getElementById("skill-devlopment").style.display = "none";
            document.getElementById("skill").style.display = "none";

        }
        if(courses == "skill"){
            document.getElementById("skill").style.display = "block";
            document.getElementById("it").style.display = "none";
            document.getElementById("bussiness_management").style.display = "none";
            document.getElementById("skill-devlopment").style.display = "none";
            document.getElementById("subject").style.display = "none";
          

        }

    })
   })
   function it(){
    document.getElementById("it").style.display = "none";

   }
   function bussiness_management(){
    document.getElementById("bussiness_management").style.display = "none";
    
   }
   function skill_development(){
    document.getElementById("skill-devlopment").style.display = "none";
    
    
   }
   function subject(){
    document.getElementById("subject").style.display = "none";


   }
   function skill(){
    document.getElementById("skill").style.display = "none";

   }

   function course_modal(){
    document.getElementById("course-modal").style.display = "block";
    document.getElementById("explore-icon").className = ("fa fa-caret-up");
    

   }
   function course1(){
    document.getElementById("course-modal").style.display = "none";
    document.getElementById("explore-icon").className = ("fa fa-caret-down");
    

   }
   function left(){
    console.log("click")
    document.querySelector('.it-courses').scrollLeft -= 370;
    
   }
   let num = 10;
   function right(){
    console.log("click")
   document.querySelector('.it-courses').scrollLeft += 370;
       

   
  
   }
   let ad = document.querySelector('.ad-icon');
   let count = 1;
   ad.onclick =function(){
    count++;
    if(count % 2 == 0){
        console.log("clciked");
      
        document.querySelector(".data-icon").classList.add("adicon");
    }
    else{
        document.querySelector(".data-icon").classList.remove("adicon");

    }

   }
  </script>
 
    </body>
</html>
