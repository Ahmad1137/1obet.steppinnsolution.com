<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>statement</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Include Flatpickr CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />

    <!-- Include Flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script
      src="https://kit.fontawesome.com/69c89fc43e.js"
      crossorigin="anonymous"
    ></script>
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
        margin-bottom: 0.2rem;
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
      .matches-sidebar {
        position: fixed;
        top: 0;
        left: -260px; /* Initially hidden */
        width: 260px;
        height: 100%;
        background: black;
        color: white;
        padding-left: 10px;
        transition: all 0.5s ease;
        overflow-y: auto; /* Add scrolling */
        z-index: 1000;
      }

      .matches-sidebar.open {
        left: 0;
      }

      .matches-sidebar ul li a {
        display: flex;
        align-items: center;
        height: 100%;
        width: 100%;
        line-height: 1.467;
        font-size: 13px;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s ease;
        padding-left: 0px;
        border-radius: 10px;
      }

      .matches-sidebar ul li a:hover {
        text-decoration: none;
        background-color: #000;
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
      .close-toggle {
        cursor: pointer;

        margin-left: auto; /* Push to the right */
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
      }

      @media screen and (max-width: 690px) {
        .content {
          padding-left: 0 !important;
        }
        .timefromto {
          flex-flow: column !important;
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
        .css-cr5cwv {
          display: block !important;
        }
        .css-9u59n1 {
          width: 50% !important;
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
    <!-- green patti style -->

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
        border-top: 42px solid rgb(0, 0, 0);
        content: "";
        left: 100%;
        position: absolute;
        height: 42px;
      }
      .triangle_right::before {
        border-bottom: 42px solid rgb(0, 168, 38);
        border-left: 20px solid rgba(0, 0, 0, 0);
        content: "";
        position: absolute;
        right: 100%;
        height: 42px;
      }
      .triangle_right {
        background-color: rgb(0, 168, 38);
      }
      .heigt_sport_book {
        height: 42px;
      
      }
      .heigt_sport_book1
      {
        height: 42px;
        margin-top: 7rem !important;
      }
      .triangle_left {
        margin-right: 1.375rem;
        background-color: rgb(0, 0, 0);
      }
    </style>
    <style>
      .datetime_input {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        border-radius: 6px;
        box-shadow: rgba(47, 43, 61, 0.1) 0px 4px 18px 0px;
      }
      .css-1nj3saj {
        padding: 0.75rem;
      }
      .gap {
        gap: 1.25rem;
      }

      .MuiInputBase-input:not(textarea).MuiInputBase-inputSizeSmall {
        padding: 7.5px 13px;
      }
      .MuiInputBase-input {
        color: rgb(0, 0, 0);
      }
      .inputfields {
        font: inherit;
        letter-spacing: inherit;
        color: currentcolor;
        box-sizing: content-box;
        background: none;
        height: 1.4375em;
        -webkit-tap-highlight-color: transparent;
        display: block;
        min-width: 0px;
        animation-name: mui-auto-fill-cancel;
        animation-duration: 10ms;
        padding: 21px 12px 4px;
      }
      .fromto_input {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        transition: border-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-color: transparent !important;
        line-height: 1.4375em;
        font-size: 0.9375rem;
        color: rgb(0, 0, 0);
        box-sizing: border-box;
        cursor: text;

        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        transition: background-color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
        background-color: rgba(0, 0, 0, 0.04);
      }

      .submit-btn {
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        outline: 0px;
        user-select: none;
        appearance: none;
        letter-spacing: 0.43px;
        font-weight: 500;
        background-color: rgb(0, 168, 38);
        min-width: 50px;
        text-transform: none;
        line-height: 1.231;
        border-radius: 4px;
        box-shadow: rgba(47, 43, 61, 0.14) 0px 2px 6px 0px;
        padding: 0.375rem 0.875rem;
        width: auto;
      }
      .submit-btn:focus {
        outline: 0;
        box-shadow: none;
      }
    </style>
    <style>
      @media (min-width: 900px) {
        .marketbtn_boxsize {
          flex-basis: 69%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      .marketbtn_boxsize {
        box-sizing: border-box;
        display: block !important;
      }

      .marketbtn {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        background-color: transparent;
        outline: 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        letter-spacing: 0.43px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        border: 1px solid rgb(0, 168, 38);
        color: rgb(0, 168, 38);
        min-width: 60px;
        text-transform: none;
        transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          box-shadow 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          border-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        line-height: 1.231;
        border-radius: 4px;
        font-size: 0.8125rem;
        padding: 0.3125rem 0.8125rem;
        margin: 5px 0.25rem;
      }
      .marketbtn {
        color: rgb(255, 255, 255);
        background-color: rgb(0, 168, 38);
        border: 0px;
        outline: none;
      }
      .marketbtn:hover {
        box-shadow: rgba(47, 43, 61, 0.14) 0px 2px 6px 0px;
      }
      .css-k6senv {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        gap: 0.5rem;
      }
      .css-qzylx {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: rgb(0, 0, 0);
      }

      .css-1iyurmi:not(.MuiInputBase-sizeSmall) {
        border-radius: 8px;
      }
      .css-1iyurmi {
        line-height: 1.4375em;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        box-sizing: border-box;
        cursor: text;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        overflow: hidden;
        position: relative;
        border-radius: 6px;
        height: 40px;
        width: 80px;
      }
      .css-1ogifso.css-1ogifso.css-1ogifso {
        padding-right: 32px;
      }
      .css-1ogifso.MuiSelect-select {
        min-width: 6rem !important;
      }
      .css-1ogifso.MuiSelect-select {
        height: auto;
        min-height: 1.4375em;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
      }
      .css-1ogifso {
        appearance: none;
        user-select: none;
        border-radius: 6px;
        cursor: pointer;
        font: inherit;
        letter-spacing: inherit;
        color: currentcolor;
        border: 0px;
        box-sizing: content-box;
        background: none;
        height: 1.4375em;
        margin: 0px;
        -webkit-tap-highlight-color: transparent;
        display: block;
        min-width: 0px;
        width: 100%;
        animation-name: mui-auto-fill-cancel;
        animation-duration: 10ms;
        padding: 16.5px 14px;
      }
      .css-1cmd6q3 {
        user-select: none;
        width: 1em;
        height: 1em;
        display: inline-block;
        fill: currentcolor;
        flex-shrink: 0;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        font-size: 1.40625rem;
        position: absolute;
        right: 7px;
        top: calc(50% - 0.5em);
        pointer-events: none;
      }
      .css-1iyurmi .MuiOutlinedInput-notchedOutline {
        border-color: rgba(0, 0, 0, 0.2);
      }

      .css-igs3ac {
        text-align: left;
        position: absolute;
        inset: -5px 0px 0px;
        margin: 0px;
        padding: 0px 8px;
        pointer-events: none;
        border-radius: inherit;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        min-width: 0%;
        border-color: rgba(0, 0, 0, 0.23);
      }
      .css-ihdtdm {
        float: unset;
        width: auto;
        overflow: hidden;
        padding: 0px;
        line-height: 11px;
        transition: width 150ms cubic-bezier(0, 0, 0.2, 1) 0ms;
      }
      .css-qzylx {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: rgb(0, 0, 0);
      }
      .css-1bj8auj {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-tn9xkt {
        margin: 0px;
        line-height: 1.467;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
      }
      .css-9u59n1 {
        display: inline-flex;
        flex-direction: column;
        position: relative;
        min-width: 0px;
        padding: 0px;
        margin: 0px;
        border: 0px;
        vertical-align: top;
        width: 100%;
        align-items: flex-start;
      }
      .css-9u59n1 .MuiInputBase-root.MuiInputBase-sizeSmall {
        border-radius: 6px;
      }
      .css-9u59n1 .MuiInputBase-root {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        transition: border-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-color: transparent !important;
      }
      .css-16y9rx3 {
        line-height: 1.4375em;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        box-sizing: border-box;
        cursor: text;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        overflow: hidden;
        position: relative;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        transition: background-color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
        background-color: rgba(0, 0, 0, 0.04);
      }
      .css-daa3ag {
        font: inherit;
        letter-spacing: inherit;
        color: currentcolor;
        border: 0px;
        box-sizing: content-box;
        background: none;
        height: 1.4375em;
        margin: 0px;
        -webkit-tap-highlight-color: transparent;
        display: block;
        min-width: 0px;
        width: 100%;
        animation-name: mui-auto-fill-cancel;
        animation-duration: 10ms;
        padding: 21px 12px 4px;
      }
      .css-9u59n1
        .MuiInputBase-input:not(textarea).MuiInputBase-inputSizeSmall {
        padding: 7.5px 13px;
      }
      .css-cr5cwv {
        box-sizing: border-box;
        flex-flow: nowrap;
        width: 100%;
        padding-top: 1rem;
        padding-bottom: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .enteriesinput:focus {
        outline: none;
      }
    </style>
    <style>
      /* Add your CSS here */
      /* Custom Dropdown Styles */
      .dropdown-container {
        font-family: Arial, sans-serif;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-select {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;

        border-radius: 4px;
        cursor: pointer;
      }

      .dropdown-icon {
        width: 24px;
        height: 24px;
      }

      .dropdown-list {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 5px;
        list-style-type: none;
        padding: 0;
        width: 100%;
        z-index: 1;
      }

      .dropdown-list .dropdown-item {
        padding:6px;
        cursor: pointer;
      }

      .dropdown-list .dropdown-item:hover {
        background-color: #f1f1f1;
      }

      .dropdown-list .dropdown-item[aria-selected="true"] {
        background-color: rgb(0, 168, 38);
        font-weight: bold;
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
      <!-- header -->
       <?php include 'header.php';?>

      <div
        class="heigt_sport_book1 m-0 d-flex flex-row flex-grow-0 position-relative w-100"
      >
        <div
          class="triangle_left d-flex pl-3 pr-5 align-items-center position-relative"
        >
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            version="1.1"
            viewBox="0 0 17 17"
            height="1em"
            width="1em"
            xmlns="http://www.w3.org/2000/svg"
            style="
              height: 24px;
              width: 28px;
              border-radius: 50%;
              margin-right: 3px;
              background: #00a826;
            "
          >
            <g></g>
            <path
              d="M17 2v1h-17v-1h17zM0 7h17v-1h-17v1zM0 11h17v-1h-17v1zM0 15h17v-1h-17v1z"
            ></path>
          </svg>
          <p class="text-white m-0 fw-normal module_text">Report Filter</p>
        </div>
        <div
          class="triangle_right d-flex flex-grow-1 flex-shrink-1 position-relative align-items-center justify-content-end text-whit"
        ></div>
      </div>
      <div class="datetime_input w-100 bg-none overflow-hidden mb-2">
        <div class="p-0">
          <div class="p-3">
            <div class="timefromto d-flex flex-row gap align-items-center">
              <div class="d-inline-block p-0 border-0">
                <div class="position-relative d-inline-block w-100">
                  <span
                    role="alert"
                    aria-live="polite"
                    class="position-absolute border-0 h-1 m-0 overflow-hidden p-0 w-1"
                  ></span>
                  <div
                    class="d-inline-flex flex-column position-relative min-width-0 p-0 m-0 border-0 align-items-start align-self-start"
                  >
                    <div
                      class="fromto_input d-inline-flex align-items-center overflow-hidden position-relative fw-normal"
                    >
                      <input
                        id="fromdatetime"
                        name="datetime"
                        type="text"
                        class="MuiInputBase-input MuiInputBase-inputSizeSmall inputfields border-0 m-0 w-0"
                        value="07/05/2024 11:00 AM"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-inline-block p-0 border-0">
                <div class="position-relative d-inline-block w-100">
                  <span
                    role="alert"
                    aria-live="polite"
                    class="position-absolute border-0 h-1 m-0 overflow-hidden p-0 w-1"
                  ></span>
                  <div
                    class="d-inline-flex flex-column position-relative min-width-0 p-0 m-0 border-0 align-items-start align-self-start"
                  >
                    <div
                      class="fromto_input d-inline-flex align-items-center overflow-hidden position-relative fw-normal"
                    >
                      <input
                        id="tomdatetime"
                        name="datetime"
                        type="text"
                        class="MuiInputBase-input MuiInputBase-inputSizeSmall inputfields m-0 border-0 w-0"
                        value="07/05/2024 11:00 AM"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <button
                class="submit-btn fs-4 border-0 text-white d-inline-flex align-items-center justify-content-center position-relative mx-2 cursor-pointer align-middle text-decoration-none"
                tabindex="0"
                type="submit"
              >
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="heigt_sport_book mb-5 m-0 d-flex flex-row flex-grow-0 position-relative w-100"
      >
        <div
          class="triangle_left d-flex pl-3 pr-5 align-items-center position-relative"
        >
          <p class="text-white m-0 fw-normal module_text">
            Sports ProfitLoss (ahmad123)
          </p>
        </div>
        <div
          class="triangle_right d-flex flex-grow-1 flex-shrink-1 position-relative align-items-center justify-content-end text-whit"
        ></div>
      </div>
      <!-- <div class="css-cr5cwv">
        <div class="dropdown-container d-flex ml-3 css-k6senv">
          <h6 class="css-qzylx">Show</h6>
          <div class="dropdown">
            <div
              class="dropdown-select MuiInputBase-root css-1iyurmi"
              tabindex="0"
            >
              <span class="selected-value ml-1">10</span>
              <svg
                style="background: #00a826"
                class="css-1cmd6q3"
                focusable="false"
                aria-hidden="true"
                viewBox="0 0 24 24"
                data-testid="ArrowDropDownIcon"
              >
                <path d="M7 10l5 5 5-5z"></path>
              </svg>
              <fieldset
                aria-hidden="true"
                class="MuiOutlinedInput-notchedOutline css-igs3ac"
              >
                <legend class="css-ihdtdm">
                  <span class="notranslate">​</span>
                </legend>
              </fieldset>
            </div>
            <ul class="dropdown-list" role="listbox" tabindex="-1">
              <li
                class="dropdown-item"
                tabindex="-1"
                role="option"
                data-value="10"
              >
                10
              </li>
              <li
                class="dropdown-item"
                tabindex="-1"
                role="option"
                data-value="100"
              >
                100
              </li>
              <li
                class="dropdown-item"
                tabindex="-1"
                role="option"
                data-value="250"
              >
                250
              </li>
              <li
                class="dropdown-item"
                tabindex="-1"
                role="option"
                data-value="500"
              >
                500
              </li>
              <li
                class="dropdown-item"
                tabindex="-1"
                role="option"
                data-value="1000"
              >
                1000
              </li>
            </ul>
          </div>
          <h6 class="css-qzylx">Entries</h6>
        </div>
        <div class="marketbtn_boxsize m-0 d-flex flex-row">
          <div
            class="marketbtns_shadow bg-white text-black rounded-2 bg-none overflow-hidden"
          >
            <div>
              <button class="marketbtn" tabindex="0" type="button">
                Print
              </button>
              <button class="marketbtn" tabindex="0" type="button">
                Excel
              </button>
              <button class="marketbtn" tabindex="0" type="button">PDF</button>
            </div>
          </div>
        </div>
        <div class="css-1bj8auj">
          <p class="MuiTypography-body1 css-tn9xkt">Search</p>
          <div
            class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
          >
            <div
              class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
            >
              <input
                aria-invalid="false"
                id=":r2:"
                type="text"
                class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputSizeSmall css-daa3ag"
                value=""
                fdprocessedid="5abpg"
              />
            </div>
          </div>
        </div>
      </div> -->
    </div>

    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>
    
    <!-- script -->
     <?php include 'script.php';?>
    <script>
      flatpickr("#fromdatetime", {
        enableTime: true, // Enables time selection
        dateFormat: "m/d/y h:i K", // Date format
        time_24hr: false, // Use 12-hour time format
        minDate: "today", // Minimum selectable date is today
        // Other options as needed
      });
      flatpickr("#tomdatetime", {
        enableTime: true, // Enables time selection
        dateFormat: "m/d/y h:i K", // Date format
        time_24hr: false, // Use 12-hour time format
        minDate: "today", // Minimum selectable date is today
        // Other options as needed
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const dropdownSelect = document.querySelector(".dropdown-select");
        const dropdownList = document.querySelector(".dropdown-list");
        const dropdownItems = document.querySelectorAll(".dropdown-item");
        const selectedValue = document.querySelector(".selected-value");

        dropdownSelect.addEventListener("click", function () {
          dropdownList.style.display =
            dropdownList.style.display === "none" || !dropdownList.style.display
              ? "block"
              : "none";
        });

        dropdownItems.forEach((item) => {
          item.addEventListener("click", function () {
            selectedValue.innerText = item.innerText;
            dropdownItems.forEach((i) =>
              i.setAttribute("aria-selected", "false")
            );
            item.setAttribute("aria-selected", "true");
            dropdownList.style.display = "none";
          });
        });

        document.addEventListener("click", function (event) {
          if (!dropdownSelect.contains(event.target)) {
            dropdownList.style.display = "none";
          }
        });
      });
    </script>
   
  </body>
</html>
