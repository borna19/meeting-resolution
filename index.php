<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../groups/sidebar.css"> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Metting Resolution System</title>

</head>
<body>
    <div class="container">
        <?php
        $dashboard="./index.php";
        $calendar="../calendar/cal.php";
        $groups="../groups/home.php";
        $user=".../user_registration/login.php";
        $settings="admin_dashboard_rcciit/setting.php";
        include("../groups/sidebar.php");
        ?>
        <div class="navigation">
            <ul>
            <li>
                    <a href="#">
                        <span class="icon">
                        </span>
                        <span class="title">Logo</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../calendar/cal.php">
                        <span class="icon"><ion-icon name="calendar-outline"></ion-icon>
                    </span>
                        <span class="title">Calander</span>
                    </a>
                </li>
 
                <li>
                    <a href="../groups/home.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon>
                    </span>
                        <span class="title">Groups</span>
                    </a>
                </li>

                <li>
                    <a href="../user_registration/login.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon>
                    </span>
                        <span class="title">User</span>
                    </a>
                </li>

                <li>
                    <a href="setting.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon>
                    </span>
                        <span class="title">Setting</span>
                    </a>
                </li>
            </ul>

        </div>

        <!-- ----------- Main ----------- -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
                </div>

            <a href="create.php"><div class="create">
            <ion-icon name="add-outline"></ion-icon>
            </div>
            </a>

            <a href="noti.php"><div class="notification">
                <ion-icon name="notifications-outline"></ion-icon>
            </div>
            </a>
            <div class="user">
                <a href="../register/login.php"><img src="rcciit.png" alt="" class="src"></a>
            </div>
        </div>

    </div>

    </div>
    <!-- <div class="side-menu">
        <div class="brand-name">
            <h1>Brand</h1>
        </div>
        <ul>
            <li><img src="" alt="">&nbsp; Dashboard</li>
            <li><img src="" alt="">&nbsp; Calander</li>
            <li><img src="" alt="">&nbsp; Groups</li>
            <li><img src="" alt="">&nbsp; Help</li>
            <li><img src="" alt="">&nbsp; Setting</li>
        </ul>

    </div> -->
    <script src="../admin_dashboard_rcciit/main.js"></script>
</body>
</html>