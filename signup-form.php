<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="img/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign up to <strong>Cocoons</strong></h3>
              <p class="mb-4"></p>
            </div>
            <div id = "message"></div>
            <form action="#" method="post" id = "signup-modal" name = "form">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name = "name" required>

              </div>
              <div class="form-group last mb-4">
                <label for="Email">Email</label>
                <input type="Email" class="form-control" id="password" name="email" required>
                
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name = "password" required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Sign up" class="btn text-white btn-block btn-primary">

             
            
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <script>
    let signup_modal = document.getElementById("signup-modal");
window.addEventListener("load", function(){

    signup_modal.addEventListener("submit", function(event){
      let form =document.forms['form'];
let name = form.name.value;
try{
  if(name.includes("@")){
  alert("only use letter in name")
  return;
}
}
catch(err){
  console.log(err.message)

}



  
        var XHR = new XMLHttpRequest();
        var form_data = new FormData(signup_modal);
        XHR.addEventListener("load", signup_success);
      
        XHR.open("POST", "api/user_signup_submit.php");
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
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>