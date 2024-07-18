<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>1Obet Casino</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/69c89fc43e.js" crossorigin="anonymous"></script>
    <!-- footer style -->
    <style>
    .footer .footerLinks {
        background-color: rgb(34, 42, 60);
        min-width: 100%;
        opacity: 0.8;
        text-align: center;
    }

    .footerLinks a {
        color: white;
    }

    .footerLinks a:hover{
        text-decoration:none;
    }
    .footer {
        min-width: 100%;
    }

    footer {
        height: 100px;
    }

    .footer_img {
        width: 100%;
        display: flex;
        opacity: 0.7;
        -webkit-box-pack: center;
        justify-content: center;
        background-color: rgb(34, 42, 60);
    }

    .footer_img .footerLogos {
        height: auto;
        width: 100px;
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        gap: 10px;
    }

    .footer_img .footerLogos .loginImageOne {
        min-width: 120px;
        height: auto;
        cursor: pointer;
    }

    .footer_img .footerLogos .loginImageTwo {
        min-width: auto;
        height: 40px;
        margin: auto;
        cursor: pointer;
    }

    .loginfooterimg {
        width: 120px;
        height: auto;
        cursor: pointer;
    }

    .loginfooterimgto {
        margin: auto;
        height: 35px;
    }
    </style>

    <!-- sidebar style -->
    <style>
    ul li {
        list-style: none;
        text-decoration: none;
        margin-right: 15px;
        margin-bottom: 1rem;
    }

    ul li a {
        display: flex;
        align-items: center;
        height: 100%;
        width: 100%;
        line-height: 40px;
        font-size: 20px;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s ease;
        padding-left: 10px;
        border-radius: 10px;
    }

    ul li a:hover {
        text-decoration: none;
        background-color: #00a826;
        color: white;
    }

    ul li a img {
        margin-right: 10px;
        transition: transform 0.3s ease;
        animation: rotate 2s linear infinite;
    }

    ul li a.active img {
        animation: none;
    }

    ul li a.active img {
        animation: none;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    ul li a.active {
        background-color: #00a826;
    }

    .menu-toggle {
        font-size: 1.5rem;
        color: white;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -260px;
        width: 260px;
        height: 100%;
        background: black;
        color: white;
        padding-left: 10px;
        transition: all 0.5s ease;
        overflow-y: auto;
        /* Add scrolling */
        z-index: 1000;
    }

    .sidebar.open {
        left: 0;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2px;
        background-color: black;
        color: white;
        position: fixed;
        top: 0;
        width: calc(100% - 32px);
        z-index: 1000;
        transition: padding-left 0.5s ease, margin 0.5s ease;
        /* Added margin transition */
        font-size: 0.9rem;
        margin-top: 1rem;
        border-radius: 6px;
        min-height: 50px;
        flex-wrap: wrap;
        /* Allow wrapping */
    }

    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 6px;
        padding-top: 0px;
        padding-left: 10px;
    }

    .marquee-text {
        display: inline-block;
        padding-left: 100%;
        animation: marquee 30s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .marquee-container:hover .marquee-text {
        animation-play-state: paused;
    }

    .close-toggle {
        cursor: pointer;

        margin-left: auto;
        /* Push to the right */
    }

    @media screen and (max-width: 790px) {
        .sidebar {
            width: 250px;
        }

        .sidebar.open~#header {
            padding-left: 250px !important;
        }

        .header {
            font-size: medium;
        }
    }

    @media screen and (max-width: 690) {
        .content {
            padding-left: 0 !important;
        }

        .sidebar.open~#header {
            padding-left: 0px !important;
        }

        .sidebar.open~.content {
            padding-left: 0 !important;
        }

        .menu-toggle {
            display: inline-block;
        }
    }

    @media screen and (min-width: 1220px) {
        .close-toggle {
            display: none;
        }
    }

    @media screen and (max-width: 442px) {
        .header {
            padding: 3px;
        }

        .timedeaitls_wrapper {
            align-items: start;
        }
    }

    @media screen and (max-width: 425px) {
        .menu-toggle {
            font-size: small;
        }

        .bettor {
            font-size: small;
        }

        .header {
            font-size: small;
            text-wrap: nowrap;
        }

        .marquee-text {
            font-size: small;
        }
    }

    @media screen and (max-width: 320px) {
        .menu-toggle {
            font-size: small;
        }

        .bettor {
            font-size: x-small;
        }

        .header {
            font-size: x-small;
            text-wrap: nowrap;
        }
    }
    </style>
    <!-- black green patti style -->
    <style>
    .module_text {
        line-height: 1.467;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
            BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
            sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

        color: rgb(0, 0, 0);
    }

    .triangle_left::after {
        border-right: 20px solid rgba(0, 0, 0, 0);
        border-top: 38px solid rgb(0, 0, 0);
        content: "";
        left: 100%;
        position: absolute;
    }

    .triangle_right::before {
        border-bottom: 38px solid rgb(0, 168, 38);
        border-left: 20px solid rgba(0, 0, 0, 0);
        content: "";
        position: absolute;
        right: 100%;
    }

    .triangle_right {
        background-color: rgb(0, 168, 38);
    }

    .heigt_sport_book {
        height: 38px;
        margin-top: 6rem !important;
    }

    .triangle_left {
        margin-right: 1.375rem;
        background-color: rgb(0, 0, 0);
    }
    </style>

    <!-- sport box images  -->
    <style>
    .sport_games {
        box-sizing: border-box;
        width: calc(100% + 1.25rem);
        margin-left: -1.25rem;

        padding: 1rem;
    }

    .card:hover {
        box-shadow: rgba(0, 177, 129, 0.9) 0px 4px 8px 0px,
            rgba(0, 177, 129, 0.8) 0px 6px 20px 0px;
        transform: scale(1.01);
        cursor: pointer;
    }

    .card {
        line-height: 0;
        border-radius: 8px 8px 0px 0px;
        box-shadow: rgba(111, 111, 111, 0.9) 0px 4px 8px 0px,
            rgba(114, 114, 114, 0.8) 0px 6px 20px 0px;
        overflow: hidden;
        transition: box-shadow 0.3s ease 0s, width 0.5s ease 0s;
    }

    .card img:hover {
        transform: scale(1.02);
    }

    .card img {
        border-radius: 8px 8px 0px 0px;
        transition: transform 0.3s ease 0s;
    }

    .card_text {
        margin: 0px;
        font-weight: 500;
        line-height: 1.3334;
        font-size: 1.125rem;
        font-family: "Public Sans", sans-serif, -apple-system,
            BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
            sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(0, 0, 0);
    }
    </style>
    <style>
    .dropdown-container {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 56px;
        left: auto;
        right: 1%;
        width: 230px;
        height: 270px;
        background-color: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        border: 1px solid #ddd;
        overflow: auto;
        padding: 8px;
    }

    .dropdown-item {
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 6px;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1;
        color: rgb(0, 168, 38);
    }

    hr {
        margin: 0;
    }

    .username:hover {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <!-- main boady content -->
    <div class="content m-3">
        <!-- include header -->
        <?php include 'header.php'; ?>
        <div class="heigt_sport_book m-0 d-flex flex-row flex-grow-0 position-relative w-100">
            <div class="triangle_left d-flex pl-4 pr-4 align-items-center position-relative">
                <p class="text-white m-0 fw-normal module_text">1obet Casino</p>
            </div>
            <div
                class="triangle_right d-flex flex-grow-1 flex-shrink-1 position-relative align-items-center justify-content-end text-whit">
            </div>
        </div>

        <div class="row sport_games">
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/es/jpg/es-three-card-poker-lobby-mobile.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Live Betting
                    </h5>
                </div>
            </div>

            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/be/jpg/be-livecasino.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>

            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/es/jpg/es-football-studio-in-spanish-mobile.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Sportsbook
                    </h5>
                </div>
            </div>
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/ez/jpg/ez-sic-bo.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/es/jpg/es-extra-chili-epic-spins-mobile.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/ez/jpg/ez-bet-on-teen-patti.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/ez/jpg/ez-blackjack-salon-prive-mobile.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>
            <div class="pt-4 pl-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="card">
                    <img class="w-100"
                        src="https://d1b82hscw3e9o2.cloudfront.net/media/images/slots/small/es/jpg/es-first-person-xxxtreme-lightning-roulette-mobile.jpg" />
                    <h5 class="card_text" style="
                text-align: center;
                background: linear-gradient(
                  rgba(125, 185, 232, 0),
                  rgb(0, 177, 129)
                );
                text-transform: uppercase;
                padding: 4px;
                color: white;
              ">
                        Esports
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- sidebate -->
    <?php include 'sidebar.php'; ?>

    <?php include 'script.php';?>
</body>

</html>