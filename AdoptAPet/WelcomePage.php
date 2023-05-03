<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="WelcomePage.css">
  <title>Welcome</title>
  <script src="dateTime.js"></script>
  <script src="logout.js"></script>





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
    <div id="content">
      Unleash the Love with our adoption service! Say hello to your new
      companion through our user-friendly website, designed specifically for
      those looking to adopt a dog or a cat. Browse our
      vast network of rescues and shelters to find your furry soulmate.
      Embrace the adventure and adopt today!
      <img src="catndog.jpg" alt="Picture of a cat and a dog" style="
            width: 700px;
            height: 500px;
            position: absolute;
            right: -130%;
            bottom: 10%;
          ">
    </div>
  </main>

  <?php include("footer.php"); ?>
  </body>

</html>