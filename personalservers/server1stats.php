<link rel="stylesheet" href="././css/styles.css">
<? include('../config/siteconfig.php'); ?>

<title><?php echo $server1Name ?></title>
<table>
    <tr>
        <th>Player</th>
        <th>Kills11</th>
        <th>Death</th>
        <th>K/D</th>
        <th>SDR</th>
    </tr>    
<?php
include('../steamauth/steamauth.php');
include('../steamauth/userInfo.php');
include('../config/serverDBs/server1DB.php');
$steamid = $steamprofile['steamid'];
$sql = "SELECT * FROM $tablename WHERE UserID = '$steamid' order by PVPKills desc LIMIT 50";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Name"] . "</td><td>" . $row["PVPKills"] . "</td><td>" . $row["Deaths"] . "</td><td>" . $row["KDR"] . "</td><td>" . $row["SDR"] . "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 Results";
}
$conn -> close();
?>