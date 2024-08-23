<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Sign-Up For Monthly Season Tickets - ATI Kegalle </title>
    <link rel="stylesheet" href="css/registrationform.css">
    <link rel="stylesheet" href="common/nav.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title"> Sign-Up Form Monthly Season Tickets</div> <br>
    <div class="content">
      <form action="function/registration_fun.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id="full_name" name="full_name" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" id="address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Daily Root</span>
            <input type="text" placeholder="Ex : WARAKAPOLA-KEGALLE" id="droot" name="droot" required>
          </div>
          <div class="input-box">
            <span class="details">Your Cordinator</span>
            <input type="text" placeholder="Enter your Cordinator name" id="cordinator" name="cordinator" required>
          </div>
          <div class="input-box">
            <span class="details">Position</span>
            <input type="text" placeholder="Enter are you a REF or MEMBER" id="position" name="position" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="ENTER YOUR EMAIL" id="email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your phone number" id="phone" name="phone" required>
          </div>

          <div class="input-box">
            <span class="details">Index Number</span>
            <input type="text" value="KEG/IT/2022/F/" id="username" name="username" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="ENTER YOUR PASSWORD" id="password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="CONFIRM YOUR PASSWORD" id="conf_pass" name="conf_pass" required>
          </div>

          

        </div>
        
        <div>

        </div>
        <div class="button">
          <a href="index.php"><input type="submit" value="Sign-Up"></a>
        </div>
        <div class="details">If your have allready registerd, <a href="index.php"> click here to Sign-In.</a>
            </div>
      </form>
    </div>
  </div>

</body>
</html>
