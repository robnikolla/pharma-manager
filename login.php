<?php 
  session_start();
  if(isset($_SESSION["username"])) {
    if($_SESSION["type"] == "admin"){
       $output = $_SESSION['username'];
      header("Location:admin/home.php");
    }
    else if ($_SESSION["type"] == "user"){
      $output = $_SESSION['username'];
      header("Location:inside/mainframe.php");
    }
    
    
  } else {
    $loginnull = "You need to log in to access the database management";
  
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="utf-8">
    <style>
    	body {
 		 display: flex;
 		 min-height: 100vh;
 		 min-width:100vh;
 		 flex-direction: column;
		}
		main {
		  flex: 1 0 auto;
		}
    </style>
</head>
<body>
  <header><!-- Navbar Start -->
<nav>
    <div class="nav-wrapper green darken-1">
      <a href="index.html" class="brand-logo"><img src="img/spa.png" style="padding-top:8px;padding-left:10px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li class="active"><a href="login.php">Sign In</a></li>
        <li><a href="register.php">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="login.php">Sign In</a></li>
     <li><a href="register.php">Sign Up</a></li>
  </ul>

<!-- Navbar End --></header>

<main>
  <div class="row">
		<h3 class="col s6 offset-s3">Sign In</h3>
	<div class="row">
		<form class="col s12" action="loginLogic.php" method="POST">
			<div class="row">
				 <div class="input-field col offset-s3 s6">
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Username</label>
        </div>
			</div>
			<div class="row">
				 <div class="input-field col  offset-s3 s6">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
			</div>
       <button class="btn waves-effect waves-light col  offset-s6 s3 green darken-1" type="submit" name="submit">LOGIN </button>
		</form>
	</div>


	</form></main>


  <div class="row">
          <p class="text-red-darken-2 col  offset-s3 s12"> <?= "$loginnull" ?></p>
       </div>
<!-- Footer Start -->
 <footer class="page-footer green darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Pharmacy Manager Webapp</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at tristique felis. Duis eu nunc nec urna varius auctor. Suspendisse massa odio, faucibus in faucibus vel, malesuada id risus. Nam sed mattis sem, ut euismod elit. Donec tortor mi, eleifend nec ipsum nec, auctor malesuada mi. Donec molestie iaculis tincidunt. Donec in mauris eros. Curabitur ultrices imperdiet auctor. Nulla eget felis eu felis dignissim pulvinar. Pellentesque quis laoreet sem. Nam eleifend ultricies erat a laoreet.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Follow Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">LinkedIn</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sign In</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sign Up</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Robert Nikolla
            </div>
          </div>
        </footer>
<!-- Footer End -->



<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


      <script>
      	M.AutoInit();
      </script>
</body>
</html>