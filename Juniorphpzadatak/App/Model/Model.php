<?php
class Model {
  protected $conn;

  function __construct($servername = "localhost", $username = "root", $password = "", $dbname = "jphpa"){
    // Create connection
    $this->conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
    }
  }
  public function loginUserModel($username, $password){
    $conn = $this->getConn();
    $sql = "SELECT * FROM users WHERE usr_username = '$username' AND usr_password = '$password'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }
  public function registerUserModel($username, $password){
    $conn = $this->getConn();
    $sql = "INSERT INTO users (usr_username, usr_password) VALUES ('$username', '$password')";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }
  public function listUsersModel(){
    $conn = $this->getConn();
    $sql = "SELECT usr_username, usr_created FROM users ORDER BY usr_created DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }

  public function getConn() {
		return $this->conn;
	}

	public function setConn($conn) {
		$this->conn = $conn;
	}
}
