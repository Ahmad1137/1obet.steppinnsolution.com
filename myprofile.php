<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
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
        height: 300px;
        background-color: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        border: 1px solid #ddd;
        overflow: auto;
      }

      .dropdown-item {
        padding: 8px 16px;
        cursor: pointer;
      }

      .dropdown-item:hover {
        background-color: #f1f1f1;
        color: rgb(0, 168, 38);
      }

      hr {
        margin: 0;
      }
    </style>
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
      }
      .triangle_left {
        margin-right: 1.375rem;
        background-color: rgb(0, 0, 0);
      }
    </style>
    <!-- myprofile page style -->
    <style>
      .css-11f9h8k {
        box-sizing: border-box;
        display: flex;
        flex-flow: wrap;
        margin-top: -0.25rem;
        width: calc(100% + 0.25rem);
        margin-left: -0.25rem;
      }
      .css-11f9h8k > .MuiGrid-item {
        padding-left: 0.25rem;
      }
      .css-11f9h8k > .MuiGrid-item {
        padding-top: 0.25rem;
      }
      @media (min-width: 900px) {
        .css-iol86l {
          flex-basis: 50%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 50%;
        }
      }
      .css-iol86l {
        box-sizing: border-box;
        margin: 0px;
        flex-direction: row;
        flex-basis: 100%;
        -webkit-box-flex: 0;
        flex-grow: 0;
        max-width: 100%;
      }
      @media (min-width: 600px) {
        .css-iol86l {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      @media (min-width: 900px) {
        .css-mmwtr0 {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      @media (min-width: 600px) {
        .css-mmwtr0 {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      .css-mmwtr0 {
        box-sizing: border-box;
        margin: 0px;
        flex-direction: row;
        flex-basis: 100%;
        -webkit-box-flex: 0;
        flex-grow: 0;
        max-width: 100%;
        gap: 1rem;
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-1sl9auj {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        border-radius: 6px;
        box-shadow: rgba(47, 43, 61, 0.1) 0px 4px 18px 0px;
        background-image: none;
        overflow: hidden;
      }
      .css-1neomnx:last-of-type {
        padding-bottom: 1.5rem;
      }
      .css-1neomnx:last-child {
        padding-bottom: 24px;
      }
      .css-1neomnx {
        padding: 1.5rem;
      }
      .css-tu93bp {
        margin: 1rem;
      }
      .css-bfqwkj {
        box-sizing: border-box;
        margin: 0px;
        flex-direction: row;
        flex-basis: 100%;
        -webkit-box-flex: 0;
        flex-grow: 0;
        max-width: 100%;
        gap: 1rem;
        display: flex;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }
      .css-c4sm9k {
        margin: 0px;
        line-height: 1.467;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        width: 100%;
      }
      .css-1wfq4zk {
        box-sizing: border-box;
        margin: 0px;
        flex-direction: row;
        flex-basis: 100%;
        -webkit-box-flex: 0;
        flex-grow: 0;
        max-width: 100%;
        gap: 1rem;
        display: flex;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        -webkit-box-align: center;
        align-items: center;
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
      .css-1ptqfwh {
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
        padding-right: 12px;
        background-color: rgba(0, 0, 0, 0.04);
      }
      .css-9u59n1 .MuiInputBase-root {
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        transition: border-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-color: transparent !important;
      }
      .css-9u59n1 .MuiInputBase-root.MuiInputBase-sizeSmall {
        border-radius: 6px;
      }
      .css-cdx47v {
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
        padding: 21px 0px 4px 12px;
      }
      .css-9u59n1 .MuiInputBase-input {
        color: rgb(0, 0, 0);
      }
      .css-9u59n1
        .MuiInputBase-input:not(textarea).MuiInputBase-inputSizeSmall {
        padding: 7.5px 13px;
      }
      .css-9u59n1
        .MuiInputBase-input.MuiInputBase-inputAdornedEnd:not(
          .MuiAutocomplete-input
        ) {
        padding-right: 0px;
      }
      .css-9u59n1 .MuiInputBase-root .MuiInputAdornment-root {
        margin-top: 0px !important;
      }
      .css-j4rwtm {
        display: flex;
        height: 0.01em;
        max-height: 2em;
        -webkit-box-align: center;
        align-items: center;
        white-space: nowrap;
        margin-left: 8px;
      }
      .css-kvzg63 {
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
        border: 0px;
        margin: 0px -12px 0px 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        color: inherit;
        text-align: center;
        flex: 0 0 auto;
        font-size: 1.40625rem;
        padding: 8px;
        border-radius: 50%;
        overflow: visible;
        transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
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
      .css-9u59n1 .MuiInputBase-input {
        color: rgb(0, 0, 0);
      }
      .css-9u59n1
        .MuiInputBase-input:not(textarea).MuiInputBase-inputSizeSmall {
        padding: 7.5px 13px;
      }
      .css-bu1mff {
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
        padding: 21px 12px 4px;
        background-color: rgba(0, 0, 0, 0.04);
      }
      .css-1a3pnqn {
        font: inherit;
        letter-spacing: inherit;
        color: currentcolor;
        border: 0px;
        box-sizing: content-box;
        background: none;
        height: auto;
        margin: 0px;
        -webkit-tap-highlight-color: transparent;
        display: block;
        min-width: 0px;
        width: 100%;
        animation-name: mui-auto-fill-cancel;
        animation-duration: 10ms;
        resize: none;
        padding: 0px;
      }
      .css-4e05le {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        outline: 0px;
        border: 0px;
        margin: 2.5rem 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        line-height: 1.2;
        font-size: 0.9375rem;
        letter-spacing: 0.43px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        border-radius: 6px;
        color: rgb(255, 255, 255);
        background-color: rgb(0, 168, 38);
        min-width: 50px;
        text-transform: none;
        transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          box-shadow 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          border-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,
          transform 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        box-shadow: rgba(47, 43, 61, 0.14) 0px 2px 6px 0px;
        padding: 0.625rem 1.25rem;
        width: 30%;
      }
      @media (min-width: 600px) {
        .css-1wfq4zk {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      @media (min-width: 900px) {
        .css-1wfq4zk {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      @media (min-width: 900px) {
        .css-bfqwkj {
          flex-basis: 100%;
          -webkit-box-flex: 0;
          flex-grow: 0;
          max-width: 100%;
        }
      }
      @media screen and (max-width: 670px) {
        .myprofile_details {
          display: block !important;
        }
      }
      .myprofile_details {
        position: relative;
        z-index: -1;
        margin-top: 6rem;
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

      <div class="d-flex myprofile_details">
        <div
          class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-iol86l"
        >
          <div
            class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation7 MuiCard-root css-1sl9auj"
          >
            <div class="MuiCardContent-root css-1neomnx">
              <div
                class="heigt_sport_book m-0 d-flex flex-row flex-grow-0 position-relative w-100"
              >
                <div
                  class="triangle_left d-flex pl-4 pr-4 align-items-center position-relative"
                >
                  <p class="text-white m-0 fw-normal module_text">
                    Edit Client - ahmad123
                  </p>
                </div>
                <div
                  class="triangle_right d-flex flex-grow-1 flex-shrink-1 position-relative align-items-center justify-content-end text-whit"
                ></div>
              </div>
              <div class="MuiBox-root css-tu93bp">
                <form novalidate="" autocomplete="off">
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-bfqwkj"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Username :
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      ahmad123
                    </p>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-bfqwkj"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Type :
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Bettor
                    </p>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-bfqwkj"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Currency :
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      PKR
                    </p>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Password :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedEnd css-1ptqfwh"
                      >
                        <input
                          aria-invalid="false"
                          id=":r2c:"
                          type="password"
                          class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputSizeSmall MuiInputBase-inputAdornedEnd css-cdx47v"
                          value=""
                          fdprocessedid="flv5v7"
                        />
                        <div
                          class="MuiInputAdornment-root MuiInputAdornment-positionEnd MuiInputAdornment-filled MuiInputAdornment-sizeSmall css-j4rwtm"
                        >
                          <button
                            class="MuiButtonBase-root MuiIconButton-root MuiIconButton-edgeEnd MuiIconButton-sizeMedium css-kvzg63"
                            tabindex="0"
                            type="button"
                            aria-label="toggle password visibility"
                            fdprocessedid="vennvm"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              aria-hidden="true"
                              role="img"
                              font-size="1.25rem"
                              class="iconify iconify--tabler"
                              width="1em"
                              height="1em"
                              viewBox="0 0 24 24"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                              >
                                <path
                                  d="m3 3l18 18M10.584 10.587a2 2 0 0 0 2.828 2.83"
                                ></path>
                                <path
                                  d="M9.363 5.365A9.466 9.466 0 0 1 12 5c4 0 7.333 2.333 10 7c-.778 1.361-1.612 2.524-2.503 3.488m-2.14 1.861C15.726 18.449 13.942 19 12 19c-4 0-7.333-2.333-10-7c1.369-2.395 2.913-4.175 4.632-5.341"
                                ></path>
                              </g>
                            </svg>
                            <span class="MuiTouchRipple-root css-w0pj6f"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Phone :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                      >
                        <input
                          aria-invalid="false"
                          id=":r2d:"
                          type="text"
                          class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputSizeSmall css-daa3ag"
                          value=""
                          fdprocessedid="dr94hh"
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Reference :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                      >
                        <input
                          aria-invalid="false"
                          id=":r2e:"
                          type="text"
                          class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputSizeSmall css-daa3ag"
                          value=""
                          fdprocessedid="f8px3"
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Note :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-multiline css-bu1mff"
                      >
                        <textarea
                          rows="2"
                          aria-invalid="false"
                          id=":r2f:"
                          class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputMultiline MuiInputBase-inputSizeSmall css-1a3pnqn"
                          style="height: 44px"
                        ></textarea
                        ><textarea
                          aria-hidden="true"
                          class="MuiInputBase-input MuiFilledInput-input MuiInputBase-inputMultiline MuiInputBase-inputSizeSmall css-1a3pnqn"
                          readonly=""
                          tabindex="-1"
                          style="
                            visibility: hidden;
                            position: absolute;
                            overflow: hidden;
                            height: 0px;
                            top: 0px;
                            left: 0px;
                            transform: translateZ(0px);
                            padding: 0px;
                            width: 165.75px;
                          "
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      Commission :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                      >
                        <input
                          aria-invalid="false"
                          disabled=""
                          id=":r2g:"
                          type="text"
                          class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                          value="2.00"
                          fdprocessedid="jg0xvv"
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1wfq4zk"
                  >
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-c4sm9k"
                    >
                      UserDomain :
                    </p>
                    <div
                      class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                    >
                      <div
                        class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                      >
                        <input
                          aria-invalid="false"
                          disabled=""
                          id=":r2h:"
                          type="text"
                          class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                          value="1 ( 1obet.com ) "
                          fdprocessedid="xaoy4g"
                        />
                      </div>
                    </div>
                  </div>
                  <button
                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-fullWidth MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-fullWidth css-4e05le"
                    tabindex="0"
                    type="submit"
                    fdprocessedid="q9xf1v"
                  >
                    Update<span class="MuiTouchRipple-root css-w0pj6f"></span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div
          class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 css-iol86l"
        >
          <div
            class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation7 MuiCard-root css-1sl9auj"
          >
            <div class="MuiCardContent-root css-1neomnx">
              <div
                class="heigt_sport_book m-0 d-flex flex-row flex-grow-0 position-relative w-100"
              >
                <div
                  class="triangle_left d-flex pl-4 pr-4 align-items-center position-relative"
                >
                  <p class="text-white m-0 fw-normal module_text">
                    Max Bet Sizes
                  </p>
                </div>
                <div
                  class="triangle_right d-flex flex-grow-1 flex-shrink-1 position-relative align-items-center justify-content-end text-whit"
                ></div>
              </div>
              <div class="MuiBox-root css-tu93bp">
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Fancy :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2i:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="200000"
                        fdprocessedid="1zcg7v"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Cricket :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2j:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="2000000"
                        fdprocessedid="tlb44i"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Soccer :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2k:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="250000"
                        fdprocessedid="e2zl1n"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>GreyHound :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2l:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="50000"
                        fdprocessedid="s2zqr"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Even Odd :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2m:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="100000"
                        fdprocessedid="fwnh1p"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Horse races :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2n:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="250000"
                        fdprocessedid="rmz5pl"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Figure :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2o:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="50000"
                        fdprocessedid="3128vu"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Chotta Bara :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2p:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="100000"
                        fdprocessedid="c7twcbc"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>casino :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2q:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="50000"
                        fdprocessedid="w8ymfk"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Tied match :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2r:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="25000"
                        fdprocessedid="ju84l4"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>Tennis :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2s:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="250000"
                        fdprocessedid="jac6cy"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>AsianBet :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2t:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="10000"
                        fdprocessedid="wyf81p"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-mmwtr0"
                >
                  <p class="MuiTypography-root MuiTypography-body1 css-c4sm9k">
                    <b style="color: red">* </b>bookMaker :
                  </p>
                  <div
                    class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-9u59n1"
                  >
                    <div
                      class="MuiInputBase-root MuiFilledInput-root MuiFilledInput-underline MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-sizeSmall css-16y9rx3"
                    >
                      <input
                        aria-invalid="false"
                        disabled=""
                        id=":r2u:"
                        type="text"
                        class="MuiInputBase-input MuiFilledInput-input Mui-disabled MuiInputBase-inputSizeSmall css-daa3ag"
                        value="500000"
                        fdprocessedid="ngmm2c"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>

    <!-- script -->
     <?php include 'script.php' ;?>
  </body>
</html>
