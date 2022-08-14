<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
  <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) {?>
          <p> class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label> User name</label>
        <input type="text".name="uname" placeholder="User Name"><br>

        <label> User name</label>
        <input type="password".name="password" placeholder="Password "><br>

        <button type="submit">Login</button>
  </form>
</body>
</html>
