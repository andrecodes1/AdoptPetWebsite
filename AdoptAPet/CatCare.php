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
    <div id="catCareText">
      <h4 style="text-align: justify;">Cats are frisky, independent creatures who bring joy and happiness to our lives. But to keep them healthy and purring, here are a few tips for cat care:</h4>
      <ol>

        <li>Feed them a balanced diet. Kibble or wet food is fine as long as it's high-quality and meets their nutritional needs. Treats can be a fun addition, but don't overdo it!</li>

        <li>Keep their litter box clean. This is a must for your cat's comfort and hygiene. Scoop it daily, and change the litter at least once a week.</li>

        <li>Provide plenty of water. Cats love fresh, clean water. Change it daily, and add a fountain or bowl to encourage them to drink more.</li>

        <li>Playtime is a must! Cats are naturally curious creatures and love to pounce, chase, and play. Get them toys and dedicate some time each day to play with them.</li>

        <li>Regular visits to the vet are important. Get them vaccinated, dewormed, and check for any health issues.</li>

        <li>Groom them regularly. Brushing their fur, cleaning their eyes and ears, and trimming their claws will keep them looking and feeling good.</li>

      </ol>
      <h4 style="text-align: justify;">In conclusion, cats are wonderful companions and with a little bit of care and love, they'll be happy and healthy for many years to come! :)</h4>
      <img src="catCare.jpg" alt="Picture of a cat playing" style="
            width: 500px;
            height: 350px;
            position: absolute;
            right: -77%;
            bottom: 28%;
          ">
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>

</html>