 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="signup_check.php" method="post">
     <h1>SIGN UP</h1> 
       <?php if(isset($_GET['error'])): ?>
       <p class="error"><?php echo $_GET['error']; ?></p>
       <?php endif; ?>
       <?php if(isset($_GET['success'])): ?>
       <p class="success"><?php echo $_GET['success']; ?></p>
       <?php endif; ?>
    <label>Email</label>
    <input type="text" name="email" placeholder="email"><br>
    <label>Username</label>
    <input type="text" name="username" placeholder="username"><br>
    <label>City</label>
    <input type="text" name="city" placeholder="city"><br>
    <label>Password</label>
    <input type="password" name="pwd" placeholder="password"><br>
    <button type="submit">Sign Up</button>
    <a href="index.php" class="ca"> Already have an account? </a>
    </form>
</body>
</html>