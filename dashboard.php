<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>1obetdashboar</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <script
      src="https://kit.fontawesome.com/69c89fc43e.js"
      crossorigin="anonymous"
    ></script>
    <style>
      body {
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 1rem;
      }
      .css-1xvgq63 {
        user-select: none;
        width: 1em;
        height: 1em;
        overflow: hidden;
        display: inline-block;
        text-align: center;
        flex-shrink: 0;
        font-size: 1.40625rem;
        color: white;
        cursor: pointer;
      }
      .footer .footerLinks {
        background-color: rgb(34, 42, 60);
        min-width: 100%;
        opacity: 0.8;
        text-align: center;
      }
      .footerLinks a {
        color: white;
        font-size: 1.1rem;
      }
      .footerLinks a:hover {
        color: white;
        text-decoration: none;
      }
      .footer {
        min-width: 100%;
      }
      footer {
        height: 100px;
        padding-top: 20px;
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
    <style>
      /* sidebar */
      * {
        margin: 0;
        padding: 0;
      }
      ul li {
        list-style: none;
        text-decoration: none;
        margin-right: 15px;
        margin-bottom: 0.2rem;
      }
      .sidebar {
        font-size: 0.9375rem;
        font-weight:400;
        position: fixed;
        top: 0;
        left: -260px;
        width: 260px;
        height: 100%;
        background: black;
        color: white;
        padding-left: 10px;
        transition: all 0.5s ease;
        overflow-y: auto; /* Add scrolling */
        z-index: 1000;
      }
      ul li a {
        display: flex;
        align-items: center;
        height: 100%;
        width: 100%;
        line-height: 40px;
        font-size: 1rem;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s ease;
        padding-left: 10px;
        border-radius: 10px;
      }
      ul li a:hover {
        text-decoration: none;
        background: linear-gradient(72.47deg, rgb(0 90 21) 22.16%, rgb(0 116 26 / 70%) 76.47%);
        color: white;
    }
      ul li a img {
        margin-right: 10px;
        transition: transform 0.3s ease;
        animation: rotate 2s linear infinite;
        width: 18px;
        height:18px;
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
        box-shadow: rgba(0, 168, 38, 0.8) 0px 2px 6px;
        background: linear-gradient(72.47deg, rgb(0, 168, 38) 22.16%, rgba(0, 168, 38, 0.7) 76.47%);
        }
      .menu-toggle {
        font-size: 1.5rem;
        color: white;
        cursor: pointer;
        transition: all 0.5s ease;
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
        transition: padding-left 0.5s ease, margin 0.5s ease; /* Added margin transition */
        font-size: 0.9rem;
        margin-top: 1rem;
        border-radius: 6px;
        min-height: 50px;
        flex-wrap: wrap; /* Allow wrapping */
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
    </style>
    <style>
      .css-1s05omm {
        box-sizing: border-box;

        flex-direction: row;
        height: 38px;
        display: flex;
        position: relative;
        margin-top: 6rem;
      }

      .css-nu8l0g {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        margin-right: 1.375rem;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        position: relative;
        background-color: rgb(0, 0, 0);
        color: rgb(255, 255, 255);
      }
      .css-a4cdis {
        display: flex;
        flex-direction: row;
      }
      .css-nu8l0g .MuiTypography-root {
        color: rgb(255, 255, 255);
      }
      .css-1tv6lwp {
        background-color: rgb(0, 168, 38);
        flex: 1 1 0%;
        padding-right: 1.25rem;
        position: relative;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: end;
        justify-content: flex-end;
        display: flex;

        color: rgb(255, 255, 255);
      }
      .MuiStack-root p {
        margin-bottom: 0rem;
        margin-left: 8px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      }
      .css-1tv6lwp::before {
        border-bottom: 38px solid rgb(0, 168, 38);
        border-left: 20px solid rgba(0, 0, 0, 0);
        content: "";
        position: absolute;
        right: 100%;
      }
      .css-nu8l0g::after {
        border-right: 20px solid rgba(0, 0, 0, 0);
        border-top: 38px solid rgb(0, 0, 0);
        content: "";
        left: 100%;
        position: absolute;
      }
    </style>
    <style>
      .css-flm59u {
        box-sizing: border-box;
        margin: 0.75rem 0px 0px;
        flex-direction: row;
        height: 37px;
        display: flex;
        position: relative;
      }
      .css-2p8vrk {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-nu8l0g svg {
        background: rgb(0, 168, 38);
        border-radius: 27px;
        width: 20px;
        height: 20px;
        fill: black;
      }
    </style>
    <style>
      .css-1yehak0 {
        margin-top: -95px !important;
        display: flex;
        flex-direction: row;
        margin-top: 0.75rem;
        overflow-x: auto;
      }
      .css-1yehak0 p {
        font-size: 17px !important;
      }
      .css-sfjdjv {
        width: 100%;
        cursor: pointer;
      }
    </style>
    <style>
      .css-136bwoc {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-image: none;
        width: 100%;
        overflow-x: auto;
        box-shadow: none;
        border: 1px solid rgb(171, 176, 179);
        border-radius: 0px;
      }
      .css-rxit2l {
        display: table;
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0px;
      }
      .css-disv23 {
        display: table-header-group;
        background: rgb(0, 0, 0);
        text-transform: uppercase;
      }
      .css-e03dsj {
        color: inherit;
        display: table-row;
        vertical-align: middle;
        outline: 0px;
      }
      .css-e03dsj:last-of-type th {
        border: 1px solid rgb(224, 224, 224) !important;
        padding: 12px;
      }
      .css-disv23 .MuiTableCell-root {
        text-transform: capitalize;
        color: rgb(255, 255, 255);
        font-size: 14px;
      }
      .css-disv23 .MuiTableCell-head {
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 1rem;
      }
      .css-136bwoc th {
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
      .css-17l795x {
        user-select: none;
        overflow: hidden;
        display: inline-block;
        text-align: center;
        flex-shrink: 0;
        font-size: 1.40625rem;
        width: 22px;
        height: 22px;
      }
      .css-544u3x {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(0, 168, 38);
        padding-left: 0.5rem;
        font-weight: 600;
      }
      .css-12dfzmm {
        display: table-row-group;
      }
      .css-1sa68b5 {
        color: inherit;
        display: table-row;
        vertical-align: middle;
        outline: 0px;
      }
      .css-136bwoc td {
        padding: 0px !important;
      }
      .css-12dfzmm .MuiTableCell-body {
        letter-spacing: 0.25px;
        color: rgb(25 23 23);
      }
      .css-ha2b3j {
        font-size: 0.8125rem;
        line-height: 1.53846;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        display: table-cell;
        vertical-align: inherit;
        text-align: center;
        padding-right: 16px;
        padding-left: 16px;
        color: rgb(0, 0, 0);
        border: 1px solid rgb(224, 224, 224);
        background: rgb(0, 168, 38);
        padding-top: 8px !important;
        padding-bottom: 8px !important;
      }
      .css-j7qwjs {
        display: flex;
        flex-direction: column;
      }
      .css-jup9dp {
        font-size: 0.8125rem;
        line-height: 1.53846;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        display: table-cell;
        vertical-align: inherit;
        text-align: left;
        padding-right: 16px;
        padding-left: 16px;
        color: rgb(0, 0, 0);
        border: 1px solid rgb(224, 224, 224);
        cursor: pointer;
        padding-top: 8px !important;
        padding-bottom: 8px !important;
      }
      .css-dn6vr0 {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: rgb(0, 0, 0);
        padding-left: 0.5rem;
      }
      .css-gy29k5 {
        font-size: 0.8125rem;
        line-height: 1.53846;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        display: table-cell;
        vertical-align: inherit;
        text-align: center;
        padding-right: 16px;
        padding-left: 16px;
        color: rgb(0, 0, 0);
        border: 1px solid rgb(224, 224, 224);
        padding-top: 8px !important;
        padding-bottom: 8px !important;
      }
      .css-dvxtzn {
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-144pslc {
        user-select: none;
        width: 1em;
        height: 1em;
        overflow: hidden;
        display: inline-block;
        text-align: center;
        flex-shrink: 0;
        font-size: 14px;
      }
      .css-1xhj18k {
        display: flex;
        flex-direction: row;
      }
      .css-5sk20m {
        display: flex;
        flex-direction: column;
        background: rgb(255, 175, 178);
        width: 63px;
      }
      .css-15yvhi8 {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(0, 0, 0);
        font-size: 18px;
        font-weight: 600;
      }
      .css-i1yige {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        font-size: 14px;
      }
      .css-1kgyuku {
        display: flex;
        flex-direction: column;
        background: rgb(141, 210, 240);
        width: 63px;
      }
    </style>
    <style>
      /* Import Google font - Poppins */
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      .wrapper {
        width: 100%;
        position: relative;
        margin-top: 1rem;
      }
      .wrapper i {
        top: 50%;
        height: 50px;
        width: 50px;
        cursor: pointer;
        font-size: 1.25rem;
        position: absolute;
        text-align: center;
        line-height: 50px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
        transform: translateY(-50%);
        transition: transform 0.1s linear;
      }
      .wrapper i:active {
        transform: translateY(-50%) scale(0.85);
      }
      .wrapper i:first-child {
        left: -22px;
      }
      .wrapper i:last-child {
        right: -22px;
      }
      .wrapper .carousel {
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: calc((100% / 4) - 12px);
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 18px;

        scroll-behavior: smooth;
        scrollbar-width: none;
      }
      .carousel::-webkit-scrollbar {
        display: none;
      }
      .carousel.no-transition {
        scroll-behavior: auto;
      }
      .carousel.dragging {
        scroll-snap-type: none;
        scroll-behavior: auto;
      }
      .carousel.dragging .card {
        cursor: grab;
        user-select: none;
      }
      .carousel :where(.card, .img) {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .carousel .card {
        scroll-snap-align: start;

        list-style: none;
        background: #fff;
        cursor: pointer;
        width: 100%;
        flex-direction: column;
      }
      .carousel .card .img {
        height: 100%;
        width: 100%;
      }
      .card .img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }
      .carousel .card h2 {
        font-weight: 500;
        font-size: 1.56rem;
        margin: 30px 0 5px;
      }
      .carousel .card span {
        color: #6a6d78;
        font-size: 1.31rem;
      }

      @media screen and (max-width: 1024px) {
        .css-flm59u {
          margin: 0px;
        }
      }
      @media screen and (max-width: 900px) {
        .wrapper .carousel {
          grid-auto-columns: calc((100% / 2) - 9px);
        }
      }
    </style>
    <style>
      @media screen and (max-width: 510px) {
        .creditdetal {
          height: 45px;
        }
        .creditdetal_border::before {
          border-bottom: 45px solid rgb(0, 168, 38) !important;
        }
        .creditdetal_border::after {
          border-top: 45px solid rgb(0, 0, 0);
        }
      }
      @media screen and (max-width: 790px) {
        .sidebar {
          width: 250px;
        }
        .sidebar.open ~ #header {
          padding-left: 250px !important;
        }
        .header {
          font-size: medium;
        }
        .hidden-head {
          display: none;
        }
        .css-1xhj18k {
          display: none;
        }
        .css-tn9xkt {
          margin-left: 10px;
          font-family: "Public Sans", sans-serif, -apple-system,
            BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
            sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
      }

      .close-toggle {
        cursor: pointer;
        /* Initially hidden */
        margin-left: auto; /* Push to the right */
      }

      @media screen and (max-width: 690) {
        .content {
          padding-left: 0 !important;
        }
        .sidebar.open ~ #header {
          padding-left: 0px !important;
        }

        .sidebar.open ~ .content {
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
      }
      @media screen and (max-width: 425px) {
        .menu-toggle {
          font-size: small;
        }
        .dashbaord {
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
        .dashbaord {
          font-size: x-small;
        }
        .bettor {
          font-size: x-small;
        }
        .header {
          font-size: x-small;
          text-wrap: nowrap;
        }
        .MuiStack-root p {
          font-size: small;
        }
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
    <!-- main content of body -->
    <div class="content m-3">
      <!-- header -->
       <?php include 'header.php';?>

      <div class="css-1s05omm creditdetal">
        <div class="MuiBox-root css-nu8l0g creditdetal_border">
          <div class="MuiStack-root css-a4cdis">
            <p class="MuiTypography-root css-tn9xkt">Credit: 0</p>
            <p class="MuiTypography-root css-tn9xkt">Balance: 2,844.8</p>
            <p class="MuiTypography-root css-tn9xkt">Liable: 0</p>
            <p class="MuiTypography-root css-tn9xkt">Active Bet: 0</p>
          </div>
        </div>
        <div class="MuiBox-root css-1tv6lwp creditdetal_border"></div>
      </div>
      <div class="wrapper">
        <ul class="carousel">
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/betterDash2.jpg"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/betterDash3.jpg"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/betterDash4.jpg"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/betterDash5.jpg"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/casino.png"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
          <li class="card">
            <div class="img">
              <img
                src="public/assets/images/casinoGame1.jpg"
                alt="img"
                draggable="false"
              />
            </div>
          </li>
        </ul>
      </div>
      <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-flm59u">
        <div class="MuiBox-root css-nu8l0g">
          <div class="MuiStack-root css-2p8vrk">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 512 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M400 16c-21.335 9.73-58.244 17.34-73.086 48.232-22.36 1.948-72.753 10.673-122.22 40.25-58.098 34.74-116.017 97.417-131.776 213.702l-.48 3.537-2.774 2.25c-30.87 25.002-40.657 38.937-44.416 61.153-3.536 20.9-.72 51.46-.363 101.877H328.36c3.455-16.892 10.44-29.245 12.472-41.568 2.337-14.176.19-29.938-20.812-58.547-43.078-58.683-46.853-129.458-12.916-171.28-8.654-2.765-15.09-6.887-19.458-12.546-6.115-7.924-7.4-17.006-8.57-25.884l17.848-2.352c1.112 8.446 2.38 13.88 4.97 17.237 2.59 3.356 7.31 6.472 19.55 8.46l-.022.128.172-.17 5.998 9.424c19.957 31.358 42.84 51.292 73.332 54.44l6.51.672 1.367 6.4c2.74 12.828 8.626 19.095 15.116 22.238 6.49 3.143 14.225 2.944 20.47.205 9.316-4.086 14.518-11.35 16.7-22.712 2.122-11.05.546-25.834-5.137-42.106-33.538-38.248-44.475-87.277-63.903-128.772-6.055-9.947-12.448-18.518-20.385-24.856C376.808 55.126 386.456 34.852 400 16zM214.068 34.97C179.55 35.06 146.075 43.06 96 58.58c31.146 9.92 70.397 18.9 86.037 39.01 4.463-3.017 8.94-5.88 13.418-8.56 40.51-24.22 80.387-35.286 108.23-40.04-35.854-9.477-63.047-14.094-89.617-14.023zM157.16 96.712c-1.13-.01-2.265-.01-3.402.004-30.353.37-63.1 9.745-96.647 31.283 27.186 3.672 54.67 3.724 72.58 15.398 15.9-17.92 33.144-32.634 50.677-44.668-7.548-1.244-15.292-1.938-23.207-2.017zM368 128a13.214 13.215 0 0 1 13.213 13.215A13.214 13.215 0 0 1 368 154.432a13.214 13.215 0 0 1-13.213-13.217A13.214 13.215 0 0 1 368 128zm-238.906 16.068c-36.395 1.495-68.903 6.53-104.76 24.766 33.236 7.095 50.913 13.507 65.025 33.83 11.522-22.53 25.045-41.93 39.734-58.596zM74.518 201.46C53.53 201.65 36.614 213.14 16 224c27.854 0 46.067 3.862 58.71 12.055 4.33-11.652 9.16-22.615 14.41-32.924-5.12-1.19-9.963-1.71-14.602-1.67zm-.623 36.82c-17.933 5.845-35.452 7.15-54.23 22.284 17.62 4.638 34.79 9.596 41.398 22.034 3.496-15.77 7.814-30.523 12.832-44.32zm370.142 8.57c1.617-.035 3.222.044 4.783.187l-1.64 17.926c-3.928-.36-5.513.416-5.57.465-.058.048-1.035.656-.635 5.886l-17.95 1.372c-.638-8.35 1.297-16.207 6.955-20.997 4.245-3.593 9.206-4.735 14.057-4.84zM52.215 290.723c-10.352.13-23.76 5.646-34.656 12.334 12.173 6.83 12.357 23.472 8.938 37.668 7.3-9.105 16.855-18.323 29.158-28.48 1.016-7.043 2.19-13.9 3.506-20.585-2.082-.67-4.42-.97-6.947-.937z"
              ></path>
            </svg>
            <p class="MuiTypography-root">Horse Race</p>
          </div>
        </div>
        <div class="MuiBox-root css-1tv6lwp">
          <div class="MuiStack-root d-flex flex-row">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-1xvgq63"
              aria-hidden="true"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="Circle_Chev_Left">
                <g>
                  <path
                    d="M10.15,12.35a.492.492,0,0,1,0-.7l3-3a.495.495,0,0,1,.7.7L11.21,12l2.64,2.65a.495.495,0,0,1-.7.7Z"
                  ></path>
                  <path
                    d="M12,21.933A9.933,9.933,0,1,1,21.933,12,9.944,9.944,0,0,1,12,21.933ZM12,3.067A8.933,8.933,0,1,0,20.933,12,8.943,8.943,0,0,0,12,3.067Z"
                  ></path>
                </g>
              </g>
            </svg>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-1xvgq63"
              aria-hidden="true"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="Circle_Chev_Right">
                <g>
                  <path
                    d="M13.85,11.65a.492.492,0,0,1,0,.7l-3,3a.495.495,0,0,1-.7-.7L12.79,12,10.15,9.35a.495.495,0,0,1,.7-.7Z"
                  ></path>
                  <path
                    d="M12,2.067A9.933,9.933,0,1,1,2.067,12,9.944,9.944,0,0,1,12,2.067Zm0,18.866A8.933,8.933,0,1,0,3.067,12,8.943,8.943,0,0,0,12,20.933Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-flm59u">
        <div class="MuiBox-root css-nu8l0g">
          <div class="MuiStack-root css-2p8vrk">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 512 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M137.75 17.28l-15.313 78.782 20.313 56.876h45.97L137.75 17.28zM74.5 19L20 378.156v116.156h208L210.125 386.5H113.28l-2.218-6.156-25.78-71.594 17.562-6.344 23.562 65.406h90.344l230.688-2.968 9.812-33.406H278.5V312.75h184.22l7.374-25.156L415.53 209.5H291.47l-20.345-37.594h-75.28l-.095-.28h-46.313L159.563 200l-17.593 6.28-26.532-74.25-.126.72L74.5 19zm133.375 178.22h56.094l21.405 38.874-26.094-.438-51.405-38.437zm230.47 12.28l38.53 55.094L493.03 209.5h-54.686zm-82.814 15.938c6.613 0 11.97 5.356 11.97 11.968 0 6.613-5.357 11.97-11.97 11.97-6.61 0-11.967-5.357-11.967-11.97 0-6.612 5.356-11.97 11.968-11.97zm44.595 0c6.612 0 12 5.356 12 11.968 0 6.613-5.388 11.97-12 11.97s-11.97-5.357-11.97-11.97c0-6.612 5.358-11.97 11.97-11.97zm-66.188 29.187c6.612 0 11.97 5.356 11.97 11.97 0 6.61-5.358 11.967-11.97 11.967-6.61 0-11.968-5.356-11.968-11.968 0-6.613 5.356-11.97 11.967-11.97zm43.125 0c6.612 0 12 5.356 12 11.97 0 6.61-5.388 11.967-12 11.967-6.61 0-11.968-5.356-11.968-11.968 0-6.613 5.357-11.97 11.97-11.97zm42.063 0c6.612 0 11.97 5.356 11.97 11.97 0 6.61-5.358 11.967-11.97 11.967-6.612 0-11.97-5.356-11.97-11.968 0-6.613 5.358-11.97 11.97-11.97z"
              ></path>
            </svg>
            <p class="MuiTypography-root css-tn9xkt">Grey hound</p>
          </div>
        </div>
        <div class="MuiBox-root css-1tv6lwp">
          <div class="MuiStack-root d-flex flex-row">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-1xvgq63"
              aria-hidden="true"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="Circle_Chev_Left">
                <g>
                  <path
                    d="M10.15,12.35a.492.492,0,0,1,0-.7l3-3a.495.495,0,0,1,.7.7L11.21,12l2.64,2.65a.495.495,0,0,1-.7.7Z"
                  ></path>
                  <path
                    d="M12,21.933A9.933,9.933,0,1,1,21.933,12,9.944,9.944,0,0,1,12,21.933ZM12,3.067A8.933,8.933,0,1,0,20.933,12,8.943,8.943,0,0,0,12,3.067Z"
                  ></path>
                </g>
              </g>
            </svg>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 24 24"
              class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-1xvgq63"
              aria-hidden="true"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="Circle_Chev_Right">
                <g>
                  <path
                    d="M13.85,11.65a.492.492,0,0,1,0,.7l-3,3a.495.495,0,0,1-.7-.7L12.79,12,10.15,9.35a.495.495,0,0,1,.7-.7Z"
                  ></path>
                  <path
                    d="M12,2.067A9.933,9.933,0,1,1,2.067,12,9.944,9.944,0,0,1,12,2.067Zm0,18.866A8.933,8.933,0,1,0,3.067,12,8.943,8.943,0,0,0,12,20.933Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div class="MuiStack-root css-1yehak0">
        <div class="MuiBox-root css-sfjdjv">
          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm">
            <div class="MuiBox-root css-nu8l0g">
              <div class="MuiStack-root css-2p8vrk">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M256 91.088c-111.453 0-202.122 88.575-202.122 197.456C53.878 397.426 144.548 486 256 486c111.453 0 202.122-88.574 202.122-197.456 0-108.881-90.67-197.455-202.122-197.455zm0 375.866c-100.942 0-183.076-80.039-183.076-178.41 0-98.37 82.134-178.41 183.076-178.41s183.076 80.04 183.076 178.41c0 98.371-82.134 178.41-183.076 178.41zm-.571-178.41l128.558 99.55A165.602 165.602 0 0 1 256 447.908c-90.467 0-164.03-71.493-164.03-159.365 0-87.681 73.266-159.055 163.447-159.352v159.352zM256 72.043a224.727 224.727 0 0 0-66.66 10.07V56.354A30.354 30.354 0 0 1 219.694 26h72.695a30.354 30.354 0 0 1 30.27 30.354v25.76A224.727 224.727 0 0 0 256 72.042zm128.939 40.71l20.117-19.748c8.797-8.642 21.272-10.463 27.878-4.083l20.403 19.748c6.594 6.38 4.761 18.558-3.988 27.2l-19.438 19.045a221.06 221.06 0 0 0-44.96-42.162zM82.435 154.51l-19.391-19.046c-8.797-8.642-10.713-20.724-4.202-26.985L78.875 89.1c6.476-6.26 18.856-4.344 27.652 4.298l20.046 19.688a221.06 221.06 0 0 0-44.138 41.425z"
                  ></path>
                </svg>
                <p class="MuiTypography-root" style="text-wrap: nowrap">
                  In Play
                </p>
              </div>
            </div>
            <div class="MuiBox-root css-1tv6lwp">10</div>
          </div>
        </div>
        <div class="MuiBox-root css-sfjdjv">
          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm">
            <div class="MuiBox-root css-nu8l0g">
              <div class="MuiStack-root css-2p8vrk">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M433.2 17.99L159.8 291.4l60.8 60.8-6.3 6.3L494 78.79c0-24.32-36.5-60.8-60.8-60.8zM161.5 64.03a32 32 0 0 0-7.8.59c3.9 21.25 13.8 38.48 30.3 52.48a32 32 0 0 0 3.7-37.13 32 32 0 0 0-26.2-15.94zm-24.1 9.35a32 32 0 0 0-5.1 38.62 32 32 0 0 0 36 14.9c-15.5-14.7-25.9-32.79-30.9-53.52zm26.4 247.22C126.3 378.1 60.46 427.7 19.06 479.5c-4.82 5.9 7.6 18.2 13.53 13.5C84.32 451.6 133.9 385.7 191.4 348.2z"
                  ></path>
                </svg>
                <p class="MuiTypography-root MuiTypography-body1 css-17kmaxw">
                  Cricket
                </p>
              </div>
            </div>
            <div class="MuiBox-root css-1tv6lwp">2</div>
          </div>
        </div>
        <div class="MuiBox-root css-sfjdjv">
          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm">
            <div class="MuiBox-root css-nu8l0g">
              <div class="MuiStack-root css-2p8vrk">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M365.6 31c-6.6 0-13.2.6-19.7 1.59-34.5 5.44-66.5 23.14-88.3 44.96-28.8 28.85-49.6 70.85-58.4 111.65-1.6 6.7-2.6 13.6-3.5 20.4L162.2 334l15.8 15.8 124.3-33.5c6.8-.9 13.7-2 20.5-3.5 40.8-8.8 82.8-29.6 111.6-58.4 21.9-21.9 39.6-53.9 45-88.4 5.2-34.5-2.4-72.3-31.9-101.71-23.8-23.93-53.1-33.44-81.9-33.29zm.1 19.29c24.3-.28 47.9 7.49 68.2 27.71 25 24.9 31 55.2 26.3 85-4.6 29.9-20.7 58.8-39.5 77.6-25.4 25.4-64.7 45.2-102 53.2-37.2 8.2-71.2 3.8-87.8-12.9-16.5-16.5-20.9-50.4-12.8-87.7 8.1-37.2 27.8-76.6 53.3-101.94 18.7-18.78 47.7-34.84 77.6-39.55 5.5-.88 11.2-1.36 16.7-1.42zm-166 214.81c3.7 11.3 9.3 21.5 17.5 29.5 8.1 8.2 18.2 14 29.5 17.6l-63 16zm-50.3 83.6L50 448.2l-5.25-5.1-13.71 13.7L55.41 481l13.7-13.6-5.41-5.4 99.5-99.6zm211 45.1c-19.5 0-35.6 16-35.6 35.5s16.1 35.5 35.6 35.5c19.4 0 35.5-16 35.5-35.5s-16.1-35.5-35.5-35.5z"
                  ></path>
                </svg>
                <p class="MuiTypography-root MuiTypography-body1 css-17kmaxw">
                  Tennis
                </p>
              </div>
            </div>
            <div class="MuiBox-root css-1tv6lwp">34</div>
          </div>
        </div>
        <div class="MuiBox-root css-sfjdjv">
          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm">
            <div class="MuiBox-root css-nu8l0g">
              <div class="MuiStack-root css-2p8vrk">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M290.2 49.04c-15.7.1-32.3 13.83-38 35.81-6.5 25.15 4.7 47.85 22.1 52.35 17.4 4.5 38.2-9.9 44.7-35 6.5-25.16-4.6-47.82-22.1-52.33-2.2-.56-4.4-.84-6.7-.83zM89.04 68.3L77.5 87.31c32.4 15.99 63.1 33.49 96.4 46.49 9.5-3.8 18.8-7.8 28-12-40.2-15.4-76.7-33.69-112.86-53.5zm148.06 56.1c-47.8 25.4-97.9 41.6-153.64 61.1l8.08 16.4c51.96-16.1 111.26-32.9 161.16-56-6.9-5.5-12.1-12.9-15.6-21.5zm30.3 34.8c-22.5 10.8-46.8 20.2-71.4 28.7-20.3 45.6-27.7 94.9-36.8 140.1l-2.1 10.5-101.02-39.4-16.03 25.4 130.25 60.7c1-1.4 1.7-2.5 2.9-4.5 3.9-6.7 9.2-16.6 15.2-28.6 11.9-23.8 26.7-55.9 40.4-88.1 13.8-32.1 26.4-64.4 33.9-88.4 1.9-6.1 3.5-11.6 4.7-16.4zm-31.9 134.6c-5.5 12.5-11.1 24.8-16.5 36.3 25 37.4 57 79 94.9 109.2l23.3-17.6c-35.8-39.7-72.9-84.3-101.7-127.9zM423.9 367a48 48 0 0 0-48 48 48 48 0 0 0 48 48 48 48 0 0 0 48-48 48 48 0 0 0-48-48z"
                  ></path>
                </svg>
                <p class="MuiTypography-root MuiTypography-body1 css-17kmaxw">
                  Soccer
                </p>
              </div>
            </div>
            <div class="MuiBox-root css-1tv6lwp">28</div>
          </div>
        </div>
      </div>
      <div
        class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root css-136bwoc"
      >
        <table class="MuiTable-root css-rxit2l">
          <thead class="MuiTableHead-root css-disv23">
            <tr class="MuiTableRow-root MuiTableRow-head css-e03dsj">
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="60px"
              >
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-17l795x"
                  aria-hidden="true"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M365.6 31c-6.6 0-13.2.6-19.7 1.59-34.5 5.44-66.5 23.14-88.3 44.96-28.8 28.85-49.6 70.85-58.4 111.65-1.6 6.7-2.6 13.6-3.5 20.4L162.2 334l15.8 15.8 124.3-33.5c6.8-.9 13.7-2 20.5-3.5 40.8-8.8 82.8-29.6 111.6-58.4 21.9-21.9 39.6-53.9 45-88.4 5.2-34.5-2.4-72.3-31.9-101.71-23.8-23.93-53.1-33.44-81.9-33.29zm.1 19.29c24.3-.28 47.9 7.49 68.2 27.71 25 24.9 31 55.2 26.3 85-4.6 29.9-20.7 58.8-39.5 77.6-25.4 25.4-64.7 45.2-102 53.2-37.2 8.2-71.2 3.8-87.8-12.9-16.5-16.5-20.9-50.4-12.8-87.7 8.1-37.2 27.8-76.6 53.3-101.94 18.7-18.78 47.7-34.84 77.6-39.55 5.5-.88 11.2-1.36 16.7-1.42zm-166 214.81c3.7 11.3 9.3 21.5 17.5 29.5 8.1 8.2 18.2 14 29.5 17.6l-63 16zm-50.3 83.6L50 448.2l-5.25-5.1-13.71 13.7L55.41 481l13.7-13.6-5.41-5.4 99.5-99.6zm211 45.1c-19.5 0-35.6 16-35.6 35.5s16.1 35.5 35.6 35.5c19.4 0 35.5-16 35.5-35.5s-16.1-35.5-35.5-35.5z"
                  ></path>
                </svg>
              </th>
              <th
                class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                scope="col"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-544u3x"
                >
                  tennis
                </h6>
              </th>
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="90px"
              >
                Matched
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                1
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                X
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                2
              </th>
            </tr>
          </thead>
          <tbody class="MuiTableBody-root css-12dfzmm">
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    17:30
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Car Alcaraz v Ma Lajal
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  649093.12
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.01
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      77K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.02
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      50K
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      70
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      7
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      90
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      1
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:56
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Daria Kasatkina v Shuai Zhang
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  142042.4
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.01
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      8K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.02
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      3K
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      50
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      70
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      110
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      75
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:50
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Gael Monfils v Adria Mannarino
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  350275.73
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.4
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      313
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.42
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      515
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.4
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      22
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.5
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      125
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:49
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Marta Kostyuk v Rebec Sramkova
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  192566.71
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      0
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      0
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.01
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      4K
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      110
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      5
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      990
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      0
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:48
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Nao Hibino v Elise Mertens
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  100959.22
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.56
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      43
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.58
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      93
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.74
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      54
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.8
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      24
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:47
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Jasmin Paolini v Sara Sorribes Tormo
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  222635.74
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.14
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      1K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.15
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      7
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      7.6
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      8
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      8.2
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      175
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:46
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Aran Rus v Yue Yuan
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  88206.68
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.42
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      167
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.45
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      27
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.2
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      36
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.4
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      103
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:45
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Matteo Berrettini v Marton Fucsovics
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  249265.26
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.01
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      13K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.02
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      1K
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      55
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      7
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      110
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      122
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:45
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Stan Wawrinka v Char Broom
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  216298.25
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.78
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      111
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.84
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      118
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.2
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      99
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.3
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      887
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:45
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Seba Baez v Bra Nakashima
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  195502.85
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      26
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      111
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      36
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      136
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.03
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      5K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.04
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      3K
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    16:44
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Dani Altmaier v Art Fery
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  85375.64
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.76
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      28
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.15
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      99
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.47
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      212
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.57
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      221
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    14:46
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Pavel Kotov v Jorda Thompson
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  500997.38
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.1
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      72
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.2
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      864
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.46
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      1K
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.47
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      151
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    14:46
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Matte Arnaldi v Franc Tiafoe
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  467754.64
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.25
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      436
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      3.3
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      21
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.44
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      48
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.45
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      978
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    13:08
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Mats Rosenkranz v Tom Gentzsch
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  30701.89
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.65
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      3
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.68
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      101
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.48
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      8
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      2.54
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      2
                    </p>
                  </div>
                </div>
              </td>
            </tr>
            <tr class="MuiTableRow-root css-1sa68b5">
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-ha2b3j"
              >
                <div class="MuiStack-root css-j7qwjs">
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    InPlay
                  </p>
                  <p class="MuiTypography-root MuiTypography-body1 css-1p8texr">
                    15:41
                  </p>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignLeft MuiTableCell-sizeMedium css-jup9dp"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-dn6vr0"
                >
                  Benedikt Henning v Daniel Cukierman
                </h6>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-dvxtzn">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-144pslc"
                    aria-hidden="true"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                  37830.75
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      17.5
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      9
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      26
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      2
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    ></p>
                  </div>
                </div>
              </td>
              <td
                class="MuiTableCell-root MuiTableCell-body MuiTableCell-alignCenter MuiTableCell-sizeMedium css-gy29k5"
              >
                <div class="MuiStack-root css-1xhj18k">
                  <div class="MuiStack-root css-5sk20m">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.04
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      52
                    </p>
                  </div>
                  <div class="MuiStack-root css-1kgyuku">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-15yvhi8"
                    >
                      1.06
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-i1yige"
                    >
                      152
                    </p>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div
        class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root css-136bwoc"
      >
        <table class="MuiTable-root css-rxit2l">
          <thead class="MuiTableHead-root css-disv23">
            <tr class="MuiTableRow-root MuiTableRow-head css-e03dsj">
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="60px"
              >
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-17l795x"
                  aria-hidden="true"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M433.2 17.99L159.8 291.4l60.8 60.8-6.3 6.3L494 78.79c0-24.32-36.5-60.8-60.8-60.8zM161.5 64.03a32 32 0 0 0-7.8.59c3.9 21.25 13.8 38.48 30.3 52.48a32 32 0 0 0 3.7-37.13 32 32 0 0 0-26.2-15.94zm-24.1 9.35a32 32 0 0 0-5.1 38.62 32 32 0 0 0 36 14.9c-15.5-14.7-25.9-32.79-30.9-53.52zm26.4 247.22C126.3 378.1 60.46 427.7 19.06 479.5c-4.82 5.9 7.6 18.2 13.53 13.5C84.32 451.6 133.9 385.7 191.4 348.2z"
                  ></path>
                </svg>
              </th>
              <th
                class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                scope="col"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-1sfdxp7"
                >
                  cricket
                </h6>
              </th>
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="90px"
              >
                Matched
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                1
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                X
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                2
              </th>
            </tr>
          </thead>
          <tbody class="MuiTableBody-root css-12dfzmm"></tbody>
        </table>
      </div>
      <div
        class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root css-136bwoc"
      >
        <table class="MuiTable-root css-rxit2l">
          <thead class="MuiTableHead-root css-disv23">
            <tr class="MuiTableRow-root MuiTableRow-head css-e03dsj">
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="60px"
              >
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-17l795x"
                  aria-hidden="true"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M433.2 17.99L159.8 291.4l60.8 60.8-6.3 6.3L494 78.79c0-24.32-36.5-60.8-60.8-60.8zM161.5 64.03a32 32 0 0 0-7.8.59c3.9 21.25 13.8 38.48 30.3 52.48a32 32 0 0 0 3.7-37.13 32 32 0 0 0-26.2-15.94zm-24.1 9.35a32 32 0 0 0-5.1 38.62 32 32 0 0 0 36 14.9c-15.5-14.7-25.9-32.79-30.9-53.52zm26.4 247.22C126.3 378.1 60.46 427.7 19.06 479.5c-4.82 5.9 7.6 18.2 13.53 13.5C84.32 451.6 133.9 385.7 191.4 348.2z"
                  ></path>
                </svg>
              </th>
              <th
                class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                scope="col"
              >
                <h6
                  class="MuiTypography-root MuiTypography-subtitle2 css-1sfdxp7"
                >
                  cricket
                </h6>
              </th>
              <th
                class="text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="90px"
              >
                Matched
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                1
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                X
              </th>
              <th
                class="hidden-head text-center MuiTableCell-root MuiTableCell-head MuiTableCell-alignCenter MuiTableCell-sizeMedium css-d861ke"
                scope="col"
                width="126px"
              >
                2
              </th>
            </tr>
          </thead>
          <tbody class="MuiTableBody-root css-12dfzmm"></tbody>
        </table>
      </div>  
    </div>
    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>
   <!-- script -->
    <?php include 'script.php';?>
    <script>
      const wrapper = document.querySelector(".wrapper");
      const carousel = document.querySelector(".carousel");
      const firstCardWidth = carousel.querySelector(".card").offsetWidth;
      const arrowBtns = document.querySelectorAll(".wrapper i");
      const carouselChildrens = [...carousel.children];

      let isDragging = false,
        isAutoPlay = true,
        startX,
        startScrollLeft,
        timeoutId;

      // Get the number of cards that can fit in the carousel at once
      let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

      // Insert copies of the last few cards to beginning of carousel for infinite scrolling
      carouselChildrens
        .slice(-cardPerView)
        .reverse()
        .forEach((card) => {
          carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
        });

      // Insert copies of the first few cards to end of carousel for infinite scrolling
      carouselChildrens.slice(0, cardPerView).forEach((card) => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
      });

      // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.offsetWidth;
      carousel.classList.remove("no-transition");

      // Add event listeners for the arrow buttons to scroll the carousel left and right
      arrowBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          carousel.scrollLeft +=
            btn.id == "left" ? -firstCardWidth : firstCardWidth;
        });
      });

      const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        // Records the initial cursor and scroll position of the carousel
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
      };

      const dragging = (e) => {
        if (!isDragging) return; // if isDragging is false return from here
        // Updates the scroll position of the carousel based on the cursor movement
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
      };

      const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
      };

      const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if (carousel.scrollLeft === 0) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
          carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if (
          Math.ceil(carousel.scrollLeft) ===
          carousel.scrollWidth - carousel.offsetWidth
        ) {
          carousel.classList.add("no-transition");
          carousel.scrollLeft = carousel.offsetWidth;
          carousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
        clearTimeout(timeoutId);
        if (!wrapper.matches(":hover")) autoPlay();
      };

      const autoPlay = () => {
        if (window.innerWidth < 200) return; // Return if window is smaller than 800 or isAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        timeoutId = setTimeout(
          () => (carousel.scrollLeft += firstCardWidth),
          2500
        );
      };
      autoPlay();

      carousel.addEventListener("mousedown", dragStart);
      carousel.addEventListener("mousemove", dragging);
      document.addEventListener("mouseup", dragStop);
      carousel.addEventListener("scroll", infiniteScroll);
      wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
      wrapper.addEventListener("mouseleave", autoPlay);
    </script>
    
  </body>
</html>
