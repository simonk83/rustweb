<?php require('./config/siteconfig.php')?>
<header>
      <li><a href="index.php"><?php echo $siteName ?></a></li> 
        <nav>
          <ul class="nav_links">
              <li><a href="stats.php">Stats</a></li>
              <li><a href="personal.php">Personal Stats</a></li>
          </ul>
        </nav>
        <?php echo logoutbutton();?>
      </header>
    