<?php
  $controller1 = new Controller;
  $users = $controller1->listUsersController();
?>
<ul>
  <?php
    while($user = $users->fetch_object()) {
  ?>
  <li><?= "username: ".$user->usr_username." - created: ".$user->usr_created ?></li>

<?php } ?>
</ul>
