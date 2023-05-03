<?php session_start(); ?>
<?php
if (isset($_SESSION['username'])) {
  header("Location: PetToGiveAway.php");
  exit();
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  if (preg_match('/^[a-zA-Z0-9]+$/', $username) && preg_match('/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}$/', $password)) {
    $file = fopen("login.txt", "r");
    while (!feof($file)) {
      $line = trim(fgets($file));
      if (!empty($line)) {
        $arr = explode(":", $line);
        if ($arr[0] == $username && $arr[1] == $password) {
          $_SESSION['username'] = $username;
          header("Location: PetToGiveAway.php");
          exit();
        }
      }
    }
    fclose($file);
    if (empty($message)) {
      $message = "Invalid username or password";
    }
  } else {
    $message = "Invalid input";
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="WelcomePage.css">
  <title>Welcome</title>
  <script src="dateTime.js"></script>
</head>

<body onload="time()">
  <?php include("header.php"); ?>
  <ul class="navbar">
    <li><a href="WelcomePage.php">Home page</a></li>
    <li><a href="FindDogOrCat.php">Find a dog/cat</a></li>
    <li><a href="DogCare.php">Dog Care</a></li>
    <li><a href="CatCare.php">Cat Care</a></li>
    <li><a href="CreateAnAccount.php">Create an account</a></li>
    <li><a href="login.php">Have a pet to give away</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>
  </ul>
  <div id="mainbackground"></div>
  <main id="homepage">
    <div id="login-form">
      <h3>Login Form</h3>

      <div id="mainbackground"></div>
      <main id="homepage">
        <div id="dogCareText">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" pattern="(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}" required>
            <br>
            <input type="submit" value="Login">
          </form>
          <p><?php echo $message; ?></p>
          <h6>A username can contain letters (both upper and lower
            case) and digits only. A password must be at least 4 characters long
            (characters are to be letters and digits only), have at least one letter
            and at least one digit.</h6>
        </div>
      </main>
      <?php include("footer.php"); ?>
</body>

</html>