<!DOCTYPE html>
<html>
    <head>
        <link href = "css/commnn.css" rel = "stylesheet"/>
    
    <link href = "css/bootstrap.min.css" rel = "stylesheet"/>
    
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
   <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
   
  </head>
    <style>
      
        .form{
            margin: auto;
            max-width: 800px;
            padding: 10px;
            background-color: white;

            
           
            
            
        }
       
        
        #container{
  position: relative;
  margin: auto;
  max-width: 900px;
  width: 100%;
  border-radius: 6px;
  padding: 30px;
  
  background-color: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  margin-top:30px;

}
#container{
  position: relative;
  font-size: 20px;
  font-weight: 600;
  color: #333;
}
#container  header::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 3px;
  width: 27px;
  border-radius: 8px;
  background-color: #4070f4;
}
#container  form{
  position: relative;
  margin-top: 16px;
  min-height: 550px;
  background-color: #fff;

}
#container  form .form{
  position: absolute;
  background-color: #fff;
  transition: 0.3s ease;
}
#container  form .form.second{
  opacity: 0;
  pointer-events: none;
  transform: translateX(100%);
}
form.secActive .form.second{
  opacity: 1;
  pointer-events: auto;
  transform: translateX(0);
}
form.secActive .form.first{
  opacity: 0;
  pointer-events: none;
  transform: translateX(-100%);
}
#container form .title{
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
  font-weight: 500;
  margin: 6px 0;
  color: #333;
}
#container form .fields{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}
form .fields .input-field{
  display: flex;
  width: calc(100% / 3 - 15px);
  flex-direction: column;
  margin: 4px 0;
}
.input-field label{
  font-size: 12px;
  font-weight: 500;
  color: #2e2e2e;
}
.input-field input, select{
  outline: none;
  font-size: 14px;
  font-weight: 400;
  color: #333;
  border-radius: 5px;
  border: 1px solid #aaa;
  padding: 0 15px;
  height: 42px;
  margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
  box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
  color: #707070;
}
.input-field input[type="date"]:valid{
  color: #333;
}
#container form button, .backBtn{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 35px;
  max-width: 200px;
  width: 100%;
  border: none;
  outline: none;
  color: #fff;
  border-radius: 5px;
  margin: 25px 0;
  background-color: #4070f4;
  transition: all 0.3s linear;
  cursor: pointer;
}
#container form .btnText{
  font-size: 14px;
  font-weight: 400;
}
form button:hover{
  background-color: #265df2;
}
form button i,
form .backBtn i{
  margin: 0 6px;
}
form .backBtn i{
  transform: rotate(180deg);
}
form .buttons{
  display: flex;
  align-items: center;
}
form .buttons button , .backBtn{
  margin-right: 14px;
}

@media (max-width: 750px) {
  #container form{
      overflow-y: scroll;
  }
  #container  form::-webkit-scrollbar{
     display: none;
  }
  form .fields .input-field{
      width: calc(100% / 2 - 15px);
  }
}

@media (max-width: 550px) {
  form .fields .input-field{
      width: 100%;
  }
}
#form{
  background-color: #265df2;
 
}

.modal{
  background-color: rgb(242, 233, 233);
}
#heading{
  display: flex;
  justify-content: center;
  font-size: 40px;
  font-weight: bold;
  color: yellow;
}

#heading2{
  margin-top: 50px;
  font-size: 40px;
  color: yellow;
  font-weight: bold;
  
}
#comment{
 
  font-size: 50px;
}
#carouselExample{
 
  margin: auto;
  max-width: 100%;
  height: 600px;
 
  
}
 
.carousel-item{
  padding: 10px;
  height: 700px;
 
  
}
.carousel-item>img{
  height: 100%;
 

  
 

}
#heading3{
  height: 100px;
  width: 100px;
  color: green;
  background-color: aliceblue;
  
}
#right-swipe{
  background-color: transparent;
}
#right-swipe{
  margin-top: 20%;
  margin-left: 75%;
  background-color: transparent;
  font-size: 50px;
  animation: move 2s infinite ;

}
@keyframes move{
  0%{
   transform: translateX(-100px);
  }
  100%{
    transform: translateX(100px);
  }
}

#left{
  margin-top: 20%;
  margin-left: 20%;
  background-color: transparent;
  font-size: 50px;
  animation: left_swipe 2s infinite ;

}
@keyframes left_swipe {
  0%{
    transform: translateX(100px);
  }
  100%{
    transform: translateX(-100px);
  }
}
.navbar>a{
  color: blue;
  margin-left: 10%;
  font-size: 50px;
  font-weight: bold;

  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  text-decoration: none;
}

.coursel-images{
    display: flex;
}
.coursel-images>.col-md{
    margin-left: 20px;
   
   
}
.coursel-images>div>img{
    width: 100%;
    height: 550px;
    
    filter: brightness(1) contrast(1.2) saturate(1.2);
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
   

}


.img2>img{
    filter: brightness(1) contrast(1.2) saturate(1.2);
    box-shadow: 0px  4px 10px 0px rgba(0, 0, 0, 0.2);
}
.coursel-images>.col-md>img:hover{
    box-shadow:  0px 0px 10px rgba(0, 0, 0, 0.2);
    height: 560px;
    width: 500px;
    
}
body{
        overflow-x: hidden;
        background-color: #e3fafa;
       
      
      
     }
     .carousel-control-prev>span{
        color: blue;
        font-size: 80px;

     }
     .carousel-control-next>span{
        color: blue;
        font-size: 80px;

     }
 
 
 #resume3{
  background-color: white;
  
 }
 .container {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
  }
  .leftPanel {
    width: 27%;
    background-color: #484444;
    padding: 0.7cm;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .rightPanel {
    width: 73%;
    padding: 0.7cm;
  }
  item {
  padding-bottom: 0.7cm;
  padding-top: 0.7cm;
}
.item h2{
  margin-top: 0;
}
.bottomLineSeparator {
  border-bottom: 0.05cm solid white;
}
h2 {
  font-family: 'Archivo Narrow', sans-serif;
}
.leftPanel h2 {
  color: white;
}
#img {
  width: 4cm;
  height: 4cm;
  margin-bottom: 0.7cm;
  border-radius: 50%;
  border: 0.15cm solid white;
  object-fit: cover;
  object-position: 50% 50%;
}
.details {
  width: 100%;
  display: flex;
  flex-direction: column;
}
.leftPanel .smallText, 
.leftPanel .smallText, 
.leftPanel .smallText span, 
.leftPanel .smallText p, 
.smallText a {
  font-size: 0.45cm;
}
.smallText, 
.smallText span, 
.smallText p, 
.smallText a {
  font-family: 'Source Sans Pro', sans-serif;
  text-align: justify;
}
.contactIcon {
  width: 0.5cm;
  text-align: center;
}
.leftPanel, 
.leftPanel a {
  color: #bebebe;
  text-decoration: none;
}
.skill {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.yearsOfExperience {
  width: 1.6cm;
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.alignleft {
  text-align: left !important;
  width: 1cm;
}
.alignright {
  text-align: right !important;
  width: 0.6cm;
  margin-right: 0.1cm
}
.bolded {
  font-weight: bold;
}
.white {
  color: white;
}
h1 { 
  font-weight: 300; 
  font-size: 1.2cm;
  transform:scale(1,1.15); 
  margin-bottom: 0.2cm;
  margin-top: 0.2cm;
  text-transform: uppercase; 
}
h3 {
  font-family: 'Open Sans', sans-serif;
}
.workExperience>ul>li ul {
  padding-left: 0.5cm;
  list-style-type: disc;
}
.workExperience>ul {
  list-style-type: none;
  padding-left: 0;
}
.workExperience>ul>li {
  position: relative;
  margin: 0;
  padding-bottom: 0.5cm;
  padding-left: 0.5cm;
}
.workExperience>ul>li:before {
  background-color: #b8abab;
  width: 0.05cm;
  content: '';
  position: absolute;
  top: 0.1cm;
  bottom: -0.2cm; /* change this after border removal */
  left: 0.05cm;
}
.workExperience>ul>li::after {
  content: '';
  position: absolute;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' viewBox='0 0 32 32' focusable='false'%3E%3Ccircle stroke='none' fill='%23484444' cx='16' cy='16' r='10'%3E%3C/circle%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-size: contain;
  left: -0.09cm;
  top: 0;
  width: 0.35cm;
  height: 0.35cm;
}
.jobPosition {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.jobPosition span, 
.projectName span {
  font-family: 'Source Sans Pro', sans-serif;
}
.resume2 {
          background: rgb(204,204,204); 
          width: 21cm;
          height: 29.7cm;
          margin:  auto;
        
        }

        page {
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          position: relative;
        }

        page[size="A4"] {  
          width: 21cm;
          height: 29cm; 
        }
        @page {
          size: 21cm 29.7cm;
          margin: 0mm;
        }
 

#resume2{
  background-color: green;
}
#main {
    width: 400px;
    height: 482px;
    display: flex;
    background-color: blue;
    justify-content: center;
    align-items: centre;
    margin-left: 40%;
    margin-top: 10%;
  }
  #box1 {
    background-color: #323b4c;
    width: 132px;
    height: 482px;
  }
  #box2 {
    background-color: #d3d3d3;
    width: 268px;
    height: 482px;
    padding-left: 3%;
    padding-right: 3%;
  }
  #div-img {
    background-color: #323b4c;
    width: 100%;
    height: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .img1 {
    width: 70%;
    height: 70%;
    margin-left: 15%;
    margin-right: 15%;
    margin-top: 15%;
    margin-bottom: 5%;
  }
  .l2-5 {
    padding-top: 3%;
    border-top: solid 1px white;
    width: 80%;
    height: 15%;
    margin: 0px;
    margin-left: 15%;
    margin-bottom: 10%;
    font-size: 10px;
  }
  .font {
    color: white;
  }
  .section {
    font-size: 12px;
    font-weight: bold;
    margin: 0px;
    margin-left: 15%;
    margin-top: 20px;
  }
  .subheading {
    font-size: 10px;
    font-weight: bold;
    margin: 0;
  }
  .highlights {
    font-size: 8px;
    /* font-weight: bold; */
    margin: 0;
  }
  .details {
    font-size: 6px;
    margin: 0;
  }
  .R1 {
    width: 100%;
    height: 20%;
    padding-top: 8%;
    margin-bottom: 8.5%;
  }
  .Name-R2 {
    margin: 0;
  }
  .subheading-R2 {
    margin: 0;
    font-size: 9px;
    padding-bottom: 2px;
  }
  .section-R2 {
    font-size: 12px;
    font-weight: bold;
    margin: 0px;
  }
  .R2 {
    border-top: solid grey 1px;
    width: 100%;
    height: 18%;
    padding-top: 10px;
    padding-left: 10px;
  }
  .R3 {
    border-top: solid grey 1px;
    width: 100%;
    height: 13%;
    padding-top: 10px;
    font-size: 10px;
  }
  .a{
    background-color: rgb(206, 242, 242);
}
  
  .underline{
    border: 5px solid;
  }
   .resume_1{
    background-color:rgb(206, 242, 242);
   }
  .resume1 {
    width: 21cm; /* A4 width */
    height: 29.7cm; /* A4 height */
    margin: 0 auto; /* Center the div */
    border: 1px solid #000; /* Border for visualization */

  }
  .container1 {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 20px;
  }
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  .header h1 {
    margin: 0;
  }
  .experience, .education {
    margin-bottom: 20px;
  }
  .job-title {
    font-weight: bold;
  }
  .job-company {
    font-style: italic;
  }
  nav{
    background-color: chartreuse;
  }

    </style>
  
    <body>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cocoons</li>
  </ol>
</nav>
    <div id = "heading">
      <i class = "fa fa-arrow-down"></i>
    </div>
    <i class = "fa fa-hand-o-right modal" id = "right-swipe"></i>
<i class = "fa fa-hand-o-left modal" id = "left" ></i>
  
    <div id="carouselExample" class="carousel slide img-container">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class = "coursel-images row">
                <div class = "col-md">
                <img src= "img/cv1.png"  alt="..." id = "a">

                </div>
                <div class = "col-md img2">
                <img src= "img/cv2.jpeg"  alt="..." id  = "b">

                </div>
                <div class = "col-md">
                <img src= "img/cv3.jpg"  alt="..." id = "c">

                </div>
       
         
        

            </div>
          
        </div>
        <div class="carousel-item">
        <div class = "coursel-images row">
                <div class = "col-md">
                <img src= "img/cv5.jpg"  alt="..." >

                </div>
                <div class = "col-md img2">
                <img src= "img/Untitled design (3).jpg"  alt="..." >

                </div>
                <div class = "col-md">
                <img src= "img/Untitled design (4).jpg"  alt="..." >

                </div>
       
         
        

            </div>
            
        </div>
            
        </div>
          
   
        <div class="carousel-item">
        <div class = "coursel-images row">
                <div class = "col-md">
                <img src= "img/Untitled design (5).jpg"  alt="..." >

                </div>
                <div class = "col-md img2">
                <img src= "img/Untitled design (6).jpg"  alt="..." >

                </div>
                <div class = "col-md">
                <img src= "img/cv3.jpg"  alt="..." >

                </div>
       
         
        

            </div>
       
        </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span ><i class = "fa fa-angle-left"></i></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span  ><i class = "fa fa-angle-right"></i></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class = "resume_1 modal" id = "resume1">
    <div class=" resume1 " id = "resume_1">
        <!-- Content goes here -->
<div class="container1">
    <div class="header">
    <h1 id = "name1"></h1>
    <p><span id = "title1"></spanid> |<p id = "email1"></p> | <p id = "phone1"></p></p>
  </div><div class="underline"></div>
  
  <div class="education">
    <h2 class="a">Carrier-Objective</h2>
    <p id = "summary1"></p>
  </div>
  <div class="experience">
   <h2 class = "a">Projects</h2>
   <p id = "projects1"></p>
  </div><br>
  <div class="education">
    <h2 class="a">Education</h2>
   <div id = "education1"></div>
  </div><br>

  <div class="education">
    <h2 class="a">Skills</h2>
   <ul id = "techinicalskills1">

   </ul>
  </div><br>

  

  <div class="education">
    <h2 class="a">Hobbies</h2>
    <ul id = "activites1">

    </ul>
  </div>
  <div class="education">
    <h2 class="a">Declaration</h2>
     <p id = "conclusion1"></p>
     <p class="Name" ></p><br>
  </div>
</div>
</div>
    </div>
    <div class = "modal" id = "resume2">
      <div class = "resume2" >
    <page size="A4">
        <div class="container">
            <div class="leftPanel">
                <img src="avatar.png" id = "img"/>
                <div class="details">
                    <div class="item bottomLineSeparator">
                        <h2>
                          CONTACT
                        </h2>
                        <div class="smallText">
                          <p>
                            <i class="fa fa-phone contactIcon" aria-hidden="true"></i>
                           <span id = "phone2"></span>
                          </p>
                          <p>
                            <i class="fa fa-envelope contactIcon" aria-hidden="true"></i>
                            <a href="lorem@ipsum.com@gmail.com">
                             <span id = "email2"></span>
                            </a>
                          </p>
                          <p>
                            <i class="fa fa-map-marker contactIcon" aria-hidden="true"></i>
                            <span id = "address2"></span>
                          </p>
                         
                        </div>
                      </div>
                      <div class="item bottomLineSeparator">
                        <h2>
                          SKILLS
                        </h2>
                        <ul  id = "techinicalskills2">
             
                        </ul>
                      </div>
                  <div class="item">
                    <h5>
                      EDUCATION
                    </h5>
                    <div class="details" id = "education2">
         
                    </div>
                   
                  </div>
                  <div class = "item">
                    <h5>Skills</h5>
                    <ul id = "skills2">

                    </ul>
                  </div>
                </div>
              </div>
          <div class="rightPanel">
            <div>
                <h1 id = "name2">

                  
                </h1>
                <div class="smallText">
                  <h3 id = "title2">
                    Accountant
                  </h3>
                </div>
              </div>
              <div>
                <h2>
                  About me
                </h2>
                <div class="smallText">
                  <p id = "objective2">
                  
                  </p>
                  
                </div>
              </div>
              <div class="workExperience">
                <h2>
                 Projects
                </h2>
                <ul>
                  <li id = "projects2">
                    
                  </li>
                 
                  
                </ul>
              </div>
              <div class = "activites">
                <h2>Activities</h2>
                <ul id = "activities2">

                </ul>
              </div>
              <h2>Conclusion</h2>
              <div id = "conclusion2">

              </div>
          </div>
        </div>
      </page>
      </div>
    </div>

      
    <div class = "resume3 modal" id = "resume3">
        <div id="main">
            <div id="box1">
                <div class="div-img">
                    <img class="img1 rounded-circle" src="pofile_img.png" />
                </div>
                <p class="section font" >Contact</p>
                <div class="l2-5">
                    <p class="subheading font" >Phone</p>
                    <p class="details font" id="phone3">123-456-7890</p>

                    <p class="subheading font" >Email</p>
                    <p class="details font" id ="email3" >hello@reallygreatsite.com</p>

                    <p class="subheading font" >Address</p>
                    <p class="details font" id = "adresss3" >123 Anywhere St., Any City</p>
                </div>

                <p class="section" >Education</p>
                <div class="l2-5 font" id = "education3">
                    
                </div>

                <p class="section" >Expertise</p>
                <div class="l2-5 font">
                    <ul id = "techinicalskills3">

                    </ul>
                </div>

                <p class="section" >Activities</p>
                <div class="l2-5 font">
                   <ul id = "activities3">

                   </ul>
                </div>
            </div>

            <div id="box2">
            <div class="R1">
                    <h6 class="Name-R2"><b id = "name3"></b></h6>
                    <p class="subheading-R2" id = "title3">Marketing Manager</p>
                    <p class="details" id = "objective3">
                       
                    </p>
                </div>
           
                
                <p class="section-R2">Projects</p>
                <div class="R2">
                    
                    <p class="details" id = "projects3">
                       
                    </p>
                </div>
               
                
                <p class="section-R2">Declaration</p>
                <div class="R3" id = "conclusion3"></div>
            </div>
        </div>
        </div>
    </div>
    <div id = "container">
   
  <header>Fill Up your details here</header>
  <form name="resume" class="resume">
      <div class="form first">
          <div class="details personal">
              <span class="title">Personal Details</span>
              <div class="fields">
                  <div class="input-field" id="form-input">
                      <label>Title</label>
                      <input type="text" name="title" placeholder="Title" required>
                  </div>
                  <div class="input-field" id="form-input">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="name" required>
                </div>

                  <div class="input-field" id="form-input">
                      <label>Address</label>
                      <input type="adress" name="adress" placeholder="Enter Address" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Email</label>
                      <input type="email" name="email" placeholder="Enter your email" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Mobile Number</label>
                      <input type="number" name="phone" placeholder="Enter mobile number" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Projects</label>
                      <input type="text" name="projects" placeholder="Projects" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Skills</label>
                      <input type="text" name="skill" placeholder="Your Skills" required>
                  </div>
              </div>
          </div>
          <div class="details ID">
              <span class="title">Identity Details</span>
              <div class="fields">
                  <div class="input-field" id="form-input">
                      <label>Techinicalskills</label>
                      <input type="text" name="techinicalskills" placeholder="Techinicalskills" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Activities</label>
                      <input type="text" name="activities" placeholder="Activities" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Summary</label>
                      <input type="text" name="summary" placeholder="Summary" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Education</label>
                      <input type="text" name="education" placeholder="Education" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Expertise</label>
                      <input type="text" name="expertise" placeholder="Enter your Expertise" required>
                  </div>
                  <div class="input-field" id="form-input">
                      <label>Conclusion</label>
                      <input type="text" name="conclusion" placeholder="Conclusion" required>
                  </div>
              </div>
              <button class="nextBtn" type="button" id="export">
                  <span class="btnText">Export</span>
                  <i class="uil uil-navigator"></i>
              </button>
          </div> 
      </div>
   </form>

</div>
<script>
        
        let img1 = document.getElementById("a");
        let img2 = document.getElementById("b");
        let img3 = document.getElementById("c");
        let exports = document.getElementById("export");
        setTimeout(()=>{
          let right = document.getElementById("right-swipe");
          right.style.display = "block";
          let left = document.getElementById("left");
          left.style.display = "block";
         

        },4000)
      
        setTimeout(()=>{
          let right = document.getElementById("right-swipe");
          right.style.display = "none";
          let left = document.getElementById("left");
          left.style.display = "none";
        

        },8000)
        setTimeout(()=>{
          let heading = document.getElementById("heading");
          heading.innerHTML  = "choose one template";
        },2000)
        setTimeout(() =>{
         let heading1 = document.getElementById("heading");
         heading1.innerHTML = " "; 
        },4000);
     

        img1.onclick = function(){
       
          img1.style.boxShadow = "10px 10px 10px green";
        
            
        
      
          setTimeout(()=>{
            let heading2 = document.getElementById("heading2");
            heading2.innerHTML = "fill your details ->";
          },2000);
          setTimeout(()=>{
            let heading = document.getElementById("heading2");
            heading.innerHTML = "";
          },4000);
          let exports = document.getElementById("export");
          exports.onclick = function(){

            let phone = document.getElementById("phone1");
           
            let form = document.forms["resume"];
            phone.innerHTML = form.phone.value;
            let conclusion = document.getElementById("conclusion1");
            let email = document.getElementById("email1");
           
            let title1 = document.getElementById("title1");
        
            let education = document.getElementById("education1");
            let summary = document.getElementById("summary1");
            let projects = document.getElementById("projects1");
            
         

         
            let techinicalskills = document.getElementById("techinicalskills1");
          
            let activities = document.getElementById("activites1");
           
            title1.innerHTML = form.title.value;
            email.innerHTML = form.email.value;
     
            projects.innerHTML = form.projects.value;
            education.innerHTML = form.education.value;
            summary.innerHTML = form.summary.value;
            conclusion.innerHTML = form.conclusion.value;
           
            let techinicalskills1 = form.techinicalskills.value;
            let techinicalskill = techinicalskills1.split(' ');
            for(let i = 0; i<techinicalskill.length; i++){
              techinicalskills.innerHTML +=  "<li>" + techinicalskill[i] + "</li>";
            }
            let activitieses = form.activities.value;
            let array = activitieses.split(' ');
            for(let i = 0; i<array.length; i++){
              activities.innerHTML +=  "<li>" + array[i] + "</li>";
            }

          
            
            

            let resume1 = document.getElementById("resume1");
            resume1.style.display = "block";
            let resume_1 = document.getElementById("resume_1");
            function downloadDivAsPDF() {
               html2canvas(resume_1).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF({
                  orientation: 'p',
                  unit: 'px',
                  format: 'a4'
                });
                const imgProps= pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('download.pdf');
              });
            }
            downloadDivAsPDF();

            
          }
        }
          

        
        img2.onclick = function(){
          img2.style.boxShadow = "10px 10px 10px green";
          setTimeout(()=>{
            let heading2 = document.getElementById("heading2");
            heading2.innerHTML = "fill your details ->";
          },2000);
          setTimeout(()=>{
            let heading = document.getElementById("heading2");
            heading.innerHTML = "";
          },4000);
      
          exports.onclick = function(){
            let phone = document.getElementById("phone2");
           
            let form = document.forms["resume"];
            phone.innerHTML = form.phone.value;
            let conclusion = document.getElementById("conclusion2");
            let email = document.getElementById("email2");
            let adress = document.getElementById("address2");
            let title1 = document.getElementById("title2");
            let projects = document.getElementById("projects2");
            let education = document.getElementById("education2");
            let summary = document.getElementById("objective2");
         
    
            let skill = document.getElementById("skills2");
            let expertise = document.getElementById("expertise2");
            let techinicalskills = document.getElementById("techinicalskills2");
          
            let activities = document.getElementById("activities2");
            title1.innerHTML = form.title.value;
            email.innerHTML = form.email.value;
            adress.innerHTML = form.adress.value;
            projects.innerHTML = form.projects.value;
            education.innerHTML = form.education.value;
            summary.innerHTML = form.summary.value;
            let skills = form.expertise.value;
            let skills1 = skills.split(' ');
            for(let i = 0; i<skills1.length; i++){
              skill.innerHTML += "<li>"+skills1[1] + "</li>";
            }
            let techinicalskills1 = form.techinicalskills.value;
            let techinicalskill = techinicalskills1.split(' ');
            for(let i = 0; i<techinicalskill.length; i++){
              techinicalskills.innerHTML +=  "<li>" + techinicalskill[i] + "</li>";
            }
            let activitieses = form.activities.value;
            let array = activitieses.split(' ');
            for(let i = 0; i<array.length; i++){
              activities.innerHTML +=  "<li>" + array[i] + "</li>";
            }
           conclusion.innerHTML = form.conclusion.value;
          
         
            let resume1 = document.getElementById("resume2");
            resume1.style.display = "block";
          
             
            function downloadDivAsPDF() {
               html2canvas(resume1).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF({
                  orientation: 'p',
                  unit: 'px',
                  format: 'a4'
                });
                const imgProps= pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('download.pdf');
              });
            }
            downloadDivAsPDF();

            
           
        
          }
       
          
              

            }
          
       
        
        img3.onclick = function(){
          function getVoices(){
            let voices = speechSynthesis.getVoices();
            if(!voices.length){
                let utterance = new SpeechSynthesisUtterance(" ");
                speechSynthesis.speak(utterance);
                voices = speechSynthesis.getVoices();
            }
            return voices;
        }
       
          img3.style.boxShadow = "10px 10px 10px green";
          exports.onclick = function(){
            let phone = document.getElementById("phone3");
           
            let form = document.forms["resume"];
            phone.innerHTML = form.phone.value;
            let conclusion = document.getElementById("conclusion3");
            let email = document.getElementById("email3");
            let adress = document.getElementById("adress3");
            let title1 = document.getElementById("title3");
            let projects = document.getElementById("projects3");
            let education = document.getElementById("education3");
            let summary = document.getElementById("objective3");
         
    
            let skill = document.getElementById("skills3");
            let expertise = document.getElementById("expertise3");
            let techinicalskills = document.getElementById("techinicalskills3");
            let name = document.getElementById("name3");
            let activities = document.getElementById("activities3");
             
           
            email.innerHTML = form.email.value;
          
           
            education.innerHTML = form.education.value;
            summary.innerHTML = form.summary.value;
            conclusion.innerHTML =form.conclusion.value;
            projects.innerHTML = form.projects.value;
            title1.innerHTML =form.title.value;
            
        
             name.innerHTML = form.name.value;
             let skills = form.expertise.value;
             let skills1 = skills.split(' ');
             for(let i = 0; i<skills1; i++){
               skill.innerHTML += "<li>"+skills1[1] + "</li>";
             }
             let techinicalskills1= form.techinicalskills.value;
             let techinicalskill = techinicalskills1.split(' ');
             for(let i = 0; i<techinicalskill.length; i++){
               techinicalskills.innerHTML +=  "<li>" + techinicalskill[i] + "</li>";
             }
             let activitieses = form.activities.value;
            let array = activitieses.split(' ');
            for(let i = 0; i<array.length; i++){
              activities.innerHTML +=  "<li>" + array[i] + "</li>";
            }
          
          
            let resume1 = document.getElementById("resume3");
            resume1.style.display = "block";
          
            function downloadDivAsPDF() {
               html2canvas(resume1).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF({
                  orientation: 'p',
                  unit: 'px',
                  format: 'a4'
                });
                const imgProps= pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('download.pdf');
              });
            }
            downloadDivAsPDF();

            
           
          
            }
        }
     
         
       
  

        

        
      
      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
  
   
      </body>
</html>