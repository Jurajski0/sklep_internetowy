<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kep & zoś</title>
    <link rel="stylesheet" href="styles/login.css"/>
    <script src="https://kit.fontawesome.com/0811bb0147.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="background">
      <div class="form-box">
        <h1 id="title">Sign up</h1>
        <div class="buttons">
          <button type="button" id="signUpButton">Sign up</button>
          <button type="button" class="disable" id="signInButton">Sign in</button>
        </div>
        <form method="post">
          <div class="input-group">
            <div class="input-field" id="nameField">
              <i class="fa-solid fa-user"></i>
              <input type="text" name="username" placeholder="Username"/>
            </div>
            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" name="email" placeholder="E-mail"/>
            </div>
            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="password" placeholder="Password"/>
            </div>
            <button name="submit" class="submit-button">Submit</button>
          </div>
        </form>

        <?php
          if(isset($_POST["submit"]))
          {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $input = $pdo -> prepare("INSERT INTO users (username, email, password) VALUES(:username, :email, :password)");
            $input -> bindValue(':username', $username, PDO::PARAM_STR);
            $input -> bindValue(':email', $email, PDO::PARAM_STR);
            $input -> bindValue(':password', $password, PDO::PARAM_STR);
            $exec = $input -> execute();
            echo "<meta http-equiv='refresh' content='0'>";
          }
        ?>

      </div>
    </div>
    <script src="scripts/login.js"></script>
  </body>
</html>