<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Horce Race</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
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
    <style>
      .css-yhsfmz > :not(style) + :not(style) {
        margin: 0.25rem 0px 0px;
      }
      .css-jnr44o {
        display: flex;
        flex-direction: column;
        margin-top: 0.25rem;
      }
      .css-9jay18 {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
      }
      .css-yhsfmz {
        display: flex;
        flex-direction: column;
      }
      .css-2p8vrk {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-g6etzp {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.125rem;
        background: rgb(0, 0, 0);
      }
      .css-iz2ltj {
        height: 14px;
        width: 14px;
      }
      .css-g6etzp > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.25rem;
      }
      .css-tn9bsb {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: white;
      }
      .css-2p8vrk > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.25rem;
      }
      .css-19hxgaf {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.125rem;
        background: rgb(0, 0, 0);
        cursor: pointer;
      }
      .css-het29j {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        -webkit-box-pack: center;
        justify-content: center;
        height: 50px;
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
      .css-xuwo8i {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: red;
        font-size: 12px;
        font-weight: 700;
      }
      .css-yhsfmz > :not(style) + :not(style) {
        margin: 0.25rem 0px 0px;
      }
      .css-het29j {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        -webkit-box-pack: center;
        justify-content: center;
        height: 50px;
      }
      .css-8dztdt {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: end;
        justify-content: flex-end;
      }
      .css-1todn3t {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: rgb(255, 255, 255);
        padding: 0.125rem 0.5rem;
        width: 195px;
        background: rgb(0, 0, 0);
        text-align: right;
      }
      .css-8dztdt > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.25rem;
      }
      .css-f2ku00 {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: rgb(255, 255, 255);
        padding: 0.125rem 0.5rem;
        width: 195px;
        background: rgb(0, 0, 0);
      }
      .css-y0gi4w {
        display: flex;
        flex-direction: row-reverse;
        width: 195px;
        cursor: pointer;
        height: 50px;
      }
      .css-1y0llhg {
        display: flex;
        flex-direction: column;
        width: 63px;
        background: rgb(141, 210, 240);
        -webkit-box-pack: center;
        justify-content: center;
      }
      .css-o92rli {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(0, 0, 0);
        text-align: center;
        font-weight: 700;
        font-size: 20px;
      }
      .css-17uwr3x {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        text-align: center;
        font-size: 14px;
      }
      .css-y0gi4w > :not(style) + :not(style) {
        margin: 0px 0.25rem 0px 0px;
      }
      .css-1snnq6o {
        display: flex;
        flex-direction: row;
        width: 195px;
        cursor: pointer;
        height: 50px;
      }
      .css-aelu6g {
        display: flex;
        flex-direction: column;
        width: 63px;
        background: rgb(255, 175, 178);
        -webkit-box-pack: center;
        justify-content: center;
      }
      .css-1snnq6o > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.25rem;
      }
    </style>

    <style>
      @media screen and (min-width: 1000px) {
        .display_dekstop {
          display: none;
        }
      }
      @media screen and (max-width: 1000px) {
        .display_mobile {
          display: none;
        }
        .display_block {
          display: block !important;
        }
      }
      @media screen and (max-width: 768px) {
        .hide_at_561 {
          display: none;
        }
        .css-1todn3t {
          width: 63px;
          text-align: center;
        }
        .css-f2ku00 {
          width: 59px;
          text-align: center;
        }
        .css-1snnq6o {
          display: flex;
          flex-direction: row;
          width: 62px;
          cursor: pointer;
          height: 50px;
        }
        .css-y0gi4w {
          width: 60px;
        }
      }
      @media screen and (max-width: 250px) {
        .css-tn9xkt {
          font-size: xx-small !important;
          text-wrap: nowrap;
        }
      }
    </style>
    <style>
      .css-14afmp0 {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        background-image: none;
        width: 100%;
        overflow-x: auto;
        border-radius: 0px;
        box-shadow: none;
        border-top-color: rgba(0, 0, 0, 0.16);
      }
      .css-rxit2l {
        display: table;
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0px;
      }
      .css-12dfzmm {
        display: table-row-group;
      }
      .css-e03dsj {
        color: inherit;
        display: table-row;
        vertical-align: middle;
        outline: 0px;
      }
    </style>
    <style>
      .css-ddwuyb {
        display: flex;
        flex-direction: column;
        margin-top: 0.25rem;
      }
      .css-1s05omm {
        box-sizing: border-box;
        margin: 0px;
        flex-direction: row;
        height: 38px;
        display: flex;
        position: relative;
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
      .css-nu8l0g::after {
        border-right: 20px solid rgba(0, 0, 0, 0);
        border-top: 38px solid rgb(0, 0, 0);
        content: "";
        left: 100%;
        position: absolute;
      }
      .css-1tv6lwp {
        background-color: rgb(0, 168, 38);
        flex: 1 1 0%;
        position: relative;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: end;
        justify-content: flex-end;
        display: flex;
        padding-right: 1.25rem;
        color: rgb(255, 255, 255);
      }
      .css-1tv6lwp::before {
        border-bottom: 38px solid rgb(0, 168, 38);
        border-left: 20px solid rgba(0, 0, 0, 0);
        content: "";
        position: absolute;
        right: 100%;
      }
      .css-9laub6 {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: brown;
        font-style: italic;
        font-size: 14px;
      }
      .css-p58oka {
        display: flex;
        flex-flow: wrap;
      }
      .css-rhier5 {
        display: flex;
        flex-direction: column;
        border: 1px solid rgb(125, 130, 133);
        width: 20%;
        cursor: pointer;
      }
      .css-1mj48m5 {
        margin: 0px;
        line-height: 1.467;
        font-size: 0.9375rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(0, 0, 0);
        padding: 0.5rem;
        text-align: center;
        background-color: rgb(141, 210, 240);
      }
      .css-1uelkw {
        display: flex;
        flex-direction: column;
        margin-top: 1.25rem;
      }
      .css-17pexuo {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
      }
      .css-6jwo7t {
        display: flex;
        flex-direction: column;
        width: 30%;
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
      .css-13mkirs {
        display: flex;
        flex-direction: row;
        cursor: pointer;
      }
      .css-khshwk {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        font-size: 60px;
        font-weight: 700;
        text-align: center;
        width: 50%;
        background: rgb(255, 178, 175);
      }
      .css-6orp6a {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        width: 50%;
        background: rgb(141, 210, 240);
      }
      .css-up5l35 {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        font-size: 26px;
        text-align: center;
      }
      .css-1bv81gv {
        margin: 0.75rem 0px 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: brown;
        font-size: 12px;
      }
      .css-17pexuo > :not(style) + :not(style) {
        margin: 0px 0px 0px 1.25rem;
      }
      .css-1uelkw > :not(style) + :not(style) {
        margin: 1.25rem 0px 0px;
      }
      .css-1gb1rig {
        display: flex;
        flex-direction: column;
        cursor: pointer;
      }
      .css-1vouuc8 {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        font-size: 60px;
        font-weight: 700;
        text-align: center;
        background: rgb(255, 178, 175);
      }
      .css-1nvrxws {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        background: rgb(141, 210, 240);
      }
      .css-up5l35 {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        font-size: 26px;
        text-align: center;
      }
    </style>
    <style>
      .svg-icon {
        align-items: center;
        background-color: rgb(24, 25, 24);
        border-radius: 3px;
        display: flex;
        height: 48px;
        justify-content: center;
        width: 48px;
      }
      .timedeaitls {
        display: flex;
        flex-direction: column;
      }
      .sound_screen {
        font-size: 2rem;
      }
      .timedeaitls_wrapper {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
      }
      .mainheader {
        color: white;
        align-items: center;
        display: flex;
        min-width: 0;
        background-color: #00a826;
        width: 100%;
      }
      .font-size {
        font-size: larger;
      }
      .bg-black {
        background-color: black;
      }
      .image_size {
        height: 14px;
        width: 14px;
      }
      .rules-text {
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s linear;
        position: absolute;
        top: 0;
        left: 1rem; /* Adjust as needed for positioning */
      }
      .rules {
        position: relative;
        display: inline-block;
      }
      .rules:hover .rules-text {
        visibility: visible;
        opacity: 1;
        background-color: black;
        color: white;
      }
      .match_name {
        text-wrap: nowrap;
      }
      .custom-box-black {
        width: 63px;
        margin-top: 2px;
        color: rgb(18, 18, 18);
        background-color: rgb(141, 210, 240);
        margin-right: 0.1rem;
      }
      .custom-bg-color-black {
        background-color: rgb(141, 210, 240);
      }

      .custom-box-lay {
        width: 63px;
        margin-top: 2px;
        color: rgb(18, 18, 18);
        background-color: rgb(255, 175, 178);
        margin-right: 0.1rem;
      }
      td {
        vertical-align: top;
      }
      td > div {
        margin-bottom: 10px;
      }
      td p {
        margin: 0;
      }
      .match_bets_score {
        align-items: center;
        display: flex;
        gap: 6px;
        justify-content: center;
      }
      .match_bets_style {
        align-items: center;
        background-color: var(--titleBarLeftBg);
        color: #fff;
        display: flex;
        font-size: 12px;
        line-height: 16px;
        margin-right: 22px;
        padding: 0 10px;
        position: relative;
        background-color: black;
      }
      .match_bets_style_score_black {
        display: flex;
        flex-flow: row nowrap;
        font-family: Verdana;
        height: 38px;
        position: relative;
        width: 100%;
      }
      .match_bets_score_green {
        align-items: center;
        background-color: #00a826;
        color: #00143c;
        display: flex;
        flex: 1 1;
        justify-content: right;
        padding-right: 10px;
        position: relative;
        text-align: right;
      }
      .match_bets_style_score_black .match_bets_style::after {
        border-right: 20px solid #0000;
        border-top: 38px solid #000;
        content: "";
        height: 0;
        left: 100%;
        position: absolute;
        top: 0;
        width: 0;
      }
      .min-w-100 {
        min-width: 100%;
      }
      .table-layout-auto {
        table-layout: auto;
      }
      .ant_table_cell {
        background-color: #000;
        color: white;
        font-size: 14px;
        font-weight: 600;
        line-height: 17px;
      }

      .back_lay {
        padding-left: 6rem;
        padding-right: 6rem;
      }
    </style>
    <style>
      .css-1jtgica {
        display: flex;
        flex-direction: column;
        margin-top: 0.5rem;
        background: rgb(0, 0, 0);
        color: rgb(255, 255, 255);
        padding: 0.5rem;
      }
      .css-1ks4tg7 {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-j7qwjs {
        display: flex;
        flex-direction: column;
      }
      .css-1mgdvdd {
        display: flex;
        flex-direction: row;
      }
      .css-1gfpw9x {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(255, 255, 255);
        font-size: 14px;
        font-weight: 700;
      }
      .css-1mgdvdd > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.25rem;
      }
      .css-1xhj18k {
        display: flex;
        flex-direction: row;
      }
      .css-11h2uyk {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 400;
        color: rgb(255, 255, 255);
        font-size: 14px;
      }
      .css-vide34 {
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
      }
      .css-vide34 > :not(style) + :not(style) {
        margin: 0px 0px 0px 0.5rem;
      }

      .css-ypblli {
        display: flex;
        flex-direction: column;
        max-width: 30%;
      }
      .css-klloh0 {
        margin: 0px;
        line-height: 1.467;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        color: rgb(255, 215, 0);
        text-align: center;
        font-size: 21px;
        font-weight: 800;
      }
      .css-xnim3s {
        font-size: 13px;
        font-weight: 800;
        text-align: center;
      }
    </style>
    <!-- dashbaord style -->
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
        width:18px;
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
        .sound_screen {
          position: absolute;
          top: 20%;
          text-align: center;
          font-size: 1.8rem;
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
        .sound_screen {
          position: absolute;
          top: 30%;
          text-align: center;
          font-size: 1.8rem;
        }
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
        .css-tn9xkt {
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
      .margin_top {
        margin-top: 6rem;
      }
    </style>
  </head>
  <body>
    <!-- main boady content -->
    <div class="content m-3">
      <?php include 'header.php';?>

      <div class="margin_top d-flex display_block">
        <div class="w-100">
          <div class="mainheader p-2 mt-1">
            <div class="svg-icon mr-3">
              <svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 512 512"
                class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-110fo5k"
                aria-hidden="true"
                height="1em"
                width="1em"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M400 16c-21.335 9.73-58.244 17.34-73.086 48.232-22.36 1.948-72.753 10.673-122.22 40.25-58.098 34.74-116.017 97.417-131.776 213.702l-.48 3.537-2.774 2.25c-30.87 25.002-40.657 38.937-44.416 61.153-3.536 20.9-.72 51.46-.363 101.877H328.36c3.455-16.892 10.44-29.245 12.472-41.568 2.337-14.176.19-29.938-20.812-58.547-43.078-58.683-46.853-129.458-12.916-171.28-8.654-2.765-15.09-6.887-19.458-12.546-6.115-7.924-7.4-17.006-8.57-25.884l17.848-2.352c1.112 8.446 2.38 13.88 4.97 17.237 2.59 3.356 7.31 6.472 19.55 8.46l-.022.128.172-.17 5.998 9.424c19.957 31.358 42.84 51.292 73.332 54.44l6.51.672 1.367 6.4c2.74 12.828 8.626 19.095 15.116 22.238 6.49 3.143 14.225 2.944 20.47.205 9.316-4.086 14.518-11.35 16.7-22.712 2.122-11.05.546-25.834-5.137-42.106-33.538-38.248-44.475-87.277-63.903-128.772-6.055-9.947-12.448-18.518-20.385-24.856C376.808 55.126 386.456 34.852 400 16zM214.068 34.97C179.55 35.06 146.075 43.06 96 58.58c31.146 9.92 70.397 18.9 86.037 39.01 4.463-3.017 8.94-5.88 13.418-8.56 40.51-24.22 80.387-35.286 108.23-40.04-35.854-9.477-63.047-14.094-89.617-14.023zM157.16 96.712c-1.13-.01-2.265-.01-3.402.004-30.353.37-63.1 9.745-96.647 31.283 27.186 3.672 54.67 3.724 72.58 15.398 15.9-17.92 33.144-32.634 50.677-44.668-7.548-1.244-15.292-1.938-23.207-2.017zM368 128a13.214 13.215 0 0 1 13.213 13.215A13.214 13.215 0 0 1 368 154.432a13.214 13.215 0 0 1-13.213-13.217A13.214 13.215 0 0 1 368 128zm-238.906 16.068c-36.395 1.495-68.903 6.53-104.76 24.766 33.236 7.095 50.913 13.507 65.025 33.83 11.522-22.53 25.045-41.93 39.734-58.596zM74.518 201.46C53.53 201.65 36.614 213.14 16 224c27.854 0 46.067 3.862 58.71 12.055 4.33-11.652 9.16-22.615 14.41-32.924-5.12-1.19-9.963-1.71-14.602-1.67zm-.623 36.82c-17.933 5.845-35.452 7.15-54.23 22.284 17.62 4.638 34.79 9.596 41.398 22.034 3.496-15.77 7.814-30.523 12.832-44.32zm370.142 8.57c1.617-.035 3.222.044 4.783.187l-1.64 17.926c-3.928-.36-5.513.416-5.57.465-.058.048-1.035.656-.635 5.886l-17.95 1.372c-.638-8.35 1.297-16.207 6.955-20.997 4.245-3.593 9.206-4.735 14.057-4.84zM52.215 290.723c-10.352.13-23.76 5.646-34.656 12.334 12.173 6.83 12.357 23.472 8.938 37.668 7.3-9.105 16.855-18.323 29.158-28.48 1.016-7.043 2.19-13.9 3.506-20.585-2.082-.67-4.42-.97-6.947-.937z"
                ></path>
              </svg>
            </div>
            <div class="timedeaitls_wrapper">
              <div class="timedeaitls">
                <span>
                  <span>1 hour and 10 minutes ago | Jul 3 1:00 PM </span>
                </span>
                <div class="timedeaitls">
                  <h1 class="m-0 font-size">Compiegne (FRA) 9th Jul</h1>
                  <div>Matched: 118</div>
                </div>
              </div>
              <div>
                <h4>OPEN</h4>
                <div class="sound_screen d-flex justify-content-end">
                  <img
                    width="36"
                    height="36"
                    src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 10080 5040'%3e%3cdefs%3e%3cclipPath id='b'%3e%3cpath d='M0 0h6v3H0z'/%3e%3c/clipPath%3e%3cclipPath id='c'%3e%3cpath d='M0 0v1.5h6V3zm6 0H3v3H0z'/%3e%3c/clipPath%3e%3cpath id='a' d='m0-360 69.421 215.845 212.038-80.301L155.99-35.603l194.985 115.71-225.881 19.651 31.105 224.59L0 160l-156.198 164.349 31.105-224.59-225.881-19.651 194.986-115.711-125.471-188.853 212.038 80.301z'/%3e%3cpath id='e' d='M0-210 54.86-75.508l144.862 10.614L88.765 28.842l34.67 141.052L0 93.334l-123.435 76.56 34.67-141.052-110.957-93.736L-54.86-75.508z'/%3e%3cuse xlink:href='%23a' id='d' transform='scale(2.1)'/%3e%3c/defs%3e%3cpath fill='%23012169' d='M0 0h10080v5040H0z'/%3e%3cpath stroke='%23fff' stroke-width='.6' d='m0 0 6 3m0-3L0 3' clip-path='url(%23b)' transform='scale(840)'/%3e%3cpath stroke='%23e4002b' stroke-width='.4' d='m0 0 6 3m0-3L0 3' clip-path='url(%23c)' transform='scale(840)'/%3e%3cpath stroke='%23fff' stroke-width='840' d='M2520 0v2520M0 1260h5040'/%3e%3cpath stroke='%23e4002b' stroke-width='504' d='M2520 0v2520M0 1260h5040'/%3e%3cg fill='%23fff'%3e%3cuse xlink:href='%23d' x='2520' y='3780'/%3e%3cuse xlink:href='%23a' x='7560' y='4200'/%3e%3cuse xlink:href='%23a' x='6300' y='2205'/%3e%3cuse xlink:href='%23a' x='7560' y='840'/%3e%3cuse xlink:href='%23a' x='8680' y='1869'/%3e%3cuse xlink:href='%23e' x='8064' y='2730'/%3e%3c/g%3e%3c/svg%3e"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="bg-black display_dekstop">
            <iframe
              class="iframe"
              style="width: 100%; height: 100%"
              src="https://tele.bazigarprediction.website/score/index.php?match_id=33369838"
              title="YouTube video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen=""
            ></iframe>
          </div>
          <!-- match odds , fancies etc -->
          <div class="MuiStack-root css-jnr44o">
            <div class="MuiStack-root css-9jay18">
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-2p8vrk">
                  <div class="MuiStack-root css-g6etzp">
                    <img
                      class="MuiBox-root css-iz2ltj"
                      src="public/assets/icons/betterIcon/inPlayW.png"
                    />
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-tn9bsb"
                    >
                      1m6f Mdn
                    </h6>
                  </div>
                  <div class="MuiStack-root css-19hxgaf" aria-label="Rules">
                    <svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 24 24"
                      color="#fff"
                      height="18px"
                      width="18px"
                      xmlns="http://www.w3.org/2000/svg"
                      style="color: rgb(255, 255, 255)"
                    >
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    1.Skywalk
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    2.Got Yeah
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
              </div>
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-8dztdt">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-1todn3t"
                  >
                    Back
                  </h6>
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-f2ku00"
                  >
                    Lay
                  </h6>
                </div>
                <div class="MuiStack-root css-yhsfmz">
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.79
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.78
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          5.5K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.77
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          23.2K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.8
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.81
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          14.9K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.82
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.0K
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.24
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.3K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.22
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          11.6K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.2
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          1.8K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.26
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.8
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.28
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.2K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.3
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          22.1K
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="MuiStack-root css-jnr44o">
            <div class="MuiStack-root css-9jay18">
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-2p8vrk"></div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    3. Wiradjuri Queen
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    4. Ready To Wiggle
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
              </div>
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-yhsfmz">
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.79
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.78
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          5.5K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.77
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          23.2K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.8
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.81
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          14.9K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.82
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.0K
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.24
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.3K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.22
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          11.6K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.2
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          1.8K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.26
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.8
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.28
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.2K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.3
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          22.1K
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="MuiStack-root css-jnr44o m-0">
            <div class="MuiStack-root css-9jay18">
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-2p8vrk"></div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    5. Best Ever
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    6. Canya Supersonic
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
              </div>
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-yhsfmz">
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.79
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.78
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          5.5K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.77
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          23.2K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.8
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.81
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          14.9K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.82
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.0K
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.24
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.3K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.22
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          11.6K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.2
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          1.8K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.26
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.8
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.28
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.2K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.3
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          22.1K
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="MuiStack-root css-jnr44o m-0">
            <div class="MuiStack-root css-9jay18">
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-2p8vrk"></div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    7. Blazin Oaklee
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    8. Bronte Lee
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
              </div>
              <div class="MuiStack-root css-yhsfmz">
                <div class="MuiStack-root css-yhsfmz">
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.79
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.78
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          5.5K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.77
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          23.2K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.8
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.1K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.81
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          14.9K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          1.82
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.0K
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-y0gi4w">
                      <div class="MuiStack-root css-1y0llhg">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.24
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          6.3K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.22
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          11.6K
                        </p>
                      </div>
                      <div class="MuiStack-root css-1y0llhg hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.2
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          1.8K
                        </p>
                      </div>
                    </div>
                    <div class="MuiStack-root css-1snnq6o">
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.26
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          4.8
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.28
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          3.2K
                        </p>
                      </div>
                      <div class="MuiStack-root css-aelu6g hide_at_561">
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-o92rli"
                        >
                          2.3
                        </p>
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-17uwr3x"
                        >
                          22.1K
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-1 ml-1">
          <div class="bg-black display_mobile">
            <iframe
              class="iframe"
              style="width: 100%; height: 100%"
              src="https://tele.bazigarprediction.website/score/index.php?match_id=33369838"
              title="YouTube video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen=""
            ></iframe>
          </div>
          <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm">
            <div class="MuiBox-root css-nu8l0g">
              <p
                class="MuiTypography-root MuiTypography-body1 css-tn9xkt text-white"
              >
                Related Events
              </p>
            </div>
            <div class="MuiBox-root css-1tv6lwp"></div>
          </div>
          <div>
            <table class="table table-bordered custom-table">
              <tbody class="MuiTableBody-root css-12dfzmm">
                <tr class="MuiTableRow-root css-e03dsj">
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="padding: 5px 15px"
                  >
                    Today<br class="MuiBox-root css-0" />15:00
                  </td>
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="cursor: pointer; padding: 5px 15px"
                  >
                    Leicestershire v Middlesex
                  </td>
                </tr>
                <tr class="MuiTableRow-root css-e03dsj">
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="padding: 5px 15px"
                  >
                    Today<br class="MuiBox-root css-0" />15:00
                  </td>
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="cursor: pointer; padding: 5px 15px"
                  >
                    Derbyshire v Yorkshire
                  </td>
                </tr>
                <tr class="MuiTableRow-root css-e03dsj">
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="padding: 5px 15px"
                  >
                    Today<br class="MuiBox-root css-0" />15:00
                  </td>
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="cursor: pointer; padding: 5px 15px"
                  >
                    Northamptonshire v Sussex
                  </td>
                </tr>
                <tr class="MuiTableRow-root css-e03dsj">
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="padding: 5px 15px"
                  >
                    Today<br class="MuiBox-root css-0" />15:00
                  </td>
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="cursor: pointer; padding: 5px 15px"
                  >
                    Gloucestershire v Glamorgan
                  </td>
                </tr>
                <tr class="MuiTableRow-root css-e03dsj">
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="padding: 5px 15px"
                  >
                    Today<br class="MuiBox-root css-0" />15:00
                  </td>
                  <td
                    class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                    style="cursor: pointer; padding: 5px 15px"
                  >
                    Hampshire v Kent
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- sidebar -->
    <?php include 'sidebar.php';?>

    <!-- script -->
     <?php include 'script.php';?>
  </body>
</html>
