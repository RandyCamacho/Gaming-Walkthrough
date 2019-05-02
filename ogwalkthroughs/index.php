<?php
	require_once "Dao.php";
	session_start();
?>
<html>
        <head>
                <title>Home Page</title>
                <link rel="stylesheet" href="home.css" type= "text/css">
        </head>
        <body style>
                <div id="banner_container">
                        <div id="logo"> <a href="index.php"> <img src="og_logo.jpg"/> </a> </div>
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
                                <li id="current_page"> <a href="index.php">Home</a> </li>
                                <li> <a href="RPG.php">RPG</a> </li>
                                <li> <a href="FPS.php">FPS</a> </li>
                                <li> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
                <div id="motto">
			<h3> <?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "You're logged In";
                                        } else {
						echo "Welcome!";
					}
                                ?> </h3>
                </div>
                <div class="home_content">
                        <p>Browse titles and get the help you need.</p>
                        <h5> Featured Games </h5>
			<p> First Person Shooter </p>
                        <div>
				<a href="rainbow.php" > <img class="pics" src="r6.jpg"> </a>
                        </div>
			<p> Role Playing Game </p>
			<div>
				<a href="sekiro.php" > <img class="pics" src="sekiro.jpg"> </a>				
			</div>
			<p> Sports </p>
                        <div>
                                <a href="madden.php"><img class="pics" src="madden.jpg"> </a>
                        </div>
                </div>

<!-- footer leaving space at the bottom: possibly because not enough info on page, for now will be fixed -->

                <div id="footer">
			<h4> &copy Original Gaming </h4>
                </div>
        </body>
</html>
