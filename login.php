<?php
session_start(); 

if(isset($_SESSION['username'])){ 
  header("location: login.php"); 
}
?>
<html>
<head>
  <title>Halaman Sebelum Login</title>
</head>
<body>
<fieldset>
  <h1>Silahkan login terlebih dahulu...</h1>
  
  
    <?php
    
    if ($user == "kimi" && $pass = "123") {
        //menciptakan session
        $_SESSION['login'] = $user; 
    }
    ?>
  </div>
  
  <form method="post" action="form_array.php">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    
    <button type="submit">Login</button>
    <button type ="reset">Reset</button>
    
    </fieldset>
  </form>
</body>
</html>