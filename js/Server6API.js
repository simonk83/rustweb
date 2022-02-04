const api_url6 = 'https://api.rust-servers.info/status/' // Set server API here

async function getInfo() {
    const response = await fetch(api_url6);
    const data6 = await response.json(); 
    const {status, players, players_max, uptime} = data6 
    document.getElementById('status6').textContent = status;
    document.getElementById('players6').textContent = players;
    document.getElementById('maxplayers6').textContent = players_max;
    document.getElementById('restart6').textContent = uptime;
}
getInfo();