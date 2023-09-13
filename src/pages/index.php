<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <script src="../assets/js/navigation.js"></script>
</head>

<body>
  <?php include "../includes/menu.php" ?>

  <main class="ml-60">
    <section class="flex-1 px-8 py-4">
      <?php include "../includes/buscador.php" ?>
      <div class="grid grid-cols-4 gap-4 py-8">
        <?php
        $id = 1;
        include "../includes/book.php"
        ?>
        <?php
        $id = 2;
        include "../includes/book.php"
        ?>
        <?php
        $id = 3;
        include "../includes/book.php"
        ?>
        <?php
        $id = 4;
        include "../includes/book.php"
        ?>
        <?php
        $id = 5;
        include "../includes/book.php"
        ?>
        <?php
        $id = 6;
        include "../includes/book.php"
        ?>
      </div>
    </section>
  </main>

</body>

</html>