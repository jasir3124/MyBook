<?php
    include('classes/connect.php');
    include('classes/loginClass.php');

    $email = '';
    $password = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = new Login();
        $result = $login->evaluate($_POST);

        if ($result != "") {
            echo "<div style='text-align: center;font-size: 12px; color: white; background-color: grey;'>";
            echo "the following errors occurred: <br> <br>";
            echo $result;
            echo "</div>";
        } else{
            header("Location: profile.php");
            die;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBook | Log in</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="bar">
        <h1 class="headerText">MyBook</h1>
        <p class="signupText">Signup</p>
    </div>

    <div class="loginFormCont">
        <div class="loginForm"> 
            <p class="loginText">Log in to MyBook</p><br><br>
            <input value="<?php echo $email ?>" type="text" class="inputForm" placeholder="Email"><br><br>
            <input type="password" class="inputForm" placeholder="Password"><br><br>
            <input type="submit" class="submitBtn" value="Log in">
        </div>
    </div>
</body>
</html>