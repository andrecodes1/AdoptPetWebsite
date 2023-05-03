var dateT = document.getElementById('dateTime');

function time() {
  var d = new Date();
  var s = d.getSeconds();
  var m = d.getMinutes();
  var h = d.getHours();
  dateTime.textContent = 
    ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
}

setInterval(time, 1000);

//The following codes are to validate user input


function validateForm() {
      var animalType = document.getElementById("animalType").value;
      var breed = document.getElementById("breed").value;
      var ageOfAnimal = document.getElementById("ageOfAnimal").value;
      var gender = document.getElementById("gender").value;
      var compatibility = document.querySelectorAll('input[name="compatibility"]:checked').length;

      if (animalType == "" || breed == "" || ageOfAnimal == "" || gender == "" || compatibility == 0) {
        alert("Please fill in all fields.");
        return false;
        }
    }
function validateFormEmail(){
  var petType = document.getElementById("petType").value;
  var breed = document.getElementById("breed").value;
  var age = document.getElementById("age").value;
  var gender = document.getElementById("gender").value;
  var socializationDogs = document.getElementById("socializationDogs").checked;
  var socializationCats = document.getElementById("socializationCats").checked;
  var socializationChildren = document.getElementById("socializationChildren").checked;
  var bragAboutPet = document.getElementById("bragAboutPet").value;
  var ownerFullName = document.getElementById("ownerFullName").value;
  var ownerEmail = document.getElementById("ownerEmail").value;

  if (petType == "" || breed == "" || age == "" || gender == "" || ownerFullName == "" || ownerEmail == "") {
    alert("Please fill in all required fields.");
    return false;
  }

  var emailRegex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  if (!emailRegex.test(ownerEmail)) {
    alert("Please enter a valid email address.");
    return false;
  }

}