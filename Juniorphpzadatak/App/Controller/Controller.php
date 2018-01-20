<?php
class Controller extends Model {
    public function index (){
      include_once("App/View/index.php");
    }
    public function login (){
      include_once("App/View/login.php");
    }
    public function register (){
      include_once("App/View/register.php");
    }
    public function user (){
      include_once("App/View/User/index.php");
    }
    public function logout (){
      include_once("App/View/User/logout.php");
    }
    public function listUsers (){
      include_once("App/View/User/list.php");
    }
    public function loginUserController($username, $password){
      $row = $this->loginUserModel($username, $password);
      if($row->num_rows == 1){
        session_start();
        $_SESSION["username"] = $_REQUEST['username'];
        header('Location: http://localhost/Juniorphpzadatak/?page=user');
      }
    }
    public function registerUserController($username, $password, $confirmpassword){
      if($password===$confirmpassword){
        if ($response = $this->registerUserModel($username, $password)/*TRUE or FALSE*/ === TRUE) {
          echo "New record created successfully";
          echo '<script type="text/javascript">setTimeout(function(){ window.location = "http://localhost/Juniorphpzadatak/?page=login"; }, 2000)</script>';
        } else {
          echo "Error".$response;
        }
      }
    }
    public function listUsersController(){
      return $this->listUsersModel();
    }
}
