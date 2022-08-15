<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
  <form action="auth_data.php" method="POST">
        <h2>Signup</h2>
        <?php if (isset($_GET['error'])) {?>
          <p> class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Usename</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password "><br>

        <label>Confirm Password</label>
        <input type="password" name="cpassword" placeholder="Confirm Password "><br>

        <p>Already have an account? <a href="login.php">Login</a></p>

        <button type="submit" name="signupbtn">Signup</button>
  </form>
</body>
</html>
