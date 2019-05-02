<?php
        require_once "Dao.php";
        session_start();
?>
<html>
        <head>
                <title>FPS</title>
                <link rel="stylesheet" href="home.css" type= "text/css">
        </head>
        <body style>
                <div id="banner_container">
                        <div id="logo"> <a href="index.php"><img src="og_logo.jpg"/></a> </div>
                        <div id="banner_tools">
                                <ul class="forms">
                                        <li> <a href="signup.php">Sign Up</a> </li>
                                        <li> <a href="
                                <?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "logout.php";
                                        }
                                        else{
                                                echo "login.php";
                                        }
                                ?>
                                "
                                >
                                <?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "Logout";
                                        }
                                        else{
                                                echo "Log In";
                                        }
                                ?></a> </li>
                                </ul> </div>
                        <div id="name">
                                <h1>Original Gaming</h1>
                                <h2>Walkthroughs and Tips</h2> </div>
                </div>
                <div class="nav_bar">
                        <ul>
                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="RPG.php">RPG</a> </li>
                                <li id ="current_page"> <a href="FPS.php">FPS</a> </li>
                                <li> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
                <div id="motto">
                        <h3> First Person Shooters </h3>
                </div>
                <div class="home_content">
			<ul class = "games_list">
				<li> <a href ="rainbow.php">Tom Clancy's Rainbow Six Siege</a> </li>

			</ul>
                </div>
                <div id="footer">
			<h4> &copy Original Gaming </h4>
                </div>
        </body>
</html>
