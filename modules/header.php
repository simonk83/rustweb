<?php include('./config/siteconfig.php')?>
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <header>
     
    <li><a href="../index.php"><?php echo $siteName ?></a></li> 

    <div class="topnav" id="myTopnav">
      <a href="#home" class="active"></a>
      <a href="servers/server1stats.php">Stats</a>
      <a href="servers/leaderboardstats.php">Leaderboard</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fas fa-bars"></i>
      </a>
    </div>

     
     
      
        <!--<nav>
          <ul class="nav_links">
              <li><a href="servers/server1stats.php">Stats</a></li>
              <li><a href="servers/leaderboardstats.php">Leaderboard</a></li>
          </ul>
        </nav>-->
        <!---<a class="cta" href='<?php echo $storeLink ?>'><button>Store</button></a>--->
    </header>
    <div class="header-img"></div>
    
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>