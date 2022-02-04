<link rel="stylesheet" href="././css/styles.css">
<table>
    <tr>
        <th>Player</th>
        <th>Kills</th>
        <th>Death</th>
        <th>K/D</th>
    </tr>    
<?php
include('../steamauth/steamauth.php');
include('../steamauth/userInfo.php');
include('../config/serverDBs/server2DB.php');
$steamid = $steamprofile['steamid'];
$sql = "SELECT * FROM playerranks WHERE UserID = '$steamid' order by PVPKills desc LIMIT 50";
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