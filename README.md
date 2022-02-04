# Rust Web

Forked from https://codefling.com/tools/statistics-page-for-in-game-stats

To make the landing page details work, you need to sign up for https://rust-servers.net/ and add your API key to the end of the string in /js/ServerAPI.js (eg const api_url1 = 'https://rust-servers.net/api/?object=servers&element=detail&key=*yourAPIkey*'; // Set server API here)

For the (very slow and poorly done because I don't know what I'm doing) Leaderboard, add the name of your SQL database to the queries in /servers/Leaderboardstats.php (eg $sql = "SELECT PVPKills, Name FROM *your-server-name*.playerranksdb order by PVPKills desc LIMIT 1";

If I learn how to do that properly at some point I'll commit the changes here.
