<?php include('../modules/headerstats.php') ?>
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://forkaweso.me/Fork-Awesome/icon/discord/">
<?php include('../config/siteconfig.php'); ?>
<title><?php echo $server4Name ?></title>
<table>
    <tr>
        <th>Player</th>
        <th>Kills</th>
        <th>Death</th>
        <th>K/D</th>
    </tr>    
   

<?php
include ('../config/ServerDBs/server4DB.php');

$sql = "SELECT * FROM $tablename order by PVPKills desc LIMIT 50";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Name"] . "</td><td>" . $row["PVPKills"] . "</td><td>" . $row["Deaths"] . "</td><td>" . $row["KDR"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>
</table> 

