<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="WelcomePage.css">
</head>

<body>
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

    <main id="homepage">
        <div id="content"><?php
                            $file_path = "login.txt";

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
                                $username = $_POST["username"];
                                $password = $_POST["password"];

                                if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
                                    echo "<p>Invalid username format. Please enter only letters and digits.</p>";
                                } else if (!preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9]{4,}$/", $password)) {
                                    echo "<p>Invalid password format. Please enter a password that is at least 4 characters long and contains at least one letter and one digit.</p>";
                                } else {
                                    $file_handle = fopen($file_path, "r");
                                    while (!feof($file_handle)) {
                                        $line = fgets($file_handle);
                                        $user_data = explode(":", $line);
                                        if ($user_data[0] == $username) {
                                            fclose($file_handle);
                                            echo "<p>The requested username is not available. Please choose a different username.</p>";
                                            exit;
                                        }
                                    }
                                    fclose($file_handle);

                                    $new_user_data = $username . ":" . $password . "\n";
                                    $file_handle = fopen($file_path, "a");
                                    fwrite($file_handle, $new_user_data);
                                    fclose($file_handle);

                                    echo "<p>Account created successfully. You can now log in with your new credentials.</p>";
                                }
                            }
                            ?>
            <form method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]+">
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required pattern="(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9]{4,}">
                <br>
                <input type="submit" value="Submit">
            </form>
            <h6>A username can contain letters (both upper and lower
                case) and digits only. A password must be at least 4 characters long
                (characters are to be letters and digits only), have at least one letter
                and at least one digit.</h6>
        </div>
    </main>

</body>

</html>