<?php
    include("../security/s.php");
?>

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['pass'])) {
    // Redirect to login page if not logged in
    header("Location: admin_login.php");
    exit;
}

// Retrieve user ID from session
$userid = $_SESSION['user_id'];
$password = $_SESSION['pass'];

// Logout logic
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page after logout
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Byte - User Profile</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/admin-profile.css">
</head>
<body>
<header class="header">
    <nav class="navbar">
        <div class="head_logo">
            CyberByte Admin panel
        </div>
        <a href="dashboard.php" class="user"> 
            <i class="ri-dashboard-3-fill"></i> Dashboard
        </a>
    </nav>
</header>

<section class="profile_section">
<div class="container1">
    <div class="profile">
        <h1 class="head">
            <i class="ri-user-3-fill"></i> User Profile
        </h1>
        <form method="post" class="form1">
            <div class="email">
                <label for="userid" class="name">Admin :</label>
                <input type="text" id="userid" name="user_id" class="field" value="<?php echo $userid; ?>" readonly>
            </div>
            <div class="passw">
                <label for="password" class="name">Password:</label>
                <input type="text" id="password" name="pass" class="field" value="<?php echo $password; ?>" readonly>
            </div>
        </form>
        <form method="post" class="form2">
            <input type="submit" id="logoutButton" class="logout" name="logout" value="Log Out">
            <a href="dashboard.php" class="homeButton">Home</a>
        </form>
    </div>
</div>
</section>

</body>
</html>