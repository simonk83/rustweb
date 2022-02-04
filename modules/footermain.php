<footer class="footerhome">
    <div class="footer-content">
      <p class="footertext"><?php echo $siteFooterText?></p>
      <ul class="socials">
      <?php if(MODULE_FACEBOOK == "ON"){include_once("modules/facebook.php");};?>
        <?php if(MODULE_STEAM == "ON"){include_once("modules/steam.php");};?>
        <?php if(MODULE_DISCORD == "ON"){include_once("modules/discord.php");};?>
      </ul>
    </div>
    <div class="footer-bottom">
      <p class="copyright">Copyright &copy;2021 <?php echo $siteCopyright?></p>
    </div>
  </footer>