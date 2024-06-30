<!DOCTYPE html>
<html>
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
        .image{
            width: 100%;
          
         
            border: solid 2px;
            
            height: 500px;
            background-image: url("img/Internshala\ _\ About\ Us\ and\ 1\ more\ page\ -\ Personal\ -\ Microsoft​\ Edge\ 3_14_2024\ 11_34_48\ PM.png");
            background-position: center;
           
        }
        body{
            background-color: #e3fafa;
       

        }
        .main-container{
            display: grid;
            justify-content: center;
            max-width: 900px;
            margin: auto;
        }
        .headings{
            display: flex;
            justify-content: center;
            color: blue;
            font-size: 30px;
            
        }
        .sub_heading{
            display: flex;
            justify-content: center;
            color: black;
            font-size: 20px;
            font-weight: bold;
        }
        .main-container>p{
           
        }
       .milestone-container{
        max-width: 800px;
        margin: auto;

       }
       .milestone-container>h5{
        color: blue;
        display: flex;
        justify-content: center;
        font-size: 30px;
       }
       .milestone{
        display: flex;

       
       }
    
       .milestone>.icon{
        width: 250px;
        height: 250px;
        margin-left: 20px;

       }
       .milestone>.icon>img{
        height: 100%;
        width: 100%;

       }
       .timeline_img{
        margin-left: 30px;
       }
       .detail{
        padding-left: 30px;
       }
       .detail>.year{
        font-size: 30px;
        color: grey;
        
       }
       .detail>.subheading{
        font-size: 30px;
        font-weight: bold;
        color: black;
       }
       .detail>.context{
        color: grey;
       }
       .milestone-conatiner{
        background-color: white;
       }
        
    </style>
    <body>
    <?php
         include "includes/navbar.php";
        ?>

        <div class = "image">
        
        </div>
        <div class = "main-container">
        <p class="headings">Our vision</p>
        <p class="sub_heading">Internshala is a dot com business with the heart of dot org.</p>
        <p>We are a technology company on a mission to equip students with relevant skills &amp; practical exposure to help them get the best possible start to their careers. Imagine a world full of freedom and possibilities. A world where you can discover your passion and turn it into your career. A world where you graduate fully assured, confident, and prepared to stake a claim on your place in the world.</p>
        </div>
        <div class = "milestone-conatiner">
        <div class = "milestone-container">
            <h5>Our Milestones</h5>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_1-r575 (2).svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_2-r575.svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_3-r575.svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_4-r575.svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_5-r575.svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_5-r575.svg">

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>
            <div class = "milestone">
                <div class = "icon">
                    <img src = "img/milestone_6-r575.svg"/>

                </div>
                <div class = "timeline_img">
                    <img src = "img/timeline-r1920.svg"/>
                </div>
                <div class = "detail">
                    <p class = "year">2010</p>
                    <p class = "subheading">How it all started</p>
                    <p class = "context">Sarvesh, our founder &amp; CEO, started Internshala as a blog with a mission to bring a culture of meaningful internships in India. And for the first two years, he hired only virtual interns.</p>
                </div>
            </div>

        </div>
        </div>
    </body>
</html>