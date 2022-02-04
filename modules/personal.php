<?php require('./config/siteconfig.php')?>
<title>Personal Stats</title>
<script src="js/personal.js" charset="utf-8"></script>
<h1>Personal Stats for <?php echo $steamprofile['personaname'];?></h1>
<p class="view">Select the server you want to view your stats for!</p>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#server1stats').on('click', function() {
                $("#statinput").load('../personalservers/server1stats.php');
            });

            $('#server2stats').on('click', function() {
                $("#statinput").load('../personalservers/server2stats.php');
            });
            $('#server3stats').on('click', function() {
                $("#statinput").load('../personalservers/server3stats.php');
            });
            $('#server4stats').on('click', function() {
                $("#statinput").load('../personalservers/server4stats.php');
            });
            $('#server5stats').on('click', function() {
                $("#statinput").load('../personalservers/server5stats.php');
            });
            $('#server6stats').on('click', function() {
                $("#statinput").load('../personalservers/server6stats.php');
            });
        });
    </script>    
<body>
    <nav class="serverinput">
     <input class="serverinputbtn" type="button" value="<?php echo $server1Name?>" id="server1stats"/>
     <input class="serverinputbtn" type="button" value="<?php echo $server2Name?>" id="server2stats"/>
     <input class="serverinputbtn" type="button" value="<?php echo $server3Name?>" id="server3stats"/>
     <input class="serverinputbtn" type="button" value="<?php echo $server4Name?>" id="server4stats"/>
     <input class="serverinputbtn" type="button" value="<?php echo $server5Name?>" id="server5stats"/>
     <input class="serverinputbtn" type="button" value="<?php echo $server6Name?>" id="server6stats"/>
    </nav>
     <div id="statinput">
     </div>
</body>

