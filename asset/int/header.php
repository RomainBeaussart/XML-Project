<div class="navbar-component">
    <div class="navbar area">
        <a href="#" class="brand">Filmoscope</a>
        <nav role="navigation" id="navigation" class="list">
            <a onclick="window.location.replace('index.php');" class="item -link">Home</a>
            <a onclick="window.location.replace('login.php');" class="item -link">Login</a>
            <a onclick="window.location.replace('register.php');" class="item -link">Register</a>
            <a onclick="window.location.replace('dashboard/panel.php');" class="item -link">Panel</a>
            <form method="get" action="research.php">
                <input type="text" placeholder=" Rechercher" name="search" />
                <button type="submit" onclick="this.form.submit();">Search</button>
            </form>
        </nav>
    </div>
</div>
