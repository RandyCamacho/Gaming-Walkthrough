<?php
        require_once "Dao.php";
        session_start();
?>
<html>
        <head>
                <title>Madden 19</title>
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
                                <li> <a href="FPS.php">FPS</a> </li>
                                <li id="current_page"> <a href="Sports.php">Sports</a> </li>
                        </ul>
                </div>
                <div id="motto">
                        <h3> Madden 19 </h3>
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
                                <img class="pics" src="madden.jpg">
                        </div>
			<h5> Offensive Tips </h5>

			<p>The recomended start spot is to choose the ‘Enhanced’ play style option when you’re going into a game of Madden 19, 
			since this gives you more play options on the screen at once.</p> 
			<p>Once you’ve called the play, look at the position of the defence. If they’re close up to your receivers then the coverage is probably man, 
			but if they’re backed off then they’re more likely playing zone. If two or more defenders more before the snap, then it’s very likely a blitz play.</p> 
			<p>If you want to change the route of a receiver, press Y/Triangle, then press the corresponding button for the receiver, and you’ll be able to change 
			their route however you wish. Not confident in the play you’ve called? Press X/Square and you’ll see a list of plays you can switch to, without having 
			to call a timeout and reset entirely.</p>
			<p>When you’ve got the ball as the QB and you’re going to throw a pass, remember that you can hold the button of the receiver for a bullet pass, or tap
			 it for a lob pass, which sails high above defenders. While pressing the button of a receiver to pass the ball, you can also hold the right stick in 
			either direction to lead the receiver in a certain direction. For example if they’ve got a defender to the left of them, throw the ball to the right to 
			take it out of the reach of the defending player.</p>
			<p>When you’re controlling a player that has the ball, hold the right bumper to protect the ball, which helps prevent fumbles.</p>

		</div>
		<div class="comment_title">
                        <h3> Comments </h3>
                </div>
                <div class="comments">
                                <form method="post" action="<?php
                                        if(isset($_SESSION["valid_user"])){
                                                echo "madden_handler.php";
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
                                $comments = $dao->getMaddenComments();
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
