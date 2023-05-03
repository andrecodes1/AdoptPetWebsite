<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="WelcomePage.css">
  <title>Welcome</title>
  <script src="dateTime.js">

  </script>
  <script>
    function showAlert() {
      alert("No matches found, will display all results.");
    }
  </script>
</head>

<body onload="showAlert();time()">

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
      <table style="text-align: center;width: 230%;font-size: 20px;border-spacing: 10px;border-style: solid;border-color: black;">
        <tr>
          <th>Manny</th>
          <th>Juno</th>
          <th>Eugene</th>
        </tr>
        <tr id="petPics">
          <td><img src="manny.jpg" width="230" height="250" alt="Manny Dog"></td>
          <td><img src="Juno.jpg" width="230" height="250" alt="Juno Dog"></td>
          <td><img src="eugene.jpg" width="300" height="250" alt="Eugene Cat"></td>
        </tr>
        <tr>
          <td>Dog</td>
          <td>Dog</td>
          <td>Cat</td>
        </tr>
        <tr>
          <td>Labrador and Rottweiler mix</td>
          <td>German Shepherd</td>
          <td>Domestic shorthair</td>
        </tr>
        <tr>
          <td>1 year old</td>
          <td>2.5 years old</td>
          <td>5 years old</td>
        </tr>
        <tr>
          <td>Male</td>
          <td>Male</td>
          <td>Female</td>
        </tr>
        <tr>
          <td>Gets along with cats, dogs and children</td>
          <td>Gets along with cats, dogs and children</td>
          <td>Gets along with cats and dogs</td>
        </tr>
        <tr>
          <td>Playful, calm and obedient. Loves snow!</td>
          <td>Agile, playful and loves to race</td>
          <td>Calm, and potty trained</td>
        </tr>
        <tr>
          <td>Owner : John Lingus</td>
          <td>Owner : James Scotting</td>
          <td>Owner : Jessica Rey</td>
        </tr>
        <tr>
          <td>johnlingus@gmail.com</td>
          <td>jamesarsenal33@gmail.com</td>
          <td>jessicareyrey@hotmail.com</td>
        </tr>
        <tr style="text-align: center;">
          <td><button>Interested</button></td>
          <td><button>Interested</button></td>
          <td><button>Interested</button></td>
        </tr>
      </table>
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>

</html>