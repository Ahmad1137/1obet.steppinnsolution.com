<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cricket</title>
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
      .timedeaitls_wrapper {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
      }
      .sound_screen {
        font-size: 2rem;
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
      @media screen and (min-width: 690px) {
        .close-toggle {
          display: none;
        }
      }
      @media screen and (max-width: 442px) {
        .header {
          padding: 3px;
        }
        .sound_screen {
          position: absolute;
          top: 20%;
          text-align: center;
          font-size: 1.8rem;
        }
        .timedeaitls_wrapper {
          align-items: start;
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
      .margin-top {
        margin-top: 6rem;
      }
    </style>
  </head>
  <body>
    <!-- main boady content -->
    <div class="content m-3">
      <!-- header -->
       <?php include 'header.php'; ?>

      <div class="margin-top d-flex display_block">
        <div class="w-100">
          <div class="mainheader p-2 mt-1">
            <div class="svg-icon mr-3">
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
            </div>
            <div class="timedeaitls_wrapper">
              <div class="timedeaitls">
                <span
                  ><span>2 hours and 39 minutes ago | </span
                  ><span>Jun 24 9:30 AM</span></span
                >
                <div class="timedeaitls">
                  <h1 class="m-0 font-size">
                    Sri Lanka Women v West Indies Women
                  </h1>
                  <div>Matched: 3,915,808</div>
                </div>
              </div>
              <div>
                <h4>OPEN</h4>
                <div class="sound_screen">
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 16 16"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z"
                    ></path>
                  </svg>
                  <svg
                    stroke="currentColor"
                    fill="currentColor"
                    stroke-width="0"
                    viewBox="0 0 24 24"
                    height="1em"
                    width="1em"
                    xmlns="http://www.w3.org/2000/svg"
                    style="cursor: pointer"
                  >
                    <path
                      d="M20 6h-5.586l2.293-2.293-1.414-1.414L12 5.586 8.707 2.293 7.293 3.707 9.586 6H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zM4 19V8h16l.002 11H4z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="MuiStack-root css-1jtgica">
              <div class="MuiStack-root css-1ks4tg7">
                <div class="MuiStack-root css-j7qwjs">
                  <div class="MuiStack-root css-1mgdvdd">
                    <div class="MuiStack-root css-1mgdvdd">
                      <p
                        class="MuiTypography-root MuiTypography-body1 css-1gfpw9x"
                      >
                        GAM
                      </p>
                      <p
                        class="MuiTypography-root MuiTypography-body1 css-1gfpw9x"
                      >
                        115-2 (13.4)
                      </p>
                    </div>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-1gfpw9x"
                    >
                      CRR 8.42
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    ></p>
                  </div>
                  <div class="MuiStack-root css-1xhj18k">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    ></p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      RRR 9.95
                    </p>
                  </div>
                  <div class="MuiStack-root css-vide34">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      Over:
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      2
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      1
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      1
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      1
                    </p>
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-11h2uyk"
                    >
                      = 5
                    </p>
                  </div>
                </div>
                <div class="MuiStack-root css-ypblli">
                  <p class="MuiTypography-root MuiTypography-body1 css-klloh0">
                    Ball
                  </p>
                  <div class="MuiBox-root css-xnim3s">
                    Galle Marvels NEED 63 RUNS IN 6.2 OVERS TO WIN
                  </div>
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
                      Match Odds
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
                    Colombo Strikers
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    B-Love Kandy
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
                <div class="MuiStack-root css-2p8vrk">
                  <div class="MuiStack-root css-g6etzp">
                    <img
                      class="MuiBox-root css-iz2ltj"
                      src="public/assets/icons/betterIcon/inPlayW.png"
                    />
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-tn9bsb"
                    >
                      Bookmaker
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
                    Colombo Strikers
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    B-Love Kandy
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
                      <div class="MuiStack-root css-aelu6g hide_at_561">
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
                      <div class="MuiStack-root css-aelu6g">
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
                <div class="MuiStack-root css-2p8vrk">
                  <div class="MuiStack-root css-g6etzp">
                    <img
                      class="MuiBox-root css-iz2ltj"
                      src="public/assets/icons/betterIcon/inPlayW.png"
                    />
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-tn9bsb"
                    >
                      Tide Match
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
                    Colombo Strikers
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    B-Love Kandy
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
                      <div class="MuiStack-root css-aelu6g">
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
                      <div class="MuiStack-root css-aelu6g hide_at_561">
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
                      <div class="MuiStack-root css-aelu6g hide_at_561">
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
                      <div class="MuiStack-root css-aelu6g">
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
                <div class="MuiStack-root css-2p8vrk">
                  <div class="MuiStack-root css-g6etzp">
                    <img
                      class="MuiBox-root css-iz2ltj"
                      src="public/assets/icons/betterIcon/inPlayW.png"
                    />
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-tn9bsb"
                    >
                      Fancy
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
                    Colombo Strikers
                  </h6>
                  <p
                    class="MuiTypography-root MuiTypography-body1 css-1ha19hj"
                  ></p>
                </div>
                <div class="MuiStack-root css-het29j">
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-qzylx"
                  >
                    B-Love Kandy
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
                      <div class="MuiStack-root css-aelu6g hide_at_561">
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
                      <div class="MuiStack-root css-aelu6g">
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

          <div class="MuiStack-root css-ddwuyb">
            <div
              class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1s05omm"
            >
              <div class="MuiBox-root css-nu8l0g">JKS 5 Over Figure</div>
              <div class="MuiBox-root css-1tv6lwp">
                <p class="MuiTypography-root MuiTypography-body1 css-9laub6">
                  (0% commission)
                </p>
              </div>
            </div>
            <div class="MuiStack-root css-p58oka">
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  0
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  1
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  2
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  3
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  4
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  5
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  6
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  7
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
              <div class="MuiStack-root css-rhier5">
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  9
                </p>
                <p class="MuiTypography-root MuiTypography-body1 css-1mj48m5">
                  8.85
                </p>
              </div>
            </div>
            <div class="MuiStack-root css-1uelkw">
              <div class="MuiStack-root css-17pexuo">
                <div class="MuiStack-root css-il7sii">
                  <p class="MuiTypography-root MuiTypography-body1 css-tn9xkt">
                    JOTTA
                  </p>
                  <div
                    class="MuiStack-root css-13mkirs"
                    style="min-width: 140px"
                  >
                    <div class="MuiStack-root css-khshwk">J</div>
                    <div class="MuiStack-root css-6orp6a">
                      <div class="MuiStack-root css-up5l35">
                        100
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-1bv81gv"
                        >
                          %
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="MuiStack-root css-il7sii">
                  <div class="MuiStack-root css-10o8scn">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-tn9xkt"
                    >
                      KALI(0% commission)
                    </p>
                  </div>
                  <div class="MuiStack-root css-13mkirs">
                    <div class="MuiStack-root css-khshwk">K</div>
                    <div class="MuiStack-root css-6orp6a">
                      <div class="MuiStack-root css-up5l35">
                        100
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-1bv81gv"
                        >
                          %
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="MuiStack-root css-17pexuo">
                <div class="MuiStack-root css-il7sii" style="min-width: 140px">
                  <p class="MuiTypography-root MuiTypography-body1 css-tn9xkt">
                    CHOTA
                  </p>
                  <div class="MuiStack-root css-1gb1rig">
                    <div class="MuiStack-root css-1vouuc8">CH</div>
                    <div class="MuiStack-root css-1nvrxws">
                      <div class="MuiStack-root css-up5l35">
                        100
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-1bv81gv"
                        >
                          %
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="MuiStack-root css-il7sii">
                  <div class="MuiStack-root css-10o8scn">
                    <p
                      class="MuiTypography-root MuiTypography-body1 css-tn9xkt"
                    >
                      BARA(0% commission)
                    </p>
                  </div>
                  <div class="MuiStack-root css-1gb1rig">
                    <div class="MuiStack-root css-1vouuc8">BR</div>
                    <div class="MuiStack-root css-1nvrxws">
                      <div class="MuiStack-root css-up5l35">
                        100
                        <p
                          class="MuiTypography-root MuiTypography-body1 css-1bv81gv"
                        >
                          %
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

    <?php include 'script.php';?>
  </body>
</html>