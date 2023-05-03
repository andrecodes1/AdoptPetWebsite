function logout() {
    if (confirm("Are you sure you want to log out?")) {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "logout.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          window.location.href = "login.php";
        }
      }
      xhr.send();
    }
  }
  