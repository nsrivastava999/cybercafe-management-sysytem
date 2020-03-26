 <header id="header" class="header" style="background-color: #009973">
    <div class="header-menu">
        <div class="col">
            <ul style="list-style-type: none;display: flex; padding: 2%;justify-content: space-between;">
                <li style="color: black">
                    <h1 style="font-size:20px">ADMIN | CYBERCAFE</h1>
                </li>
                <li>
                    <a href="dashboard.php" style="color: black">Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle dropdown-menu-right" data-toggle="dropdown" style="color: black">Computer</a>
                        <ul class="dropdown-menu">
                            <li><a href="addcomputer.php">Add Computer</a></li>
                            <li><a href="managecomputer.php">Manage Computer</a></li>
                        </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                        <a href="addusers.php" class="dropdown-toggle" data-toggle="dropdown" style="color: black">Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="addusers.php">Add User</a></li>
                            <li><a href="managenewusers.php">Manage New Users</a></li>
                            <li><a href="manageolduser.php">View Old Users</a></li>
                        </ul>
                </li>
                <li>
                    <a href="search.php" style="color: black">Search </a>
                </li>
                <li>
                    <a href="logout.php" style="color: black"> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</header>