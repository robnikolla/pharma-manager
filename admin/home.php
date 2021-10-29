<?php 
    session_start();
    require '../config.php';
    if($_SESSION["type"] =="admin") {
        $message = "You are logged in as an admin";
	} else {
		header('Location:../inside/mainframe.php');
	}

?>

<html>
    <head>
        <title>Admin Page</title>
        	<!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
   <body> 
    <!-- inside Navbar start -->  
  <nav class="nav-extended">
    <div class="nav-wrapper blue-grey darken-3">
      <a href="../index.html" class="brand-logo"><img src="../img/spa.png" style="padding-top:8px;padding-left:10px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
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
        <li><a href="../inside/logout.php">Log Out</a></li>
  </ul>
<!-- inside navbar end -->
    <main style="padding:20px;">
    <h5 style="margin-left:20px;!important"> Welcome <?php echo $_SESSION["user"]["name"]; ?>!</h5>
    <?php 
      include_once('../config.php');
      $sql = "SELECT * FROM medicinedb";
      $getMedicine = $conn->prepare($sql);
      $getMedicine -> execute();
      $medicine = $getMedicine->fetchAll();
          $medicineLength = count($medicine);

      $sql = "SELECT * FROM workdb";
      $getWorkers = $conn->prepare($sql);
      $getWorkers -> execute();
      $workers = $getWorkers->fetchAll();
          $workLength = count($workers);
       
      $sql = "SELECT * FROM regdb";
      $getUsers = $conn->prepare($sql);
      $getUsers -> execute();
      $users = $getUsers->fetchAll();
          $userLength = count($users);

      $sql = "SELECT * FROM admindb";
      $getAdmin = $conn->prepare($sql);
      $getAdmin -> execute();
      $admins = $getAdmin->fetchAll();
          $adminLength = count($admins);
     
	?>
   


    <div class="row">
        <h4 style="margin-left:20px;">Database Statistics</h4>
    <div class="col  text-right">
      <div class="card-panel light-blue darken-4" style="border-radius:15px;">
        <h5 style="color:white;text-align:right;padding-top:60px;padding-left:40px;"><i class="material-icons" style="font-size:30px;padding-top:5px;">
engineering
</i>  Workers Registered: <?php echo $workLength ?></h5>
      </div>
    </div>
    
 
    <div class="col  text-right">
      <div class="card-panel green darken-2" style="border-radius:15px;">
        <h5 style="color:white;text-align:right;padding-top:60px;padding-left:40px;"><i class="material-icons" style="font-size:30px;">
        medication
</i>  Medicine Registered: <?php echo $medicineLength ?></h5>
      </div>
    </div>

    <div class="col  text-right">
      <div class="card-panel  teal darken-1" style="border-radius:15px;">
        <h5 style="color:white;text-align:right;padding-top:60px;padding-left:40px;"><i class="material-icons" style="font-size:30px;">
        person
</i>Accounts Registered: <?php echo $userLength ?></h5>
      </div>
    </div><div class="col  text-right">
      <div class="card-panel  grey darken-3" style="border-radius:15px;">
        <h5 style="color:white;text-align:right;padding-top:60px;padding-left:40px;"><i class="material-icons" style="font-size:30px;">
        admin_panel_settings
</i>Admins Registered: <?php echo $adminLength ?></h5>
      </div>
    </div>
  </div>
  
  </div>
    </main>

    
<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="../js/materialize.js"></script>
      <script>
        M.AutoInit();
      </script>
   </body>
    </html>