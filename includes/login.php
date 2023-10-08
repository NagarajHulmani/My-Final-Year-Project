<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="path/to/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="path/to/jquery.min.js"></script>
  <!-- Include other scripts and styles as needed -->
</head>

<body>

  <!-- Your existing modal and form structure -->

  <?php
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
      $_SESSION['login'] = $_POST['email'];
      $_SESSION['fname'] = $results->FullName;
      $currentpage = $_SERVER['REQUEST_URI'];
      echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
    } else {
      echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>
  <div class="modal fade" id="loginform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="login_wrap">
              <div class="col-md-12 col-sm-6">
                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email address*">
                  </div>
                  <div class="form-group">

                    <input type="password" name="password" class="form-control" autocomplete="current-password"
                      required="" id="id_password" placeholder="password*">
                    <!-- <i class="far fa-eye" id="togglePassword"
                      style=" cursor: pointer;padding-top: -250px;padding-inline: 562px;padding-inline-end: 0px;"></i> -->

                  </div>
                  <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-block">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
          <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
        </div>
      </div>
    </div>
  </div>

        <script>
          const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#id_password');

          togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
          });
        </script>

</body>

</html>