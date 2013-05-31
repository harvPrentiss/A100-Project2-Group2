<?php

include_once('user.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $object = new user();
    $object->Login($username, $password);
}

?>

<!doctype html>

<html>
        <head>
                <meta charset="UTF-8">
                <title>Sign In</title>
                <link rel ="stylesheet" href="Stylesheets/global.css">
                <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        </head>
        <body>
                <div id="header">
                <a href="index.html" class="title">STARTUP GUILD</a>
                <a href="signUp.php" class ="enter">Enter The Guild!</a>
                <p class="titleHeader">Enter At Your Own Risk...</p>
                <form method="get" action="searchResults.html" id="styledSearchBox" id="searchbox_015632362458750749219:lws8bshesim" >
                  <div>
                    <input type="hidden" name="cx" value="015632362458750749219:lws8bshesim" />
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input type="text" name="q" size="15" placeholder="Search..."/>
                  </div>
                </form>
                <div class="clear"></div>
            </div>

                <div id="mainContainer">
                        <div id="contentContainer">
                                <div id="leftContent">
                                    <div id="signInBox">
                                        <form method="post" action="signUp.php">
                                            Sign In Below.<br><br>
                                            <input type="text" name="username" placeholder="Email">
                                            <br>
                                            <input type="password" name="password" placeholder="Password">
                                            <br>
                                            <br>
                                            <br>
                                            <input type="submit" name ="login" value="Login"> 
                                        </form>
                                    </div>
                                    <div id="signUpBox">
                                        Enter your info below to sign up<br><br>
                                        <input type="text" name="username" placeholder="Email">
                                        <br>
                                        <input type="password" name="password" placeholder="Password">
                                        <br>
                                        <input type="radio" name="profileType" value="company"><div id="profileType">Company/Organization</div></input>  
                                        <input type="radio" name="profileType" value="individual"><div id="profileType">Individual</div></input>
                                        <br>
                                        <br>
                                        <input type="submit" name ="join" value="Join">
                                    </div>
                                </div>
                                <div id="rightContent">
                                        <div id="newsBox">
                                                        <a class="twitter-timeline" height="400" border-color="#000000"  data-theme="light" href="https://twitter.com/HarvardP" data-widget-id="339555100131475456">Tweets by @CodeA100</a>
                                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                                        </div>
                                        <br>
                                        <div id="mapBox">
                                                <a href="mapPage.html"><img src="Images/mapLinkImage.png"/></a>
                                        </div>
                                        <br>
                                        <div id="adBox">
                                                <img src="Images/adsMock.jpg"/>
                                        </div>
                                </div>
                        </div>
                        <div class="clear"></div>
                </div>
                <div id="footer">
                    <div id="footerLeft">
                        <a href="aboutPage.html" class="about">About</a>
                    </div>
                    <div id="footerRight">
                        Startup Guild is owned and operated by Team 2 of the A100 Program.
                    </div>
            </div>
        </body>
</html>
