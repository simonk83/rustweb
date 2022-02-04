<?php include('../modules/headerstats.php') ?>
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://forkaweso.me/Fork-Awesome/icon/discord/">

<?php include('../config/siteconfig.php'); ?>
<title><?php echo $server1Name ?> </title>
<table id="myTable">
    <tr>

        <th class="fsort" onclick="sortTable(0)">Player <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(1)">Kills <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(2)">Death <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(3)">K/D <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(4)">PVEKills <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(5)">NPCKills <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(6)">SleepersKilled <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(7)">HeadShots <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(8)">Suicides <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(9)">TimesWounded <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(10)">HeliHits <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(11)">HeliKills <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(12)">APCKills <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(13)">ExplosivesThrown <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(14)">RocketsLaunched <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(15)">BulletsFired <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(16)">StructuresBuilt <i class="fa fa-sort"></i></th>
        <th onclick="sortTable(17)">ResourcesGathered <i class="fa fa-sort"></i></th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server1DB.php');

$sql = "SELECT * FROM $tablename order by PVPKills desc";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Name"] . "</td><td>" . $row["PVPKills"] . "</td><td>" . $row["Deaths"] . "</td><td>" . $row["KDR"] . "</td><td>" . $row["PVEKills"] . "</td><td>" . $row["NPCKills"] . "</td><td>" . $row["SleepersKilled"] . "</td><td>" . $row["HeadShots"] . "</td><td>" . $row["Suicides"] . "</td><td>" . $row["TimesWounded"] . "</td><td>" . $row["HeliHits"] . "</td><td>" . $row["HeliKills"] . "</td><td>" . $row["APCKills"] . "</td><td>" . $row["ExplosivesThrown"] . "</td><td>" . $row["RocketsLaunched"] . "</td><td>" . $row["BulletsFired"] . "</td><td>" . $row["StructuresBuilt"] . "</td><td>" . $row["ResourcesGathered"] . "</td></tr>";
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
table = document.getElementById("myTable");

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