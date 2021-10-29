<?php 
	session_start();
	if(isset($_SESSION["username"])) {
		$output = $_SESSION['username'];
	} else {
		header('Location:../login.php');
	}
	if($_SESSION["type"] == "admin"){
		$AdminPanel = '<li><a href="../admin/home.php">Admin Panel</a></li>';
	}else {
		$AdminPanel = null;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PharmaManager</title>
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
	<header><!-- inside Navbar start -->
	<ul id="accinfo" class="dropdown-content">
  		<li><a href="logout.php">Log Out</a></li>
	</ul>
	<nav class="nav-extended">
    <div class="nav-wrapper light-blue darken-3">
      <a href="../index.html" class="brand-logo"><img src="../img/spa.png" style="padding-top:8px;padding-left:10px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../index.html">Home</a></li>
		<?php echo $AdminPanel; ?>
        <li><a class="dropdown-trigger" href="#!" data-target="accinfo"><?="$output"?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
    <div class="nav-content  light-blue darken-4">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#medicinedb">Medicine Database</a></li>
        <li class="tab"><a href="#accountdb">Account Database</a></li>
        <li class="tab"><a href="#workersdb">Workers Database</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.html">Home</a></li>
    <li><a href="mainframe.php">Dashboard</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
<!-- inside navbar end -->	</header>
	
		<main>	<!-- Medicine Database TAB 1 -->
  <div id="medicinedb" class="col s12">
  	<?php 
 		include_once('../config.php');
		$sql = "SELECT * FROM medicinedb";
		$getUsers = $conn->prepare($sql);
		$getUsers -> execute();
		$users = $getUsers->fetchAll();
	?>
<table class="centered responsive-table">
	<thead>
		<th>ID</th>
		<th>Medicine Name</th>
		<th>Medicine Type</th>
		<th>Generic Name</th>
		<th>Country of Origin</th>
		<th>Producer</th>
		<th>Price</th>
		<th>Quantity</th>
		<th> Edit </th>
	</thead>

	<tbody>
		<?php
			foreach($users as $user){						
		?>
		<tr>
			<td><?= $user['ID']?></td>
			<td><?= $user['medname']?></td>
			<td><?= $user['type']?></td>
			<td><?= $user['drug']?></td>
			<td><?= $user['origincountry']?></td>
			<td><?= $user['producer']?></td>			
			<td><?= $user['price']?>&euro;</td>
			<td><?= $user['quantity']?></td>
			<td>
				<a class="btn waves-effect waves-light col  offset-s6 s3  light-blue darken-3" name="update" href="<?= "medupdate.php?ID=$user[ID] "?>">Update</a>
				<a class="btn waves-effect waves-light col  offset-s6 s3  red darken-4" name="update" href="<?= "meddelete.php?ID=$user[ID]"?>">Delete</a>
			</td>
		</tr>

		<?php
			}			
		?>
	</tbody>
</table>
<div class="row" style="margin-right:0px"> <br>
<a class="btn waves-effect waves-light col  offset-s10 s1  light-blue darken-4" href="addmed.php">Add Medicine</a>
</div>
  </div>
<!-- Medicine DB END -->
<!-- Account DB START -->
 <div id="accountdb" class="col s12">
  	<?php 
 		include_once('../config.php');
		$sql = "SELECT * FROM regdb";
		$getUsers = $conn->prepare($sql);
		$getUsers -> execute();
		$users = $getUsers->fetchAll();
	?>
<table class="centered responsive-table">
	<thead>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
		<th> Edit </th>
	</thead>

	<tbody>
		<?php
			foreach($users as $user){						
		?>
		<tr>
			<td><?= $user['id']?></td>
			<td><?= $user['name']?></td>
			<td><?= $user['lastname']?></td>
			<td><?= $user['username']?></td>
			<td><?= $user['email']?></td>			
			<td>----</td>
			<td> 
				<a class="btn waves-effect waves-light col  offset-s6 s3  light-blue darken-3" name="update" href="<?= "accupdate.php?id=$user[id] "?>">Update</a>
				<a class="btn waves-effect waves-light col  offset-s6 s3  red darken-4" name="delete" href="<?= "accdelete.php?id=$user[id]"?>">Delete</a>
			</td>
		</tr>
		<?php
			}			
		?>
	</tbody>
</table>
<div class="row" style="margin-right:0px"> <br>
<a class="btn waves-effect waves-light col  offset-s10 s1  light-blue darken-4" href="../register.php">Add Account</a>
</div>
  </div>
<!-- Account DB END -->
<!-- Workers DB START -->
 <div id="workersdb" class="col s12">
  	<?php 
 		include_once('../config.php');
		$sql = "SELECT * FROM workdb";
		$getUsers = $conn->prepare($sql);
		$getUsers -> execute();
		$users = $getUsers->fetchAll();
	?>
<table class="centered responsive-table">
	<thead>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of Birth</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Employ Date</th>
		<th>Edit</th>
	</thead>

	<tbody>
		<?php
			foreach($users as $user){						
		?>
		<tr>
			<td><?= $user['id']?></td>
			<td><?= $user['name']?></td>
			<td><?= $user['last']?></td>
			<td><?= $user['age']?></td>
			<td><?= $user['address']?></td>			
			<td><?= $user['phone']?></td>
			<td><?= $user['email']?></td>
			<td><?= $user['employdate']?></td>
			<td> 
				<a class="btn waves-effect waves-light col  offset-s6 s3  light-blue darken-3" name="update" href="<?= "workupdate.php?ID=$user[id]"?>">Update</a>
				<a class="btn waves-effect waves-light col  offset-s6 s3  red darken-4" name="delete" href="<?= "workdelete.php?ID=$user[id]"?>">Delete</a>
			</td>
		</tr>
		<?php
			}			
		?>
	</tbody>
</table>
<div class="row" style="margin-right:0px;">
<br>
<a class="btn waves-effect waves-light col offset-s10 s1  light-blue darken-4" href="addworker.php">Add Worker</a>
</div>
  </div>

<!-- Workers DB END -->
</main>


<!-- Footer Start -->
 <footer class="page-footer light-blue darken-4 bottom">
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
<script type="text/javascript" src="../js/materialize.js"></script>
<script>
     M.AutoInit();
  </script>

</body>
</html>