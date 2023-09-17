<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include "../services/user.php";

  $username = $_POST["username"];
  $password = $_POST["password"];

  $res = loginUser($username, $password);

  if ($res) {
    session_start();
    $_SESSION['usuario_id'] = $id_del_usuario;
    $_SESSION['nombre_usuario'] = $nombre_de_usuario;
    header("Location: ./index.php");
  }
}
?>
<?php
$title = "Iniciar Sesion";
include "../includes/header.php";
?>

<section class="pt-16">
  <h1 class="text-2xl">Iniciar Sesion</h1>
  <form class="flex flex-col gap-4 py-4" action="" method="post">
    <input class="py-2 px-4 outline-none border" type="text" name="username" placeholder="nombre">
    <input class="py-2 px-4 outline-none border" type="password" name="password" placeholder="contraseña">
    <button class="py-2 px-4 bg-orange-200">Iniciar Sesion</button>
  </form>
  <p>¿No tienes una cuenta? <a class="text-orange-600" href="signup.php">Registrarse</a></p>
</section>

<?php include "../includes/footer.php" ?>