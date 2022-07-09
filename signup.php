<?php

include('include/config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $nohp = $_POST['nohp'];
  $alamat = $_POST['alamat'];
  $kodeuser = $_POST['kodeuser'];
  $query = mysqli_query($con, "insert into tb_user(nama,email,password,nohp,alamat,kodeuser) values('$nama','$email','$password','$nohp','$alamat','$kodeuser')");
  $msg = "Account successfully created ! Now You can login !";
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="images/profile.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="login/css/mainregister.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>SIGN UP | JUAL.IN</title>

  <script>
    function iduserAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availabilytyiduser.php",
        data: 'kodeuser=' + $("#kodeuser").val(),
        type: "POST",
        success: function(data) {
          $("#iduser-availability-status1").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }
  </script>
</head>

<body>
  <section class="material-half-bg">
    <div class="cover">
      <div id="particles-js"></div>
    </div>
  </section>
  <section class="login-content">
    <div class="login-box">
      <p style="padding-left:20%; color:green">
        <?php if ($msg) {
          echo htmlentities($msg);
        } ?>
      <form class="login-form" method="post">
        <a class="brand" href="form_user.php"></a>
        <div class="thumbnail">
          <center>
            <a href="index.html" class="link img_link">
              <img src="images/profile.png" height="100" />
          </center></a>
        </div>
        <p>

        <div class="form-group">
          <input class="form-control" name="fullname" type="text" placeholder="Full Name" autofocus required="required">
        </div>

        <div class="form-group">
          <input class="form-control" type="email" placeholder="Email" name="email" placeholder="Email" autofocus required="required">
        </div>

        <div class="form-group">
          <input class="form-control" type="password" required="required" name="password" placeholder="Password">
        </div>

        <div class="form-group">
          <input class="form-control" type="nohp" required="required" name="nohp" placeholder="Nomor HP">
        </div>

        <div class="form-group">
          <input class="form-control" type="alamat" required="required" name="alamat" placeholder="Alamat Lengkap">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" maxlength="10" name="kodeuser" id="kodeuser" onBlur="iduserAvailability()" placeholder="Identity Number" required="required">
          <span id="iduser-availability-status1" style="font-size:12px;"></span>
        </div>

        <div class="form-group btn-container">
          <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
        </div>
        <p />
        <div class="form-group mt-2">
          <p class="semibold-text mb-0">Already have an Account?<a href="form_user.php" class="btn btn-secondary btn-block mt-2">SIGN IN</a></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="login/js/jquery-3.2.1.min.js"></script>
  <script src="login/js/popper.min.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="login/js/plugins/pace.min.js"></script>

  <!-- particles js file -->
  <script src="login/js/particles.js"></script>
  <script src="login/js/app.js"></script>

  <script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
      $('.login-box').toggleClass('flipped');
      return false;
    });
  </script>
</body>

</html>