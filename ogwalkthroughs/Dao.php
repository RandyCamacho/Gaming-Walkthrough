<?php

class Dao {
  private $host = "us-cdbr-iron-east-03.cleardb.net";
  private $db = "heroku_80fee65669131c2";
  private $user = "b2bd2ea5f8b101";
  private $pass = "babae278";

	public function getConnection () {
		try {
			$conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
		} catch (Exception $e) {
			echo("Error in connecting to the Database");
			exit;
		}
		return $conn;
  	}

	public function checkCredentials ($username, $password) {
		$conn = $this->getConnection();
		$select_query = "SELECT username FROM user WHERE username = :username AND password = :password";
		$q = $conn->prepare($select_query);
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
		$q->execute();
		return reset($q->fetchAll());
  	}

	public function saveRainbowComment ($username, $comment) {
   		$conn = $this->getConnection();
   		$saveQuery = "INSERT INTO rainbow_comment (username, comment) values (:username, :comment)";
    		$q = $conn->prepare($saveQuery);
    		$q->bindParam(":comment", $comment);
		$q->bindParam(":username", $username);
    		$q->execute();
  	}

	public function getRainbowComments () {
   		 $conn = $this->getConnection();
    		return $conn->query("SELECT * FROM rainbow_comment ORDER BY date_created desc");
  	}
	public function saveMaddenComment ($username, $comment) {
                $conn = $this->getConnection();
                $saveQuery = "INSERT INTO madden_comment (username, comment) values (:username, :comment)";
                $q = $conn->prepare($saveQuery);
                $q->bindParam(":comment", $comment);
                $q->bindParam(":username", $username);
                $q->execute();
  	}
	public function getMaddenComments () {
                 $conn = $this->getConnection();
                return $conn->query("SELECT * FROM madden_comment ORDER BY date_created desc");
  	}

	 public function saveSekiroComment ($username, $comment) {
                $conn = $this->getConnection();
                $saveQuery = "INSERT INTO sekiro_comment (username, comment) values (:username, :comment)";
                $q = $conn->prepare($saveQuery);
                $q->bindParam(":comment", $comment);
                $q->bindParam(":username", $username);
                $q->execute();
  	}
        public function getSekiroComments () {
                 $conn = $this->getConnection();
                return $conn->query("SELECT * FROM sekiro_comment ORDER BY date_created desc");
  	}
	public function checkUsername ($username){
		$conn = $this->getConnection();
		$select_query = "SELECT username FROM user WHERE username = :username";
		$q = $conn->prepare($select_query);
		$q->bindParam(":username", $username);
		$q->execute();
		return reset($q->fetchAll());
	}

	public function createUser ($username, $password){
		$conn = $this->getConnection();
		$saveQuery = "INSERT INTO user (username, password) values (:username, :password)";
		$q = $conn->prepare($saveQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":password", $password);
		$q->execute();
	}
}

?>
