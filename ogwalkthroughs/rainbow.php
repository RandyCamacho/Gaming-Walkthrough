<?php
        require_once "Dao.php";
        session_start();
?>
<html>
        <head>
                <title>Tom Clancy</title>
                <link rel="stylesheet" href="home.css" type= "text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="ajax.js"></script>
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
                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="RPG.php">RPG</a> </li>
                                <li id="current_page"> <a href="FPS.php">FPS</a> </li>
                                <li> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
                <div id="motto">
                        <h3> Rainbow Six </h3>
			<?php
                                        if (isset($_SESSION['message'])) {
                                                $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
                                                echo "<div class='" . $sentiment . "' id='message'>" . $_SESSION['message'] . "</div>";
                                        }
                                        unset($_SESSION['message']);
                         ?>
                </div>
		<div class="r6_content">
                        <div>
				<img class="pics" src="r6gamePage.jpg">
			</div>

			<h5> Basics </h5>
				<p>The first thing you want to do when you start up Rainbow Six is watch all three tutorial videos. 
				These provide a quick overview of some of the components in the game </p>

				<p>Then I recommend jumping into ‘Situations’, which is a PVE playground that teaches you 
				fundamental basic controls, maps, and general gadget utility in the game. The maps here are the same in multiplayer, so you can learn the common tactics.
				Understanding the maps is important in order to move tactically, so take your time and be sure to study.</p>	
	
                        <h5> Communication </h5>
				<p>If you’re looking to get into Rainbow Six Siege, the first thing you need to know is that the majority of operators require coordination between teammates. 
			Therefore you need to be able to communicate with your team. </p> 

				<p>There are ways to do this in-game, but really you should have the ability to talk verbally in order to ensure the enemy aren’t alerted to something you 
			know and you’re not stopping to type. It should be a requirement that players of Rainbow Six Siege wear a headset with a microphone. </p>
                
			<h5> Settings and Controls </h5>

				<p>It’s also worth taking some time to familiarise yourself with the controls. You shouldn’t need to change anything unless you have a particular setup you like,
				 but it’s important that you know what button does what for things like using your abilities and leaning side to side. 
				It could make the difference between seeing an enemy and eating a face full of lead.</p>

				<p>Make sure you have the right settings. It's the quickest way to improve your game right out of the gate.
				Out of everything in the settings tab “Advanced” Gadget Deployment is a must! This requires you to hold down the 
				deployment of a gadget or reinforcement in order to complete the action, allowing you to immediately stop what 
				you're doing by releasing the button if someone is attacking you. Those couple seconds are an eternity when an opponent 
				gets a drop on you, so do yourself a favor, and get used to running "Advanced" deployment. </p>
				
				<p>For console players, lower your analog stick dead zones! Doing this requires less pressure on the joystick to move your 
				character and weapons allowing you to move your cross hairs while aiming down sights. 
				It’s also important to get the game control sensitivity to your liking. Generally it's better to have higher sensitivity 
				in order to react and move more quickly, so try increasing both horizontal and vertical sensitivity daily to increase your reaction time. 
				Just don't go overboard where your operator becomes uncontrollable – start slow and get a feel for it as you go. </p>
			
			<h5> Lean Wit' It Rock Wit' It </h5>
				<p>Leaning is a crucial part of this game! It allows you to look around corners while only exposing a small part of your head. 
				Making it a lot harder for enemies to aim at you. Yes, PC players have an advantage where they can lean without aiming, but 
				if you don't want to get domepieced, you should be learning to lean no matter what platform you're on. </p>

			<h5> Know Your Operators </h5>
				<p> Each operator in seige has their own special ability which if used correctly can become a major advantage. Take your time and learn what 
				each operator can do and how they can benefit your team. </p>

		</div>
		<div class="comment_title">
                        <h3> Comments </h3>
                </div>
		<div class="comments">
				<form method="post" action="<?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "rainbow_handler.php";
                                        }
                                        else{
                                                echo "login.php";
                                        }
                                ?>">
      				<div><input class="comment_input" type="text" placeholder="Enter Comment" name="comment">
      				<button class="comment_submit" type="submit">
					<?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "Submit";
                                        } else{
                                                echo "Log In to Comment";
                                        }
                                	?>

				 </button>
				</div>
				</form>
			<?php
				$dao = new Dao();
    				$comments = $dao->getRainbowComments();
    				echo "<table>";
    				foreach ($comments as $comment) {
      				echo "<tr>";
				echo "<td>" . $comment["username"] . "</td>";
      				echo "<td>" . htmlspecialchars( $comment["comment"]) . "</td>";
      				echo "<td>" . $comment["date_created"] . "</td>";
      				echo "</tr>";
    				}
    				echo "</table>";
    			?>
		</div>
<!-- footer leaving space at the bottom: possibly because not enough info on page, for now will be fixed -->

                <div id="footer">
                        <h4> &copy Original Gaming </h4>
                </div>
        </body>
</html>
