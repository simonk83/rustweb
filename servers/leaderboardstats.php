<?php include('../modules/headerstats.php') ?>
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://forkaweso.me/Fork-Awesome/icon/discord/">


<?php include('../config/siteconfig.php'); ?>
<title><?php echo $server1Name ?> </title>

<table class="center">
    <tr>
        <th>Most PVP Kills</th>
        <th> </th>
    </tr> 
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT PVPKills, Name FROM *your-server-name*.playerranksdb order by PVPKills desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Name"] . "</td><td>" . $row["PVPKills"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}

$conn -> close();
?>
</table> 

<table class="center">
    <tr>
        <th>Most PVE Kills</th>
        <th> </th>
    </tr>    

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT PVEKills, Name FROM *your-server-name*.playerranksdb order by PVEKills desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["PVEKills"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most NPC Kills</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT NPCKills, Name FROM *your-server-name*.playerranksdb order by NPCKills desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["NPCKills"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Sleepers Killed</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT SleepersKilled, Name FROM *your-server-name*.playerranksdb order by SleepersKilled desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["SleepersKilled"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Headshots</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT Headshots, Name FROM *your-server-name*.playerranksdb order by Headshots desc LIMIT 1;";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Headshots"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Deaths</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT Deaths, Name FROM *your-server-name*.playerranksdb order by Deaths desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Deaths"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Highest KDR</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT KDR, Name FROM *your-server-name*.playerranksdb order by KDR desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["KDR"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Heli Hits</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT HeliHits, Name FROM *your-server-name*.playerranksdb order by HeliHits desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["HeliHits"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Heli Kills</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT HeliKills, Name FROM *your-server-name*.playerranksdb order by HeliKills desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["HeliKills"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most APC Kills</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT APCKills, Name FROM *your-server-name*.playerranksdb order by APCKills desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["APCKills"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Bullets Fired</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT BulletsFired, Name FROM *your-server-name*.playerranksdb order by BulletsFired desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["BulletsFired"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Structures Built</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT StructuresBuilt, Name FROM *your-server-name*.playerranksdb order by StructuresBuilt desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["StructuresBuilt"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>

</table>

<table class="center">
    <tr>
        <th>Most Items Crafted</th>
        <th> </th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT ItemsCrafted, Name FROM *your-server-name*.playerranksdb order by ItemsCrafted desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["ItemsCrafted"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table>

<table class="center">
    <tr>
        <th>Most Resources Gathered</th>
        <th> </th>
    </tr>    

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT ResourcesGathered, Name FROM *your-server-name*.playerranksdb order by ResourcesGathered desc LIMIT 1";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["ResourcesGathered"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}

$conn -> close();
?>
</table>



<script>
function sortTable(n) {
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("myTable2");

switching = true;
  dir = "desc";
  while (switching) {
      switching = false;
      rows = table.getElementsByTagName("TR");
      for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          var xContent = (isNaN(x.innerHTML)) 
              ? (x.innerHTML.toLowerCase() === '-')
                    ? 0 : x.innerHTML.toLowerCase()
              : parseFloat(x.innerHTML);
          var yContent = (isNaN(y.innerHTML)) 
              ? (y.innerHTML.toLowerCase() === '-')
                    ? 0 : y.innerHTML.toLowerCase()
              : parseFloat(y.innerHTML);
          if (dir == "asc") {
              if (xContent > yContent) {
                  shouldSwitch= true;
                  break;
              }
          } else if (dir == "desc") {
              if (xContent < yContent) {
                  shouldSwitch= true;
                  break;
              }
          }
      }
      if (shouldSwitch) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          switchcount ++;      
      } else {
          if (switchcount == 0 && dir == "desc") {
              dir = "asc";
              switching = true;
          }
      }
   }
}

</script>