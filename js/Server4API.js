const api_url4 = 'https://api.rust-servers.info/status/' // Set server API here

async function getInfo() {
    const response = await fetch(api_url4);
    const data4 = await response.json(); 
    const {status, players, players_max, uptime} = data4 
    document.getElementById('status4').textContent = status;
    document.getElementById('players4').textContent = players;
    document.getElementById('maxplayers4').textContent = players_max;
    document.getElementById('restart4').textContent = uptime;
}
getInfo();