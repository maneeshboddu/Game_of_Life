<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['username']);
 header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8" />
  <title>The Game of Life</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://use.fontawesome.com/6edc82a164.js"></script> 

</head>
<body>
  <div class="navbar">
    <a href="#home" id="start">Start</a>
    <a href="#news"id="clear">Reset</a>
    <div class="dropdown">
      <button class="dropbtn"></i>Patterns
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
       <a class = "navbar" href="#" id="stil">Stil-life</a>
       <a class = "navbar" href="#" id="oscillator">Oscillator</a>
       <a class = "navbar" href="#" id="glider">Gliders and space ships</a>
       <a class = "navbar" href="#" id="guns">Guns</a>
       <a class = "navbar" href="#" id="random">Random</a>
     </div>
   </div> 
   <div class="dropdown">
    <button class="dropbtn"></i>Size
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class = "navbar" href="#" id="var_size1">30 * 100</a>
      <a class = "navbar" href="#" id="var_size2">40 * 100</a>
      <a class = "navbar" href="#" id="var_size3">50 * 100</a>
    </div>
  </div> 
  <a href="#asas" id="step">Increment</a>
  <a href="#asas" id="steptwo">Increment by 23</a>  
  <?php  if (isset($_SESSION['username'])) : ?>
    <div class="dropdown" style="float:right">
      <button class="dropbtn"> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a class = "navbar" href="index.php?logout='1'">Logout</a>
   </div>
 </div> 
</div>
<?php endif ?>
</div>
<div>
  <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
      <h3>
        <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
        ?>
      </h3>
    </div>
  <?php endif ?>
</div>


<div id="gridContainer">
  
</div>

<div class="footer">
  <div class="footerleft">
    <a href="">Generation count : </a>
    <a href="" id="count">0</a>
  </div>

  <div class="footerright">
    <a href="">Population count : </a>
    <a href="" id="count1">0</a>
  </div>
</div>
<script src="main.js"></script>
</body>
</html>