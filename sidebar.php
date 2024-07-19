<div class="sidebar" id="sidebar">
    <div class="d-flex align-items-center mt-3">
        <img src="public/assets/images/logo.webp 512.webp" alt="1obet-logo" width="50" height="50" />
        <h3>1OBET</h3>
        <i class="fa fa-times close-toggle ml-5" id="closeToggle"></i>
    </div>
    <?php 
        $req = trim($_SERVER['REQUEST_URI'], '/');
        $url = explode('/', $req);
        // echo $req;
    ?>
    <ul class="p-0">
        <li>
            <a href="dashboard.php" class="menu-item <?php echo $req == 'dashboard.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/dashboard.png" alt="" /><span
                    class="ml-1">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="tennis.php" class="menu-item <?php echo $req == 'tennis.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/tennis.png" alt="" /><span class="ml-1">Tennis</span>
            </a>
        </li>
        <li>
            <a href="cricket.php" class="menu-item <?php echo $req == 'cricket.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/cricket.png" alt="" /><span
                    class="ml-1">Cricket</span>
            </a>
        </li>
        <li>
            <a href="soccer.php" class="menu-item <?php echo $req == 'soccer.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/soccer.png" alt="" /><span
                    class="ml-1">Soccer</span>
            </a>
        </li>
        <li>
            <a href="greyhound.php" class="menu-item <?php echo $req == 'greyhound.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/royal-casino.png" alt="" /><span
                    class="ml-1">Greyhound</span>
            </a>
        </li>
        <li>
            <a href="current_postion.php" class="menu-item <?php echo $req == 'current_postion.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/current-position.png" alt="" /><span
                    class="ml-1">Current position</span>
            </a>
        </li>
        <li>
            <a href="horserace.php" class="menu-item <?php echo $req == 'horserace.phps' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/horse-race.png" alt="" /><span class="ml-1">Horse
                    Race</span>
            </a>
        </li>
        <li>
            <a href="sportsBook.php" class="menu-item <?php echo $req == 'sportsBook.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/all-sports.png" alt="" /><span class="ml-1">Sports
                    Book</span>
            </a>
        </li>
        <li>
            <a href="betfair_games.php" class="menu-item <?php echo $req == 'betfair_games.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/bet-fair-games.png" alt="" /><span
                    class="ml-1">Betfair Games</span>
            </a>
        </li>
        <li>
            <a href="evolution_casino.php" class="menu-item <?php echo $req == 'evolution_casino.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/royal-casino.png" alt="" /><span
                    class="ml-1">Evoluation Casino</span>
            </a>
        </li>
        <li>
            <a href="1obetcasino.php" class="menu-item <?php echo $req == '1obetcasino.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/royal-casino.png" alt="" /><span class="ml-1">1obet
                    Casino</span>
            </a>
        </li>
        <li>
            <a href="result.php" class="menu-item <?php echo $req == 'result.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/results.png" alt="" /><span
                    class="ml-1">Result</span>
            </a>
        </li>
        <li>
            <a href="ezugi_casino.php" class="menu-item <?php echo $req == 'ezugi_casino.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/royal-casino.png" alt="" /><span class="ml-1">Ezugi
                    Casino</span>
            </a>
        </li>
        <li>
            <a href="120_british_casino.php" class="menu-item <?php echo $req == '120_british_casino.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/royal-casino.png" alt="" /><span class="ml-1">120
                    British Casino</span>
            </a>
        </li>
    </ul>
</div>