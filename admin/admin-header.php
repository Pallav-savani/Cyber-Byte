<header class="header">
    <nav class="navbar">
        <div class="nav_data">
            <div class="nav_logo">
                CyberByte Admin panel
            </div>
        </div>
        
        <div class="welcome_c">
            <div class="wel">
                <div class="welcome">
                    <label for="userid" class="ad_name">Welcome Back , </label>
                    <input type="text" id="userid" name="user_id" class="ad_field" value="<?php echo $userid; ?>" readonly>
                </div>
    
                <form method="post" class="logout_form">
                    <input type="submit" id="logoutButton" class="logout" name="logout" value="Logout">
                </form>
            </div>

            <a href="admin-profile.php" class="user">
                <img src="../images/user.png" alt="" class="user_icon">
            </a>
        </div>

    </nav>
</header>