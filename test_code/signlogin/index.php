<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Socle PO Process Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<style>

/*Styles for the sign in button*/
.moveBtn{
  margin-left: -70px;
  color:#1c305c;
}

/* Sign in*/
.signinbtn {
  color: #ffffff;
  width: 100%;
  border-radius: 5px;
  border: none;
  outline: none;
  padding: 7px;
  background: #1c305c;
}

.form__button:hover {
  opacity:60%;
}

/*error message*/
.form__message--error, .form__input-error-message {
  color: #cc3333;
}
.form--hidden{
  display:none;
}
.form__text{
  margin-top: 7px;
}
.form__link{
  color: #1c305c;
}
/*input fields*/
.form__input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: white;
  border-radius: 5px;
  border: 1px solid #dddddd;
  outline: none;
  transition: background 0.2s, border-color 0.2s;
}
.form__input:focus{
  border-color: #1c305c;
}

/* Modal Content/Box */
.modal-content {
  opacity: 100%;
  z-index: 200; 
  background-color: #fefefe;
  margin: 5% auto;
  margin-bottom: 2%;
  border: 1px solid #888;
  width: 600px 
}

/* Spacing */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 10px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
body {
  background-image: url("circuitbg.jpg");
  background-attachment: fixed;
  background-size: cover;
}



</style>
    
    <!-- Custom styles for this template -->
    <link href="signlogin.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Socle PO Process Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<body>  
  

  <form class="modal-content" id="login">     
    <div class="container">
        <!--Sign in form-->        
          <h1 class="form__title">Sign in</h1>
          <div class="form__message form__message--error"></div>
          <div class="form__input-group">
            <input type="text" class="form__input" autofocus placeholder="Email">
            <div class="form__input-error-message"></div>
          </div>
          <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
          </div>
          <div class="clearfix">      
            <button type="submit" class="signinbtn form__button">Sign in</button>
          </div>
          <p class="form__text" id="linkCreateAccount">
            <a href="#" class="form__link">Sign up</a>
          </p>
          <hr>  
    </div>
  </form>
  <form class="modal-content form--hidden" id="createAccount">
    <div class="container">
       <!--Create an account form -->
          <h1 class="form__title">Create Account</h1>
          <div class="form__message form__message--error"></div>
          <div class="form__input-group">
            <input type="text" class="form__input" autofocus placeholder="Email">
            <div class="form__input-error-message"></div>
          </div>
          <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
          </div>
          <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Confirm password">
            <div class="form__input-error-message"></div>
          </div>
          <div class="clearfix">      
            <button type="submit" class="signinbtn form__button">Continue</button>
          </div>
          <p class="form__text">
            <a id="linkLogin" href="#" class="form__link">Already have an account? Sign in</a>
          </p>
          <hr>
      </div>
   </form>
   <!-- Button to return back to Dashboard page -->
  <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <a href="../dashboard.php" class="btn btn-back">Return</a>
    </div>
    <style>
      .btn-back {
        background-color: white;
        color: grey;
        border: 1px solid grey;
        border-radius: 5px;
        padding: 3px 7px;
        margin-left: 10%;
        margin-bottom: 10%
      }
    </style>
      </body>
    

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="signlogin.js"></script>
  </body>
</html>
