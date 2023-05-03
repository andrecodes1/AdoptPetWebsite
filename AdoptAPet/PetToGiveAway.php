<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="WelcomePage.css">
  <title>Welcome</title>
  <script src="dateTime.js"></script>


</head>

<body onload="time()">
  <?php
  include("header.php");
  ?>
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
    <div id="GiveAwayForm">
      <form action="addPet.php" method="post" onsubmit="return validateFormEmail()">

        <label for="petType">Pet Type:</label>
        <select id="petType" name="petType">
          <option value="cat">Cat</option>
          <option value="dog">Dog</option>
        </select>
        <br><br>
        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" placeholder="Enter Breed">
        <br><br>

        <label for="age">Age:</label>
        <select id="age" name="age">
          <option value="0-1">0-1 years old</option>
          <option value="1-7">1-7 years old</option>
          <option value="7+">7+ years old</option>
        </select>
        <br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <br><br>

        <p>Does the animal get along with:</p>
        <input type="checkbox" id="socializationDogs" name="socializationDogs">
        <label for="socializationDogs">Dogs</label>
        <br>
        <input type="checkbox" id="socializationCats" name="socializationCats">
        <label for="socializationCats">Cats</label>
        <br>
        <input type="checkbox" id="socializationChildren" name="socializationChildren">
        <label for="socializationChildren">Small Children</label>
        <br>
        <br>
        Brag About Your Pet:
        <textarea id="bragAboutPet" name="bragAboutPet" rows="5" cols="35" style="resize: none;"></textarea>
        <br><br>

        <label for="ownerFullName">Current Owner's Name:</label>

        <input type="text" id="ownerFullName" name="ownerFullName" placeholder="Enter your full Name">
        <br><br>

        <label for="ownerEmail">Current Owner's Email:</label>
        <input type="email" id="ownerEmail" name="ownerEmail" placeholder="Enter your Email">
        <br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
      </form>
      <img src="petGiveAway.jpg" alt="Picture of dogs in a shelter" style="
            width: 700px;
            height: 450px;
            position: absolute;
            right: -120%;
            bottom: 23%;
          ">
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>

</html>