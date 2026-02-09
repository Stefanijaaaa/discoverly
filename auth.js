window.logged = false; 
window.user = "";

async function checkAuth() {
    try {
        var res = await fetch('http://127.0.0.1:5000/api/auth/check', { credentials: 'include' });
        var data = await res.json();
        if (data.logged_in) {
            logged = true; 
            user = data.email; 
            document.getElementById('auth-link').textContent = 'Log Out';
            document.getElementById('auth-link').href = '#';
            document.getElementById('auth-link').onclick = handleLogout;
            document.getElementById('profile-link').style.display = 'inline';
        }
    } catch (e) {
        console.log('Not logged in');
    }
}

async function handleLogout(e) {
    e.preventDefault();
    try {
        await fetch('http://127.0.0.1:5000/api/auth/logout', { method: 'POST', credentials: 'include' });
        window.location.href = 'login.html';
    } catch (e) {
        console.log('Logout failed');
    }
}

checkAuth();