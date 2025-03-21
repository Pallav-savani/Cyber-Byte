<?php
    include("../security/s.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberByte - Administrator</title>
    <link rel="shortcut icon" href="../images/cyberbyte.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    font-family: 'Jost', sans-serif;
}
html{
    scroll-behavior: smooth;
}
.wrapper{
    position: relative;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    background:url('../images/back-processor.jpg') no-repeat;
    background-size:cover;
    background-position:center;
    align-items: center;
}
.login-box {
  position: relative;
  width: 400px;
  height: 450px;
  background: transparent;
  border-radius: 17px;
  border: 2px solid rgba(255,255,255,.5);
  display: flex;
  justify-content: center;
  align-items: center;
  backdrop-filter: blur(8px);
}
h2 {
  font-size:40px;
  font-weight: 500;
  color:#fff;
  text-align:center;
  padding-bottom: 20px;
}
.input-box {
  position:relative;
  width:310px;
  margin:30px 0;
  border-bottom:1px solid #fff;
}
.input-box label {
  position:absolute;
  top:40%;
  left:5px;
  transform:translateY(-50%);
  font-size: 1.4rem;
  color:#fff;
  pointer-events:none;
  transition:.5s;
}
.input-box input:focus  ~ label,
.input-box input:valid  ~ label {
  top:-5px;
}
.input-box input {
  width:100%;
  height:50px;
  background:transparent;
  border:none;
  outline:none;
  font-size: 1.3rem;
  color:#fff;
  padding:0 35px 0 5px;
}
.input-box .icon {
  position:absolute;
  right:8px;
  top:50%;
  color: #fff;
  transform: translateY(-50%);
}
.remember-forgot {
  margin: 15px 0 15px;
  font-size: 1.2rem;
  color:#fff;
  display:flex;
  justify-content:space-between;
  align-items: center;
  flex-direction: row;
  row-gap: 10px;
}
.remember-forgot label input {
  margin-right:3px;
}
.remember-forgot a {
  color:#fff;
  text-decoration:none;
}
.remember-forgot a:hover {
  text-decoration:underline;
}
button {
  width:100%;
  height:40px;
  background-color:#fff;
  border:none;
  border-radius:40px;
  cursor: pointer;
  font-size: 1.3rem;
  color:#000;
  font-weight:500;
  transition: .3s ease;
}
button:hover{
  background: rgba(0,0,0,0.567);
  border: 1px solid #fff;
  color: #fff;
  font-weight: 400;
}
.register-link {
  font-size:1.2rem;
  color:#fff;
  text-align:center;
  margin:25px 0 10px;
}
.register-link p a {
  color:#fff;
  text-decoration:none;
  font-weight:600;
}
.register-link p a:hover {
  text-decoration:underline;
}
@media (max-width:500px) {
  .login-box {
    width:100%;
    height:100vh;
    border:none;
    border-radius:0;
  }
  .input-box {
    width:310px;
}
}

</style>
<body>

<div class="wrapper">
    <div class="login-box">
        <form action="admin_login.php" method="post">
            <h2>Login</h2>

            <div class="input-box">
                <span class="icon">
                    <i class="ri-mail-fill"></i>
                </span>
                <input type="text" required name="email_id" autocomplete="off">
                <label>Username</label>
            </div>

            <div class="input-box">
                <span class="icon">
                    <i class="ri-lock-fill"></i>
                </span>
                <input type="password" required name="admin_password" autocomplete="off">
                <label>Password</label>
            </div>

            <button type="submit" name="signin">Sign In</button>

            <div class="register-link">
                <p><i class="ri-error-warning-line"></i> Authentic user only allow..!!</p>
            </div>
        </form>
    </div>
</div>

</body>
</html>