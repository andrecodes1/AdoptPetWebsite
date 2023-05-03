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
    <div id="AdoptionForm">
      <form action="BrowseAvailablePets.php" onsubmit="return validateForm()" method="post">
        <h2>Pet Adoption Form</h2>
        <p>
          <label for=" animalType">Cat or dog:</label>
          <select id="animalType" name="animalType">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
          </select>
        </p>
        <p>
          <label for="breed">Breed:</label>
          <select id="breed" name="breed">
            <option value="Doesn't matter">Doesn't matter</option>
            <option value="australianShepherd">Australian Shepherd</option>
            <option value="beagle">Beagle</option>
            <option value="shibaInu">Shiba Inu</option>
            <option value="germanShepherd">Germa Shepherd</option>
            <option value="doberman">Doberman</option>
            <option value="savannah">Savannah</option>
            <option value="burmese">burmese</option>
            <option value="siamese">Siamese</option>
            <option value="carthousian">Carthousian</option>
            <option value="birman">Birman</option>
          </select>
        </p>
        <p>
          <label for="ageOfAnimal">Preferred age of animal:</label>
          <select id="ageOfAnimal" name="ageOfAnimal">
            <option value="Doesn't matter">Doesn't matter</option>
            <option value="0-3">0-3 years</option>
            <option value="3-7">3-7 years</option>
            <option value="7+">7 years and up</option>
          </select>
        </p>
        <p>
          <label for="gender">Preferred gender:</label>
          <select id="gender" name="gender">
            <option value="Doesn't matter">Doesn't matter</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </p>
        <p>
          Does it get along with:
          <br>
          <input type="checkbox" id="otherDogs" name="compatibility" value="otherDogs">
          <label for="otherDogs">Other dogs</label><br>
          <input type="checkbox" id="otherCats" name="compatibility" value="otherCats">
          <label for="otherCats">Other cats</label><br>
          <input type="checkbox" id="smallChildren" name="compatibility" value="smallChildren">
          <label for="smallChildren">Small children</label>
        </p>
        <p>
          <input type="submit" value="Submit">
          <input type="reset" value="Clear">
        </p>
      </form>
      <img src="beagle.jpg" alt="Picture of a Beagle" style="
            width: 450px;
            height: 700px;
            position: absolute;
            right: -80%;
            bottom: -5%;
          ">
    </div>
  </main>

  <?php include("footer.php"); ?>
</body>

</html>