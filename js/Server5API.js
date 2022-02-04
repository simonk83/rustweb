const api_url5 = 'https://api.rust-servers.info/status/' // Set server API here

async function getInfo() {
    const response = await fetch(api_url5);
    const data5 = await response.json(); 
    const {status, players, players_max, uptime} = data5 
    document.getElementById('status5').textContent = status;
    document.getElementById('players5').textContent = players;
    document.getElementById('maxplayers5').textContent = players_max;
    document.getElementById('restart5').textContent = uptime;
}
getInfo();