<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In For Monthly Season Tickets - ATI Kegalle</title>
   <link rel="stylesheet" href="css/loginform.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="wrapper ">
        <div class="title">
           Sign-In
        </div>
        <form action="function/login_fun.php" method="post">
           <div class="field">
              <input type="text" id="username" name="username" required >
              <label>Index Number</label>
           </div>
           <div class="field">
              <input type="password" id="password" name="password" required>
              <label>Password</label>
           </div>
           <div class="content">
              <div class="checkbox">
                 <input type="checkbox" id="remember-me">
                 <label for="remember-me">Remember me</label>
              </div>
           </div>
           <div class="field">
              <input type="submit" value="Login">
           </div>
           <div class="signup-link">
              Not a member? <a href="registrationform.php">Signup now</a>
           </div>
        </form>
     </div>
</body>
</html>