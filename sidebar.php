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
            <a href="#" class="menu-item submenu-trigger <?php echo $req == 'tennis.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/tennis.png" alt="" /><span class="ml-1">Tennis</span>
            </a>
        </li>
        <li>
            <a href="#" class="menu-item submenu-trigger <?php echo $req == 'cricket.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/cricket.png" alt="" /><span
                    class="ml-1">Cricket</span>
            </a>
        </li>
        <li>
            <a href="soccer.php" class="menu-item submenu-trigger <?php echo $req == 'soccer.php' ? 'active' : ''; ?>">
                <img src="public/assets/side-menu-icons/light-icons/soccer.png" alt="" /><span
                    class="ml-1">Soccer</span>
            </a>
        </li>
        <li>
            <a href="greyhound.php" class="menu-item submenu-trigger <?php echo $req == 'greyhound.php' ? 'active' : ''; ?>">
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
            <a href="horserace.php" class="menu-item submenu-trigger <?php echo $req == 'horserace.phps' ? 'active' : ''; ?>">
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
<div class="matches-sidebar" id="matchesSidebar">
      <div class="d-flex align-items-center mt-3">
        <p class="m-0">All Matches</p>

        <i
          class="fa fa-times d-flex justify-content-end flex-grow-1 mr-3"
          id="closesubmenu"
        ></i>
      </div>

      <ul class="p-0 mt-3">
        
        <li>
        <div class="d-flex">
          <a href="tennis.php" class="mt-3">
            <span>Tennis Men's Wimbledon 2025</span>
          </a>
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-3 " aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z"></path></svg>
        </div>
        </li>
        <li>
        <div class="d-flex">
          <a href="cricket.php" class="mt-3">
            <span>Cricket Women's Wimbledon 2025</span>
          </a>
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="mt-3 " aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z"></path></svg>
        </div>
        </li>
        <li>
          <a href="greyhound.php" class="mt-3">
            <span>Greyhound Women's Wimbledon 2025</span>
          </a>
        </li>
        <li>
          <a href="soccer.php" class="mt-3">
            <span>Soccer Women's Wimbledon 2025</span>
          </a>
        </li>
        <li>
          <a href="horserace.php" class="mt-3">
            <span>Horserace Women's Wimbledon 2025</span>
          </a>
        </li>
        <!-- Add more items here as needed -->
      </ul>
    </div>