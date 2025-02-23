<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
   

    <title>Login #9</title>
  </head>
  <style>
    body {
      font-family: "Roboto", sans-serif;
      background-color: #f8fafb; }
    
    p {
      color: #b3b3b3;
      font-weight: 300; }
    
    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
      font-family: "Roboto", sans-serif; }
    
    a {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
      a:hover {
        text-decoration: none !important; }
    
    .content {
      
      padding: 7rem 0; }
    
    h2 {
      font-size: 20px; }
    
    .form-block {
      background: #fff;
      padding: 60px;
      -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.1);
      box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.1); }
      @media (max-width: 991.98px) {
        .form-block {
          padding: 30px; } }
    
    @media (max-width: 991.98px) {
      .content .bg {
        height: 500px; } }
    
    .content .contents, .content .bg {
      width: 50%; }
      @media (max-width: 1199.98px) {
        .content .contents, .content .bg {
          width: 100%; } }
      .content .contents .form-group, .content .bg .form-group {
        position: relative; }
        .content .contents .form-group label, .content .bg .form-group label {
          position: absolute;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          -webkit-transition: .3s all ease;
          -o-transition: .3s all ease;
          transition: .3s all ease; }
        .content .contents .form-group input, .content .bg .form-group input {
          background: transparent;
          border-bottom: 1px solid #ccc; }
        .content .contents .form-group.first, .content .bg .form-group.first {
          border-top-left-radius: 7px;
          border-top-right-radius: 7px; }
        .content .contents .form-group.last, .content .bg .form-group.last {
          border-bottom-left-radius: 7px;
          border-bottom-right-radius: 7px; }
        .content .contents .form-group label, .content .bg .form-group label {
          font-size: 12px;
          display: block;
          margin-bottom: 0;
          color: #b3b3b3; }
        .content .contents .form-group.focus, .content .bg .form-group.focus {
          background: #fff; }
        .content .contents .form-group.field--not-empty label, .content .bg .form-group.field--not-empty label {
          margin-top: -25px; }
      .content .contents .form-control, .content .bg .form-control {
        border: none;
        padding: 0;
        font-size: 20px;
        border-radius: 0; }
        .content .contents .form-control:active, .content .contents .form-control:focus, .content .bg .form-control:active, .content .bg .form-control:focus {
          outline: none;
          -webkit-box-shadow: none;
          box-shadow: none; }
    
    .content .bg {
      background-size: cover;
      background-position: center; }
    
    .content a {
      color: #888;
      text-decoration: underline; }
    
    .content .btn {
      height: 54px;
      padding-left: 30px;
      padding-right: 30px; }
    
    .content .forgot-pass {
      position: relative;
      top: 2px;
      font-size: 14px; }
    
    .content .btn-pill {
      border-radius: 30px; }
    
    .social-login a {
      text-decoration: none;
      position: relative;
      text-align: center;
      color: #fff;
      margin-bottom: 10px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: inline-block; }
      .social-login a span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
      .social-login a:hover {
        color: #fff; }
      .social-login a.facebook {
        background: #3b5998; }
        .social-login a.facebook:hover {
          background: #344e86; }
      .social-login a.twitter {
        background: #1da1f2; }
        .social-login a.twitter:hover {
          background: #0d95e8; }
      .social-login a.google {
        background: #ea4335; }
        .social-login a.google:hover {
          background: #e82e1e; }
    
    .control {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
      cursor: pointer;
      font-size: 14px; }
      .control .caption {
        position: relative;
        top: .2rem;
        color: #888; }
    
    .control input {
      position: absolute;
      z-index: -1;
      opacity: 0; }
    
    .control__indicator {
      position: absolute;
      top: 2px;
      left: 0;
      height: 20px;
      width: 20px;
      background: #e6e6e6;
      border-radius: 4px; }
    
    .control--radio .control__indicator {
      border-radius: 50%; }
    
    .control:hover input ~ .control__indicator,
    .control input:focus ~ .control__indicator {
      background: #ccc; }
    
    .control input:checked ~ .control__indicator {
      background: #38d39f; }
    
    .control:hover input:not([disabled]):checked ~ .control__indicator,
    .control input:checked:focus ~ .control__indicator {
      background: #4dd8a9; }
    
    .control input:disabled ~ .control__indicator {
      background: #e6e6e6;
      opacity: 0.9;
      pointer-events: none; }
    
    .control__indicator:after {
      font-family: 'icomoon';
      content: '\e5ca';
      position: absolute;
      display: none;
      font-size: 16px;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease; }
    
    .control input:checked ~ .control__indicator:after {
      display: block;
      color: #fff; }
    
    .control--checkbox .control__indicator:after {
      top: 50%;
      left: 50%;
      margin-top: -1px;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    
    .control--checkbox input:disabled ~ .control__indicator:after {
      border-color: #7b7b7b; }
    
    .control--checkbox input:disabled:checked ~ .control__indicator {
      background-color: #7e0cf5;
      opacity: .2; }
    
  </style>
  
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Sign In to <strong>Cocoons</strong></h3>
                  <p class="mb-4"></p>
                </div>
                <form action="#" method="post" id = "signin-modal">
                  <div class="form-group first">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" id="username" name = "email">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name = "password">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                  </div>

                  <input type="submit" value="Sing in " class="btn btn-pill text-white btn-block btn-primary">

                  <span class="d-block text-center my-4 text-muted"> or sign in with</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3" ></span> 
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
    <div><i class ="fa fa-user" id = "assistant"></i></div>
  </div>
  <script>
    let count = 0;
let assistant = document.getElementById("assistant");


assistant.onclick = function(){

    count++;
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
    if('speechSynthesis' in window && count == 1){
        let voices = getVoices();
        let rate = 0.8, pitch = 1, volume = 1;
        let text = "hello sir please tell your sign in code?";
        speak(text, voices[1],rate,pitch,volume);
    }
    else{
        console.log("error");
    
    }
    setTimeout(() =>{
        var recongnization = new webkitSpeechRecognition();
        recongnization.onstart =() =>{
         
    
           
        } 
        recongnization.onresult = (e) =>{
     
            var transcript = e.results[0][0].transcript;
           
    
          
         console.log(transcript);
         var XHR = new XMLHttpRequest();
              XHR.addEventListener("load", success);
              XHR.open("GET", "api/assistantsingin.php?name="+ transcript);
              XHR.send();
              event.preventDefault();

  
            var success = function(event){
              var response =JSON.parse(event.target.responseText);
              if(response.success){
                window.location.href = "index.php";
              }
              else if(!response.success && !response.code_match){
                if('speechSynthesis' in window ){
        let voices = getVoices();
        let rate = 0.8, pitch = 1, volume = 1;
        let text = "ohoh! this is wrong code ";
        speak(text, voices[1],rate,pitch,volume);
    }
    else{
        console.log("error");
    
    }
              }
            }
    

           
            
              

            
                
              
          }
          recongnization.start();
          
    },8000)
   
      
  }

    let signup_modal = document.getElementById("signin-modal");
window.addEventListener("load", function(){

    signup_modal.addEventListener("submit", function(event){
        var XHR = new XMLHttpRequest();
        var form_data = new FormData(signup_modal);
        XHR.addEventListener("load", signup_success);
      
        XHR.open("POST", "api/user_signin_submit.php");
        XHR.send(form_data);
        event.preventDefault();

    });
    
});

let signup_success = function(event){
    var response = JSON.parse(event.target.responseText);
    if(response.success){
        alert(response.message);
        window.location.href = "index.php";
    }
    else{
        alert(response.message);
    }

}

  </script>
    
  <script src="js/firebase.js" type = "module"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>