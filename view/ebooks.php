<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Estilos enlazados-->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

<div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<div class="row">
  
  <div class="column left">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>
  
    <h3>Toda la actualidad en eBooks.</h3>
    <!--Ebooks con descripcion-->

    <?php 
    // 1. Conexión con la base de datos.
    include '../services/connection.php';

    // 2. Selección y muestra de datos de la base de datos.
    $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != 'o'");

    if (!empty($result) && mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila (fila = row)
      while ($row = mysqli_fetch_array($result)) {
        echo "<div class='ebook'>";
        // Añadimos la imagen a la página con la etiqueta img de HTML
        echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
        // Aádimos el título a la pagina con la etiqueta h2 de HTML
        //echo "<div class='desc'".$row['Title']." </div>";
        echo "</div>";
      }  
    } else {
      echo "o resultados";
    }
  ?>
  </div>
  <div class="column right">
  <h3>Top Ventas</h3>
  <?php 
    // 1. Conexión con la base de datos.
    include '../services/connection.php';

    // 2. Selección y muestra de datos de la base de datos.
    $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = '1'");

    if (!empty($result) && mysqli_num_rows($result) > 0) {
    // datos de salida de cada fila (fila = row)
      while ($row = mysqli_fetch_array($result)) {
        // Añadimos la imagen a la página con la etiqueta img de HTML
        echo "<p>".$row['Title']."</p>";
      }  
    } else {
      echo "o resultados";
    }
    ?>
  </div>

</div>
  
</body>
</html>
