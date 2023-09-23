<?php
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "../services/conexion.php";
  include "../services/user.php";

  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $result = registerUser($username, $password, $email);

  if ($result) {
    session_start();
    $_SESSION["id"] = $result["id"];
    $_SESSION["name"] = $result["name"];
    header("Location: ./index.php");
  } else {
    $error = true;
  }
}
?>
<?php
$title = "Registrarse";
include "../includes/header.php";
?>



<section class="h-full pt-16">
  <h1 class="text-2xl">Registrarse</h1>
  <form class="flex flex-col gap-4 py-4" action="" method="post">
    <input class="py-2 px-4 outline-none border" type="text" name="username" placeholder="nombre" required>
    <input class="py-2 px-4 outline-none border" type="password" name="password" placeholder="contraseña" required>
    <input class="py-2 px-4 outline-none border" type="email" name="email" placeholder="email" required>
    <?php if ($error) { ?>
      <p class="text-white bg-red-400 py-2 px-4 rounded">El usuario ya existe, no se pudo registrar</p>
    <?php } ?>
    <button class="py-2 px-4 bg-orange-200">Registrar</button>
  </form>
  <p>¿Ya tienes una cuenta? <a class="text-orange-600" href="./login.php">Iniciar sesión</a></p>
</section>


<?php include "../includes/footer.php" ?>