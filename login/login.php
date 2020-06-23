
<?php include("includes/heder.php") ;
include("home/navar_home.php")
?>

<?php

  session_start();

  if (isset($_SESSION['idUsusario'])) {
    header('Location: /login.php');
  }
  require 'coneccion_db.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT idUsusario,correo_email, contraseña FROM ususario WHERE correo_email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contraseña'])) {
      $_SESSION['idUsusario'] = $results['idUsusario'];
      header("Location: /login.php");
    } else {
      $message = 'lo sentimos, el correo o contraseña no coiciden con nuestros registros';
    }
  }

?>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
 
    <?php include("includes/footer.php")?>