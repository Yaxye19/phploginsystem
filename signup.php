<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="sign-up" id="sign-up">
  <div class="title">
    <h2 class="section-title">Sign up</h2>

    <div class="row">
      <form action="includes/login.inc.php" method="post" class="contact-form">
        <h3>Sign up</h3>
        <div class="input-box">
          <input type="text" name="uid" placeholder="Username">
        </div>
        <div class="input-box">
          <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="input-box">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="E-mail">
        </div>
        <div class="input-box">
          <button type="submit" name="submit" class="send-btn">LOGIN</button>
        </div>
      </form>
    </div>
  </div>
</section>

<footer class="footer">
    <span class="footer-title">Yaxye Ali</span>
    <p>Copyright @2023 Yaxye. All Rights Reserved.</p>
  </footer>
</body>
</html>