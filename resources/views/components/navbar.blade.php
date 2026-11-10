<nav> 
    <div> 
        <h1>FarmMonitor</h1>
        </div>

        <ul>
            @if(session('login'))
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/pengelolaan">Pengelolaan</a></li>
            <li><a href="/statistik">Statistik Peternakan</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Logout</a></li>
            @endif
        </ul>
    </nav>