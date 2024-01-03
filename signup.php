<?php
    include('classes/connect.php');
    include('classes/signupClass.php');

    $firstname = '';
    $lastname = '';
    $gender = '';
    $email = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if ($result != "") {
            echo "<div style='text-align: center;font-size: 12px; color: white; background-color: grey;'>";
            echo "the following errors occurred: <br> <br>";
            echo $result;
            echo "</div>";
        }

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBook | Sign up</title>
    <link rel="stylesheet" href="signupStyle.css">
</head>
<body>
    <div class="bar">
        <h1 class="headerText">MyBook</h1>
        <p class="signupText">Log in</p>
    </div>

    <div class="loginFormCont">
        <div class="loginForm"> 
            <p class="loginText">Sign up to MyBook</p><br><br>

            <form action="" method="post">
                <input value="<?php echo $firstname ?>" name="firstname" type="text" class="inputForm" placeholder="First name"><br><br>
                <input value="<?php echo $lastname ?>" name="lastname" type="text" class="inputForm" placeholder="Last name"><br><br>
                <p class="genderOptionText">Gender:</p>
                <select name="gender" id="" class="selectForm">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <input value="<?php echo $email ?>" name="email" type="text" class="inputForm" placeholder="Email"><br><br>
                <input name="password" type="password" class="inputForm" placeholder="Password"><br><br>
                <input name="password2" type="password" class="inputForm" placeholder="Rewrite Password"><br><br>
                <input type="submit" class="submitBtn" value="Sign up">
            </form>
        </div>
    </div>
</body>
</html>