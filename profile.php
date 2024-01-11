<?php
    session_start();

    include('classes/connect.php');
    include('classes/loginClass.php');

    if(isset($_SESSION['myBook_user_id']) && is_numeric($_SESSION['myBook_user_id'])){
        
        $id = $_SESSION['myBook_user_id'];

        $login = new Login();

        $result = $login->checkLogin($id);

        if($result === true){
            echo "everything is good";
        } else {
            header('Location: login.php');
            die;
        }
    } else {
        header('Location: login.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBook | Profile</title>
    <link rel="stylesheet" href="profileStyle.css">
</head>
<body>
    <div class="header" id="bar">
        <h1>MyBook</h1> 
        <div class="searchCont">
            <input type="text" class="searchBox" id="searchBox" placeholder="Search">
            <img src="images/profileImage.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
        </div>
    </div>

    <div class="coverArea">
        <div style="background-color: white; text-align: center; color: #405d9b;">
            <img src="images/profileBackground.avif" style="width: 100%;" alt="">
            <img src="images/profileImage.jpg" class="profilePic" alt="">
            <br>
            <div style="font-size: 30px;">John Doe</div>
            <br>
            <div id="menuButtons" class="menuButtons"> Timelie </div> 
            <div id="menuButtons" class="menuButtons">About</div> 
            <div id="menuButtons" class="menuButtons">Friends</div> 
            <div id="menuButtons" class="menuButtons">Photos</div> 
            <div id="menuButtons" class="menuButtons">Settings</div>
        </div>


        <!-- below cover area -->
        <div style="display: flex;">
        <!-- Friends area -->
            <div style="min-height: 400px;flex:1;">
                <div class="friendsBar" id="friendsBar">
                    Friends <br>
                    <div class="friend">
                        <img src="images/user1.jpg" alt="" class="friendProfile"> 
                        <br>
                        first user
                    </div>
                    <div class="friend">
                        <img src="images/user2.jpg" alt="" class="friendProfile"> 
                        <br>
                        second user
                    </div>
                    <div class="friend">
                        <img src="images/user3.jpeg" alt="" class="friendProfile"> 
                        <br>
                        third user
                    </div>
                    <div class="friend">
                        <img src="images/user4.jpeg" alt="" class="friendProfile"> 
                        <br>
                        fourth user
                    </div>
                 </div>
            </div>
        
        <!-- posts area  -->
            <div style="min-height: 400px;flex:2.5; padding: 20px; padding-right: 0px;">
                <div class="postInputCont">
                    <textarea class="postInput" placeholder="Whats on your mind" name="" id="" cols="30" rows="10"></textarea>
                    <input id="postButton" type="submit" value="Post">
                    <br>
                </div>
                <!-- posts -->
                <div class="postsCont" id="postsCont">

                <!-- post 1 -->
                    <div class="post">
                        <div>
                             <img src="images/user1.jpg" alt="" style="width: 75px; height: 65px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">
                                First Guy
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptate, voluptatum ea alias distinctio delectus cumque officia debitis
                            fuga consequuntur maxime ducimus est perspiciatis porro totam excepturi necessitatibus
                            , soluta laborum unde.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a>  . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>
                <!-- post 2 -->
                    <div class="post">
                        <div>
                             <img src="images/user2.jpg" alt="" style="width: 75px; height: 65px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">
                                Second Guy
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptate, voluptatum ea alias distinctio delectus cumque officia debitis
                            fuga consequuntur maxime ducimus est perspiciatis porro totam excepturi necessitatibus
                            , soluta laborum unde.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a>  . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>
                <!-- post 3 -->
                    <div class="post">
                        <div>
                             <img src="images/user3.jpeg" alt="" style="width: 75px; height: 65px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">
                                First Guy
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptate, voluptatum ea alias distinctio delectus cumque officia debitis
                            fuga consequuntur maxime ducimus est perspiciatis porro totam excepturi necessitatibus
                            , soluta laborum unde.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a>  . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</body> 
</html>