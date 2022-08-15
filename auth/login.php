<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">

</head>
<body>
  <form action="auth_data.php" method="POST">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) {?>
          <p> class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password "><br>

        <p>Don't have an account? <a href="signup.php">Signup</a></p>

        <button type="submit" name="loginbtn">Login</button>
  </form>
</body>
</html>
