<?php
include("../includes/connect.php");
include("../includes/data.php");

session_start();

if (isset($_GET["logout"])) {
  unset($_SESSION['student_id']);
  header("Location: ../");
}

if (isset($_POST["login"])) {
  $email = $_POST["Email"];
  $password = md5($_POST["Password"]);
  $result = getWhere("students", 'email_id="' . $email . '" && password = "' . $password . '"');
  if (sizeof($result) > 0) {
    $_SESSION["student_id"] = $result[0]["id"];
    header("Location: ./");
    die();
  }
  echo '<script>alert("Invalid Email or Password!");</script>';
}
$valid=true;
if (isset($_POST["signup"])) {
  $args["name"] = $_POST["Full_Name"];
  $args["profile_photo"] = "/uploads/default-profile-picture.jpg";
  $args["email_id"] = $_POST["Email"];
  $args["contact_number"] = $_POST["Contact_No"];
  $args["password"] = $_POST["Password"];
  $args["college_id"] = 0;
  $args["dob"] = null;
  $args["bio"] = "";
  $args["address"] = "";
  $args["website"] = "";
  $args["skills"] = "";
  $args["languages"] = "";
  $args["status"] = 0;
  $args["created_at"] = null;
  if($valid){
    student("add", "", $args);

  }
  $email = $args["email_id"];
  $password = md5($args["password"]);
  $result = getWhere("students", 'email_id="' . $email . '" && password = "' . $password . '"');
  if (sizeof($result) > 0) {
    $_SESSION["student_id"] = $result[0]["id"];
    header("Location: ./");
    die();
  }
  echo '<script>alert("Sorry! Something went wrong.");</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/auth-style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" />
          </div>
          <input type="submit" value="Login" name="login" class="btn solid" />

        </form>
        <form action="" method="POST" class="sign-up-form" id="sign-up-form-scroll">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name"  name="Full_Name" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="Email" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-mobile"></i>
            <input type="tel" placeholder="Contact No" pattern="^[6-9]{1}[0-9]{9}" name="Contact_No" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password"  name="Password" required />
          </div>
          <input type="submit" class="btn" value="Sign up" name="signup" required />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Register now</h3>
          <p>
           please register
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="../img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>login here</h3>
          <p>
            already registered please login
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="../img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="../js/auth-app.js"></script>
</body>

</html>