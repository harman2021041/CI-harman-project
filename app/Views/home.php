<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- STYLES -->

    <style {csp-style-nonce}>
        .bg{
background-image: url(https://cdn.pixabay.com/photo/2020/08/22/07/38/question-mark-5507756_960_720.jpg);
background-size: cover;
background-repeat: no-repeat;


}

.bgnav{
    background: rgb(196, 255, 206,0.5);
}
.lgname{
    font-size: xx-large;
    
}
.modalbg{
    background: linear-gradient(to left,rgb(243, 243, 159), rgb(141, 226, 117));
}
.ab{
   
    margin-top: 150px;
    font-size: 25px;
    font-weight: bold;
  
    text-shadow: 1px 2px 2px rgb(142, 140, 85);

}
.bg2
{
    background:linear-gradient(to top , rgba(63, 163, 165, 0.8),rgba(122, 194, 91, 0.8));
    
}
    </style>
</head>
<body class="bg">

<nav class="navbar navbar-expand-sm bgnav">
  <div class="container-fluid">
    <ul class="navbar-nav  me-auto">
      <li class="nav-item">
        <a class="navbar-brand "><img src ="/var/www/html/CI/app/Views/qm2-removebg-preview.png" height="50"></a>
      </li>
      <li class="nav-item">
       <a class="navbar-brand lgname"> <b>QUIZ-BUDD</b></a>
      </li>
    </ul>
      <ul class="navbar-nav ">
        <li class="nav-item me-4">
          <button type="button  "  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signin">sign in</button>
        </li>
        <li class="nav-item">
          <button type="button " class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signup">sign up</button>
        </li>
      </ul>
      
  </div>
</nav>
<div class=" modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  " >
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" >SIGN IN </h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">username</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">password</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer ">
        <button type="button " class="btn btn-success w-100" data-bs-dismiss="modal">sign in</button>
        
      </div>
    </div>
  </div>
</div>

<div class=" modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  " >
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" >SIGN UP </h5>
        
      </div>
      <div class="modal-body">
        <form action="/insert" >
          <div class="mb-3">
            <label for="username" class="col-form-label">username</label>
            <input type="text" class="form-control" required >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">confirm-password</label>
            <input type="password" class="form-control" required>
          </div>
        
      </div>
      <div class="modal-footer ">
        <button type="submit " class="btn btn-success w-100" >sign up</button>
        
      </div></form>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 offset-lg-6 ab">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae asperiores minus fuga in aliquid 
      at distinctio exercitationem, consequuntur obcaecati eligendi ipsum, modi fugit consectetur iure est alias
      , temporibus voluptate sunt.
    </div>
    <div class="container" >
      <a href="page2">
      <button class="container col-lg-3 offset-lg-7 ab btn btn-success mt-5">get started</button></a>
     </div>
  </div>
</div>

</body>
</html>
