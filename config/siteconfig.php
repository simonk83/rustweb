<?php
//==========Site Config============\\

$siteName = ""; // Your site name 
$siteCopyright = ''; // Copyrighted name
$siteFooterText = ''; // Footer Text
$storeLink = ''; // Link to your store
$favicon = "../img/rustfav.png"; // favicon link


//=========Steam Auth (Needed for personal stats)========\\

$apiKey = ''; // Your Steam WebAPI-Key found at https://steamcommunity.com/dev/apikey
$domainName = ''; // The main URL of your website displayed in the login page
$logoutpage = 'personal.php'; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$loginpage = 'personal.php'; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!


//==========Social Links============\\

$steamLink = ''; // Steam link for footer
$discordLink = ''; // Discord link for footer
$facebookLink = ''; // Facebook link for footer



//=======Emable/Disable Modules=======\\

if (!defined('MODULE_STEAM')) define('MODULE_STEAM', 'OFF');
#Steam footer icon

if (!defined('MODULE_DISCORD')) define('MODULE_DISCORD', 'ON');
#Discord footer icon

if (!defined('MODULE_FACEBOOK')) define('MODULE_FACEBOOK', 'OFF');
#Facebook footer icon


//==========Table name(s)============\\

$tablename = 'playerranksdb'; // Default is playerranksdb, Change this setting to your table name if you changed it.
$leadertable = 'playerranksLeaderdb';

//==========Server Names============\\

$server1Name = ''; // Server 1 Name
$server2Name = ''; // Server 2 Name
$server3Name = ''; // Server 3 Name
$server4Name = ''; // Server 4 Name
$server5Name = ''; // Server 5 Name
$server6Name = ''; // Server 6 Name


//==========Server IP's============\\


$server1IP = ''; // Server 1 IP
$server2IP = ''; // Server 2 IP
$server3IP = ''; // Server 3 IP
$server4IP = ''; // Server 4 IP
$server5IP = ''; // Server 5 IP
$server6IP = ''; // Server 6 IP
?>