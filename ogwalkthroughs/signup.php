<?php
	session_start();
?>
<html>
        <head>
                <title>Sign Up</title>
                <link rel="stylesheet" href="home.css" type= "text/css">
        </head>
        <body style>
                <div id="banner_container">
                        <div id="logo"><a href="index.php"> <img src="og_logo.jpg"/> </a> </div>
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
                                <li> <a href="FPS.php">FPS</a> </li>
                                <li> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
                <div id="motto">
                        <h3> Sign Up </h3>
                </div>
                <div class="home_content">
			<p>Please fill out form to create an account.</p>
			<form method="post" action="signup_handler.php">
				<div id="username"><label for="Username"><b>Username:</b></label></div>
				<input id="uname" type="text" placeholder="Enter Username" name="username" value="<?php
                                if(isset($_SESSION["placehold_username"])){
                                        echo $_SESSION["placehold_username"];
                                        unset($_SESSION["placehold_username"]);
                                }?>">
				<div id="invalid_username">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["emptyUsername"])){
                                                echo $_SESSION["emptyUsername"];
                                                unset($_SESSION["emptyUsername"]);
                                        }
                                        if(isset($_SESSION["usernameExists"])){
                                                echo($_SESSION["usernameExists"]);
                                                unset($_SESSION["usernameExists"]);
                                        }
					
                                        ?></p> </div>
				<div id="password"><label for="psw"><b>Password:</b></label></div>
				<input type="password" placeholder="Enter Password" name="password" value="<?php
                                if(isset($_SESSION["placehold_password"])){
                                        echo $_SESSION["placehold_password"];
                                        unset($_SESSION["placehold_password"]);
                                }?>">
				<div id="password_error">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["emptyPassword"])){
                                                echo $_SESSION["emptyPassword"];
                                                unset($_SESSION["emptyPassword"]);
                                        }
					if(isset($_SESSION["dontMatch"])){
						echo($_SESSION["dontMatch"]);
						unset($_SESSION["dontMatch"]);
					}
					if(isset($_SESSION["errorPassword"])){
						echo($_SESSION["errorPassword"]);
						unset($_SESSION["errorPassword"]);
					}
                                        ?></p></div>
				<div id="confirmpass"><label for="psw-repeat"><b>Confirm Password:</b></label></div>
				<input type="password" placeholder="Confirm Password" name="confirmPassword" value="<?php
                                if(isset($_SESSION["placehold_confirmPassword"])){
                                        echo $_SESSION["placehold_confirmPassword"];
                                        unset($_SESSION["placehold_confirmPassword"]);
                                }?>">
				<div id="confirmPassword_error">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["cPassword"])){
                                                echo $_SESSION["cPassword"];
                                                unset($_SESSION["cPassword"]);
                                        }
                                        ?></p> </div>
				<div class="clearfix">
					<button type="submit" class="signupbtn">Sign Up</button>
				</div>
				<div class="account">
                                        <a href="login.php">Already Have an Account? Login</a>
                                </div>
			</form>
                </div>
                <div id="footer">
                                        <h4> &copy Original Gaming </h4>
                </div>
        </body>
</html>
