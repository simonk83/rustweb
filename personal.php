<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="././css/styles.css">
<title>Personal Stats</title>
<script>type="text/javascript" src="/js/personalstats.js"</script>
<?php include('config/siteconfig.php') ?>
<link rel="shortcut icon" type="image/jpg" href="<?php echo $favicon ?>">


<body>

<?php
require('steamauth/steamauth.php');


if(!isset($_SESSION['steamid'])) {
    include('./modules/header.php');
    echo "<h1> Sign in to view personal stats</h1>";
  ?>  
  <div class = "login">
  <?php     loginbutton(); //login button
  ?>
</div>
<?php }  else {
    include ('steamauth/userInfo.php');
    include('./modules/headersteam.php');
    include('./modules/personal.php');
}    
?>  
</body>
</html>