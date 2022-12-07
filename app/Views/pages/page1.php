<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/css.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.bundle.min.js"></script>
  
</head>
<body class="bg">

<nav class="navbar navbar-expand-sm bgnav">
  <div class="container-fluid">
    <ul class="navbar-nav  me-auto">
      <li class="nav-item">
        <a class="navbar-brand "><img src ="C:\Users\anter\Downloads\qm2-removebg-preview.png" height="50"></a>
      </li>
      <li class="nav-item">
       <a class="navbar-brand lgname"> <b>QUIZ-BUDD</b></a>
      </li>
    </ul>
      <ul class="navbar-nav ">
       <a href="login">
        <li class="nav-item me-4">
       
          <button type="button  "  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signin">sign in</button>
        </li></a>
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
        <form>
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
<!-- Carousel -->
   
<br><br>
      <div class="row mt-5 ab">
        <div class="col-sm-5 ms-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. E
          xplicabo vero nostrum, nemo aliquid ipsum dolorum 
          doloribus cumque officia et aliquam tempore aperiam voluptates labore repudiandae nemo aliquid ipsum dolorum 
          doloribus cumque officia et aliquam tempore aperiam voluptates labore repudiandae fugiat molestiae quasi repellat nulla.<br><br>
         <a href="page2">
        <button class="btn btn-success btn-lg">GET STARTED</button>
      </a>
        </div>
        <div class="col-sm-5 offset-sm-1  ">
           <!-- Carousel -->
<div id="demo" class="carousel slide" data-interval="1000" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://thumbs.dreamstime.com/b/ready-quiz-ready-quiz-written-remember-note-pin-cork-board-142093374.jpg" height="500" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="https://lh3.googleusercontent.com/jIdGI_fk5z0-D0D-l0BdO131NsGEB3HErphyPzDo3p99Gf9V9vmSMvxvdw951iMK_Q" height="500" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2015/03/20/00/19/smiley-681575_960_720.jpg" height="500"   style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
          </div>
      </div>
</body>
</html>
