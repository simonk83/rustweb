const api_url3 = 'https://api.rust-servers.info/status/' // Set server API here

async function getInfo() {
    const response = await fetch(api_url3);
    const data3 = await response.json(); 
    const {status, players, players_max, uptime} = data3 
    document.getElementById('status3').textContent = status;
    document.getElementById('players3').textContent = players;
    document.getElementById('maxplayers3').textContent = players_max;
    document.getElementById('restart3').textContent = uptime;
}
getInfo();