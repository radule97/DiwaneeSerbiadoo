<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post" class="login-form">
      <input type="text" name="username" placeholder="Enter Username"><br><br>
      <input type="text" name="password" placeholder="Enter Password"><br><br>
      <button type="submit">Sing in</button>
    </form>
  </body>
</html>
<style media="screen">
  .login-form {
    padding: 15px;
    border-radius: 5px;
    background: rgb(150, 167, 171);
    width: 300px;
    margin: 100px auto;
  }
  .login-form input {
    width: 100%;
    height: 30px;
    border:1px solid rgb(255, 92, 0);
  }
  .login-form button {
    width: 100px;
    border:1px solid rgb(255, 92, 0);
    margin-left: 33%;
  }
</style>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $controller1 = new Controller;
  $controller1->loginUserController($_REQUEST['username'], $_REQUEST['password']);
}
?>
