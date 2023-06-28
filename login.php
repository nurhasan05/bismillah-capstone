<?php
require "inc/koneksi.php";

if (isset($_POST['btnLogin'])) {
  if (login($_POST) > 0) {
    echo "<script>
      console.log('oke');
    </script>";
  } else {
    echo "<script>
    console.log('gagal');
  </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Login</title>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/styles/stylelogin.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
      <p style="color:red; font-style: italic; text-align: center;">Username / Password Salah</p>
    <?php endif; ?>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="password">Forgot Password?</div>
      <input type="submit" value="Login" class="btnLogin" name="btnLogin">
      <div class="signup_link">
        Not a member? <a href="link2.php">Signup</a>
      </div>
    </form>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    $(".btnLogin").on('click', function() {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      }).then(header("Location: index.html"))
    })
  </script>
</body>

</html>