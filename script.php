<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    const closeToggle = document.getElementById("closeToggle");
    const menuToggle = document.getElementById("menuToggle");
    const sidebar = document.getElementById("sidebar");
    const header = document.getElementById("header");
    const content = document.querySelector(".content");
    const footer = document.getElementById("footer");
    if (window.innerWidth >= 1220) {
        sidebar.classList.toggle("open");
        content.style.paddingLeft = "270px";
        footer.style.paddingLeft = "270px";
        header.style.width = "calc(100% - 300px)";
    }
    menuToggle.addEventListener("click", function() {
        sidebar.classList.toggle("open");
        // Adjust the position of the toggle button and header padding
        if (sidebar.classList.contains("open")) {
            if (window.innerWidth <= 1220) {
                header.style.paddingLeft = "0";
                content.style.paddingLeft = "0";
            } else if (window.innerWidth <= 1230) {
                header.style.width = "calc(100% - 282px)";
                content.style.paddingLeft = "250px";
                footer.style.paddingLeft = "250px";
            } else {
                header.style.width = "calc(100% - 300px)";
                header.style.paddingLeft = "0px";
                content.style.paddingLeft = "270px";
                footer.style.paddingLeft = "270px";
            }
        } else {
            header.style.width = "calc(100% - 32px)";
            header.style.paddingLeft = "0";
            content.style.paddingLeft = "0";
            footer.style.paddingLeft = "0";
        }
    });
    closeToggle.addEventListener("click", function() {
        sidebar.classList.remove("open");
        header.style.width = "calc(100% - 32px)";
        header.style.paddingLeft = "0";
        content.style.paddingLeft = "0";
        footer.style.paddingLeft = "0";
    });
    window.addEventListener("resize", function() {
        if (sidebar.classList.contains("open")) {
            if (window.innerWidth <= 1220) {
                header.style.width = "calc(100% - 32px)";
                header.style.paddingLeft = "0";
                content.style.paddingLeft = "0";
                footer.style.paddingLeft = "0";
            } else if (window.innerWidth <= 1230) {
                header.style.width = "calc(100% - 282px)";

                content.style.paddingLeft = "250px";
                footer.style.paddingLeft = "250px";
            } else {
                header.style.width = "calc(100% - 300px)";
                content.style.paddingLeft = "270px";
                footer.style.paddingLeft = "270px ";
            }
        }
    });

    document.querySelectorAll(".menu-item").forEach((item) => {
        item.addEventListener("click", function() {
            document.querySelectorAll(".menu-item").forEach((i) => {
                i.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
    </script>
    <script>
    document
        .getElementById("dropdownToggle")
        .addEventListener("click", function() {
            var dropdownMenu = document.querySelector(".dropdown-menu");
            dropdownMenu.style.display =
                dropdownMenu.style.display === "block" ? "none" : "block";
        });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches("#dropdownToggle")) {
            var dropdowns = document.getElementsByClassName("dropdown-menu");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block") {
                    openDropdown.style.display = "none";
                }
            }
        }
    };
    </script>