<?php
        require_once "Dao.php";
        session_start();
?>
<html>
        <head>
                <title>Sekiro</title>
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
                                <li id="current_page"> <a href="RPG.php">RPG</a> </li>
                                <li> <a href="FPS.php">FPS</a> </li>
                                <li> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
		<div id="motto">
                        <h3> Sekiro: Shadows Die Twice </h3>
			<?php
                                        if (isset($_SESSION['message'])) {
                                                $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
                                                echo "<div class='" . $sentiment . "' id='message'>" . $_SESSION['message'] . "</div>";
                                        }
                                        unset($_SESSION['message']);
                         ?>
                </div>
                <div class="game_content">
                        <div>
                                <img class="pics" src="sekiro.jpg">
                        </div>

			<h5> This Guide </h5>
			<p>Sekiro: Shadow's Die Twice is one tough game - perhaps From Software's toughest game to date - requiring some genuine 
			skill and a real shake-up of the tried-and-tested methods you might have used in the DarkSouls games gone by.</p>

			<p> This Sekiro guide will be focused on the bosses you face throughout the game and how to defeat them. As I currently
			work through this difficult game myself more bosses will be added.</p>

			<h5> Ashina Outskirts </h5>
			<p>Leader Shigenori Yamauchi is the first mini boss in Sekiro, found in the game's prologue area, Ashina Reservoir, 
			following on from your first introduction to basic combat. You'll find Yamauchi shortly after you first meet Lord Kuro, 
			the small boy you've set out to save, in the Moonlit Tower in the Ashina Reservoir area.</p>
			<p>This is where you get your first taste of the most fundamental elements of Sekiro's combat though: Deflecting and Counter-slashing.
			To beat Yamauchi you're going to need to not only break down his Posture with standard attacks; you're going to need to deflect his,
			 and counter with some follow-up hits shortly after each time you do. Wait for him to strike, then deflect and you'll hear a nice, 
			ringing sound of blade's clashing, and he'll step back, staggered a little. You will at this point be able to land at least two hit on him.</p>
			<p>Deflecting attacks is the most fundamental way that you're going to deal larger amounts of Posture damage in this game. So try to 
			actually use it and not rely on the crutch of just hammering away at his defenses mindlessly. He has two deathblow markers so you'll have to 
			break down his posture and land the deathblow twice. And with that hopefully you defeated your first mini boss.</p>

			<p>General Naomori Kawarada is the second mini boss in Sekiro. You'll find General Naomori Kawarada hanging out by a closed gate in a yard shortly 
			after another gate, the one with the three wolves in front of it.</p>
			<p>General Naomori Kawarada is a similar kind of mini-boss to Leader Shigenori Yamauchi. He has two Deathblow markers like usual, and will teach you 
			the important of mastering another new fundamental of Sekiro combat: Perilous attacks. There are three kinds of Perilous Attack, and to 
			'teach' you the basics of the system General Naomori Kawarada will at least two of them.</p>
			<p> The most frequent Perilous Attack he uses is a 'sweep'. The counter to this is to jump - and actually, press jump again when in the air 
			above him to kick him and do some heavy Posture damage. The other is a grab - this one you can't block, and he'll do heavy damage if he lands it.
			You need to tap dodge and a direction to get away from it when you see him begin the animation. Countering and dodging his perilous attacks will
			allow you to eventually defeat the general.</p>

			<p>The Chained Ogre is one of the first bosses in the game. You'll find the Chained Ogre boss chained up almost immediately after the Ashina Outskirts Wall.
			Approaching the Chained Ogre you'll have a chance to eavesdrop on two grunts. They'll mention the fact that fire, in particular, seems to be a pretty 
			good weapon of choice for it. This is where your Prosthetic - specifically the Flame Vent Prosthetic Tool, which acts as a short-range, short burst flamethrower
			will come in handy. Throw Oil - a commonly-found quick item - at an enemy when you're locked onto them and then when you're close enough and safe enough to do so,
			use your Flame Vent Prosthetic to blast them with fire and set them ablaze.</p>
			<p>The Flame Vent Prosthetic Tool is found in the Hirate Estate area which can be accessed by taking the bell charm from the blind lady you spoke to shortly 
			before finding this Ogre back to the Dilapidated Temple and showing it to the golden Buddha. </p>
			<p>When he's on fire, the Ogre will take a small amount of Vitality damage, but more importantly he'll be stunned for several seconds. This will allow 
			you to get about four or five hits on him before needing to back off.</p>
			

		</div>
                <div class="comment_title">
                        <h3> Comments </h3>
                </div>
                <div class="comments">
                                <form method="post" action="<?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "sekiro_handler.php";
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
                                $comments = $dao->getSekiroComments();
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

