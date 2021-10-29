<?php 
  include_once('../config.php');
  
  $ID = $_GET['ID'];
  $sql = "SELECT * FROM medicinedb WHERE ID=$ID";
  $getUsers = $conn->prepare($sql);
  $getUsers -> execute();
  $users = $getUsers -> fetchAll();

  session_start();
  if(isset($_SESSION["username"])) {
  } else {
    header('Location:mainframe.php');
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Medicine Update</title>
  <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="utf-8">
</head>
<body>
<!-- inside Navbar start -->  
  <nav class="nav-extended">
    <div class="nav-wrapper light-blue darken-3">
      <a href="../index.html" class="brand-logo"><img src="../img/spa.png" style="padding-top:8px;padding-left:10px"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../index.html">Home</a></li>
        <li><a href="mainframe.php">Dashboard</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../index.html">Home</a></li>
        <li><a href="mainframe.php">Dashboard</a></li>
        <li><a href="logout.php">Log Out</a></li>
  </ul>
<!-- inside navbar end -->
<br>
  <div class="row">
    <h4 class="col s6 offset-s4">Edit Medicine</h4>
  </div>
<div class="row">
  <form class=" offset-s4 col s6" action="medupdate2.php" method="POST">
    <div class="row">
      <input type="hidden" name="ID" value="<?= $users[0]['ID']?>">
      <div class="input-field col s5">
            <input id="medicinename" type="text" class="validate" name="medname" value="<?= $users[0]['medname']?>">
            <label for="medicinename">Medicine Name</label>
          </div>
            <div class="input-field col s3">
     <select name="type" value="<?= $users[0]['type']?>">
      <option value="" disabled selected>Select</option>
      <option value="Syrup">Syrup</option>
      <option value="Tablet">Tablet</option>
      <option value="Pills">Pills</option>
      <option value="Capsules">Capsules</option>
      <option value="Cream">Cream</option>
      <option value="Suppository">Suppository</option>
      <option value="Nasal Drop">Nasal Drop</option>
      <option value="Eye Drop">Eye Drop</option>
      <option value="Oral Spray">Oral Spray</option>
      <option value="Spray">Spray</option>                                                                                        
      <option value="Oils">Oils</option>
      <option value="First Aid">First Aid</option>
      <option value="Diet Products">Diet Products</option>
      <option value="Tea">Tea</option>
      <option value="Ampoule">Ampoule</option>
      <option value="Meter">Meter</option>
      <option value="Food">Food</option>
      <option value="Miscellaneous">Miscellaneous</option>
    </select>
    <label>Medicine</label>
  </div>
    </div>
    <div class="row">
      <div class="input-field col s8">
            <input id="drug" type="text" class="validate" name="drug" value="<?= $users[0]['drug']?>">
            <label for="drug">Generic Name</label>
            </div>
        </div>
    <div class="row">
      <div class="input-field col s4">
            <input id="origincountry" type="text" class="validate" name="origincountry" value="<?= $users[0]['origincountry']?>">
            <label for="origincountry">Country of Origin</label>
            </div>
            <div class="input-field col s4">
            <input id="producer" type="text" class="validate" name="producer" value="<?= $users[0]['producer']?>">
            <label for="producer">Producer</label>
            </div>
    </div>
    <div class="row">
      <div class="input-field col s8">
            <input id="price" type="text" class="validate" name="price" value="<?= $users[0]['price']?>">
            <label for="price">Price</label>
            </div>
    </div>
    <div class="row">
      <div class="input-field col s8">
            <input id="quantity" type="text" class="validate" name="quantity" value="<?= $users[0]['quantity']?>">
            <label for="quantity">Quantity</label>
            </div>
    </div>
    
    <button class="btn waves-effect waves-light col  offset-s6 s2 light-blue darken-3" type="submit" name="submit">EDIT </button>
  </form>   
</div>


<!-- Footer Start -->
 <footer class="page-footer light-blue darken-4">
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