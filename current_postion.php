<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Current Position</title>
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
      .css-1s05omm {
        box-sizing: border-box;
        margin: 0px;
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
      .css-1xpgcz5 {
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
        margin: 0px 0px 0px 0.5rem;
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
        line-height: 1.231;
        border-radius: 4px;
        font-size: 0.8125rem;
        padding: 0.375rem 0.875rem;
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
      .css-1lul10v {
        display: flex;
        flex-direction: column;
        margin-top: 0.5rem;
      }
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
      .css-e03dsj
        .MuiTableCell-head:not(.MuiTableCell-paddingCheckbox):first-child,
      .css-e03dsj
        .MuiTableCell-root:not(.MuiTableCell-paddingCheckbox):first-child {
        padding-left: 1.5rem;
      }
      .css-e03dsj:last-of-type td,
      .css-e03dsj:last-of-type th {
        border: 1px solid rgb(224, 224, 224) !important;
      }
      .css-disv23 .MuiTableCell-root {
        text-transform: capitalize;
        color: rgb(255, 255, 255);
        font-size: 14px;
      }
      .css-disv23 .MuiTableCell-head {
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 0.8125rem;
      }
      .css-199x37d {
        font-size: 0.8125rem;
        line-height: 1.40625rem;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        display: table-cell;
        vertical-align: inherit;
        text-align: left;
        padding-right: 16px;
        padding-left: 16px;
        color: rgb(0, 0, 0);
        border: 1px solid rgb(224, 224, 224);
        padding-top: 8px !important;
        padding-bottom: 8px !important;
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
      .css-12dfzmm .MuiTableCell-body {
        letter-spacing: 0.25px;
        color: rgb(0, 0, 0);
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
      .css-ln1ezp {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 600;
        color: rgb(0, 168, 38);
      }
      .css-1ucw7r7 {
        margin: 0px;
        line-height: 1.32;
        font-size: 0.875rem;
        letter-spacing: 0.1px;
        font-family: "Public Sans", sans-serif, -apple-system,
          BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
          sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        color: red;
      }
      .css-1sa68b5 .MuiTableCell-head:last-child,
      .css-1sa68b5 .MuiTableCell-root:last-child {
        padding-right: 1.5rem;
      }
      .css-1sa68b5:last-of-type td,
      .css-1sa68b5:last-of-type th {
        border: 1px solid rgb(224, 224, 224) !important;
      }
      .css-12dfzmm .MuiTableCell-body {
        letter-spacing: 0.25px;
        color: rgb(0, 0, 0);
      }
      .MuiTableCell-root a:hover {
        text-decoration: none;
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

      <div class="css-1s05omm">
        <div class="MuiBox-root css-nu8l0g">
          Market Position<button
            class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeSmall MuiButton-containedSizeSmall css-1xpgcz5"
            tabindex="0"
            type="button"
            fdprocessedid="xh8l7"
          >
            Refresh<span
              class="MuiButton-endIcon MuiButton-iconSizeSmall css-endvfr"
              ><svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 16 16"
                class="material-icons notranslate MuiIcon-root MuiIcon-fontSizeMedium css-3gfsjh"
                aria-hidden="true"
                height="1em"
                width="1em"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"
                ></path>
                <path
                  fill-rule="evenodd"
                  d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"
                ></path></svg></span
            ><span class="MuiTouchRipple-root css-w0pj6f"></span>
          </button>
        </div>
        <div class="MuiBox-root css-1tv6lwp"></div>
      </div>
      <div class="MuiStack-root css-1lul10v">
        <div
          class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root css-14afmp0"
        >
          <table class="MuiTable-root css-rxit2l">
            <thead class="MuiTableHead-root css-disv23">
              <tr class="MuiTableRow-root MuiTableRow-head css-e03dsj">
                <th
                  class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                  scope="col"
                  width="70%"
                >
                  tennis
                </th>
                <th
                  class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                  scope="col"
                  width="30%"
                >
                  Amount
                </th>
              </tr>
            </thead>
            <tbody class="MuiTableBody-root css-12dfzmm">
              <tr class="MuiTableRow-root css-1sa68b5">
                <td
                  class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-jup9dp"
                >
                  <a href="tennis.php">
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-ln1ezp"
                    >
                      M Lourdes Carle v Kati Volynets
                    </h6>
                  </a>
                </td>

                <td
                  class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                >
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-1ucw7r7"
                  >
                    -280
                  </h6>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div
          class="mt-2 MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiTableContainer-root css-14afmp0"
        >
          <table class="MuiTable-root css-rxit2l">
            <thead class="MuiTableHead-root css-disv23">
              <tr class="MuiTableRow-root MuiTableRow-head css-e03dsj">
                <th
                  class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                  scope="col"
                  width="70%"
                >
                  cricket
                </th>
                <th
                  class="MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium css-199x37d"
                  scope="col"
                  width="30%"
                >
                  Amount
                </th>
              </tr>
            </thead>
            <tbody class="MuiTableBody-root css-12dfzmm">
              <tr class="MuiTableRow-root css-1sa68b5">
                <td
                  class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-jup9dp"
                >
                  <a href="cricket.php">
                    <h6
                      class="MuiTypography-root MuiTypography-subtitle2 css-ln1ezp"
                    >
                      Dambulla Sixers v Jaffna Kings
                    </h6>
                  </a>
                </td>
                <td
                  class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium css-1rgxqo9"
                >
                  <h6
                    class="MuiTypography-root MuiTypography-subtitle2 css-1ucw7r7"
                  >
                    -200
                  </h6>
                </td>
              </tr>
            </tbody>
          </table>
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
