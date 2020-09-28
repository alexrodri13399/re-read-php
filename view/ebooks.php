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
    <!--<<div class="ebook">
      a href="https://www.amazon.es/petici%C3%B3n-Olivia-Abril-Camino-ebook/dp/B07XP67G28/ref=sr_1_4?dchild=1&qid=1600860231&refinements=p_n_binding_browse-bin%3A1462224031&s=books&sr=1-4"><img src="../img/ebook1.jpg" alt="ebook 1">
      <div>La petición de Olivia</div></a>
    </div>-->
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
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto..</p>
  </div>

</div>
  
</body>
</html>
