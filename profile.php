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
            <img src="images/profileBackground.avif" style="width: 100%; height: 100%;" alt="">
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

        <div style="display: flex;">
            <div style="min-height: 400px;flex:1;"></div>
            <div style="min-height: 400px;flex:1;"></div>
        </div>
    </div>
</body> 
</html>