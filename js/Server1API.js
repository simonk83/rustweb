const api_url1 = 'https://rust-servers.net/api/?object=servers&element=detail&key=*yourAPIkey*'; // Set server API here

async function getInfo() {
    const response = await fetch(api_url1);
    const data1 = await response.json();
    const { players, maxplayers, uptime } = data1;
    document.getElementById('players').textContent = players;
    document.getElementById('maxplayers').textContent = maxplayers;
    document.getElementById('uptime').textContent = uptime;
}
getInfo();