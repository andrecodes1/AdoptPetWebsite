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
    <div id="dogCareText">
      <h4 style="text-align: justify;">Caring for a furry companion like a dog requires love, attention, and a commitment to their health and happiness! Here's a quick rundown of the essentials for keeping your pup in tip-top shape:</h4>

      <ol>

        <li>Exercise: A daily walk or play session is key to physically and mentally stimulating your dog.</li>

        <li>Feeding: Provide your dog with a balanced diet and ensure they have access to fresh water at all times.</li>

        <li>Grooming: Regular brushing and bathing can keep their fur shiny and skin healthy, and prevent any skin issues.</li>

        <li>Training and socialization: Positive reinforcement training and socializing with other dogs can help your pup develop into a well-behaved and confident companion!</li>

        <li>Regular check-ups: Regular visits to the vet can catch any health issues early and keep your pup happy and healthy.</li>

      </ol>
      <h4 style="text-align: justify;"> Remember, a happy pup means a happy you! So, invest time and love in your furry friend and watch the tails wag! :)</h4>
      <img src="dogBath.jpg" alt="Picture of a dog in a bath" style="
            width: 500px;
            height: 350px;
            position: absolute;
            right: -77%;
            bottom: 25%;
          ">
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>

</html>