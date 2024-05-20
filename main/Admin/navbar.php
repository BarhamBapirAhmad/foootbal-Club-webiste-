<style>
        /* Navbar styles */
        .navbar {
            margin: -10px;
            width: 100%;
            background-color: #FFFFFF;
            color: #000000;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 3%;
        }

        /* Text item styles */
        .navbar-item {
            position: relative;
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: none;
            color: inherit;
        }

        /* Hover effect */
        .navbar-item:hover::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: black;
        }

        /* After pseudo-element for arrow */
        .navbar-item::after {
            content: "";
            position: absolute;
            bottom: -6px;
            left: calc(50% - 6px);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid black;
            transition: all 0.3s ease;
        }

        /* Hover effect for arrow */
        .navbar-item:hover::after {
            bottom: -10px;
        }

        /* Active section styles */
        .navbar-item.active::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: black;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar-item {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    
<div class="navbar">
    <a href="admin.table.php" class="navbar-item" id="table">upMatches</a>
    <a href="AdminUser.php" class="navbar-item" id="users">Users</a>
    <a href="playerAdmin.php" class="navbar-item" id="about">players</a>
    <a href="adminTeam.php" class="navbar-item" id="team">Table</a>
    <a href="adminRewards.php" class="navbar-item" id="home">Rewards</a>
    <a href="../Home.php" class="navbar-item" id="logout">Logout</a>
</div>

<script>
    // Get the current page URL
    var currentPageUrl = window.location.href;

    // Get the navbar items
    var navbarItems = document.getElementsByClassName("navbar-item");

    // Loop through each navbar item
    for (var i = 0; i < navbarItems.length; i++) {
        // Check if the href attribute of the navbar item matches the current page URL
        if (navbarItems[i].href === currentPageUrl) {
            // Add the active class to the matching navbar item
            navbarItems[i].classList.add("active");
        }
    }
</script>
