<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $petType = $_POST['petType'];
  $breed = $_POST['breed'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $socializationDogs = isset($_POST['socializationDogs']) ? 'Yes' : 'No';
  $socializationCats = isset($_POST['socializationCats']) ? 'Yes' : 'No';
  $socializationChildren = isset($_POST['socializationChildren']) ? 'Yes' : 'No';
  $bragAboutPet = $_POST['bragAboutPet'];
  $ownerFullName = $_POST['ownerFullName'];
  $ownerEmail = $_POST['ownerEmail'];

  $filename = 'addPet.txt';
  $file = fopen($filename, 'r');
  $lastId = 0;
  while (($line = fgets($file)) !== false) {
    $fields = explode(':', $line);
    $lastId = max($lastId, intval($fields[0]));
  }
  fclose($file);


  $id = $lastId + 1;


  $record = "$id:$ownerFullName:$petType:$breed:$age:$gender:$socializationDogs:$socializationCats:$socializationChildren:$bragAboutPet\n";

  $file = fopen($filename, 'a');
  fwrite($file, $record);
  fclose($file);

  echo '<script>alert("Thank you, your pet has successfully been submitted!");</script>';
  header('Location: PetToGiveAway.php');
  exit();
}
