<?php 
    session_start();

    if($_SESSION["type"] =="admin") {
        $message = "You are logged in as an admin";
	} else {
		header('Location:../inside/mainframe.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
		<title>Pharmacy Management</title>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"></head>
<body>
<!-- Navbar Start -->
<nav>
    <div class="nav-wrapper blue-grey darken-3">
      <a href="#" class="brand-logo"><img src="../img/spa.png" style="padding-top:8px;padding-left:10px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="../index.html">Home</a></li>
        <li><a href="../inside/mainframe.php">Dashboard</a></li>
        <li><a href="adminreg.php">Add Admin</a></li>
        <li><a href="../inside/logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a href="../index.html">Home</a></li>
        <li><a href="../inside/mainframe.php">Dashboard</a></li>
        <li><a href="adminreg.php">Add Admin</a></li>
        <li><a href="../inside/logout.php">Log Out</a></li>
  </ul>

<!-- Navbar End -->
<br>
	<div class="row">
		<h4 class="col s6 offset-s4">Sign Up</h4>
	</div>
<div class="row">
	<form class=" offset-s4 col s6" action="adminadd.php" method="POST">
		<div class="row">
			<input type="hidden" name="id">
			<div class="input-field col s4">
        	  <input id="fistname" type="text" class="validate" name="name">
        	  <label for="fistname">First name</label>
        	</div>
        	<div class="input-field col s4">
        	  <input id="lastname" type="text" class="validate" name="lastname">
        	  <label for="lastname">Last name</label>
        	</div>
		</div>
		<div class="row">
			<div class="input-field col s8">
        	  <input id="username" type="text" class="validate" name="username">
        	  <label for="username">Username</label>
            </div>
        </div>
		<div class="row">
			<div class="input-field col s8">
        	  <input id="email" type="text" class="validate" name="email">
        	  <label for="email">Email</label>
            </div>
		</div>
		<div class="row">
			<div class="input-field col s8">
        	  <input id="password" type="password" class="validate" name="password">
        	  <label for="password">Password</label>
            </div>
		</div>
		
		<button class="btn waves-effect waves-light col  offset-s6 s2 green darken-1" type="submit" name="submit">Sign Up </button>
	</form>		
</div>










<!-- Footer Start -->
 <footer class="page-footer blue-grey darken-3">
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