<?php
  session_start();

?>
<head>

  <?php
  ob_start();
  include "./configStyle.php";
  require "./config.php";
  ?>
</head>

<body>
  <?php
    if(isset($_POST["btnLogin"])){
      $emailUsername = $_POST["emailUsername"];
      $passWord      = $_POST["passWord"];

      $correction = "SELECT userName, email, userPassword FROM tbl_user WHERE (userName='$emailUsername' OR email='$emailUsername') AND userPassword='$passWord' ";
      $query = mysqli_query($link, $correction);
      if(!$query){
        include '../message/errorMessage.php';
      }else{
        include "../message/successMessage.php";
        $_SESSION["username"] = $emailUsername;
        // $_SESSION["role"]     = mysqli_fetch_all($query);
        header("refresh: 1, url= ../index.php");
      }
    }
  ?>
  <section class="vh-100" style="background-color: gray;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form action="" method="post">
                <h3 class="mb-5">Sign in</h3>
  
                <div class="form-outline mb-4">
                  <input type="text" name="emailUsername" id="typeEmailX-2" class="form-control form-control-lg" required value="" />
                  <label class="form-label" for="typeEmailX-2">Email or Username</label>
                </div>
  
                <div class="form-outline mb-4">
                  <input type="password" name="passWord" id="typePasswordX-2" class="form-control form-control-lg" required value="" />
                  <label class="form-label" for="typePasswordX-2">Password</label>
                </div>
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Remember password </label>
                </div>
                <!-- btn login -->
                <input type="submit" value="Login" name="btnLogin" class="btn btn-primary btn-lg btn-block">


                <span style="padding: 10px;">Don't have account ? <a style="padding-left:5px" href="./formRegister.php">Register</a></span>
  
                <hr class="my-4">
  
                <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>