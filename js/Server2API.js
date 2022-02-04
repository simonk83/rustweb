const api_url2 = 'https://api.rust-servers.info/status/' // Set server API here

async function getInfo() {
    const response = await fetch(api_url2);
    const data2 = await response.json(); 
    const {status, players, players_max, uptime} = data2 
    document.getElementById('status2').textContent = status;
    document.getElementById('players2').textContent = players;
    document.getElementById('maxplayers2').textContent = players_max;
    document.getElementById('restart2').textContent = uptime;

}
getInfo();