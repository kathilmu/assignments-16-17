<?php

require_once './controller/AuthController.php';

$auth_controller = AuthController::Instance();
$auth_controller->login($msg, $err);
$msg = $auth_controller->get_auth_status_msg();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes Taker</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
</head>
<body>

<nav>
  <div class="nav-wrapper pink">
    <a href="#" class="brand-logo">&nbsp;Notes</a>
  </div>
</nav>

<div class="row" style="margin-top: 10px">
  <form method="post" class="col s12 m4 offset-m4">
    <p class="green-text center-align"><?=isset($msg)? $msg : ''?></p>
    <p class="red-text center-align"><?=isset($err)? $err : ''?></p>

    <div class="row">
      <div class="input-field col s12">
        <input id="name" name="username" type="text" class="validate" placeholder="Enter username">
        <label for="name">Username</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input id="password" name="password" type="password" class="validate" placeholder="Enter password">
        <label for="password">Password</label>
      </div>
    </div>

    <button type="submit" class="waves-effect btn pink" style="width: 100%">Log in</button>

    <div class="row" style="margin-top: 10px">
      <div class="col s3 offset-s5">
        <a href="register.php">Register</a>
      </div>
    </div>

  </form>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>