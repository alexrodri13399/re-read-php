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
    <div class="ebook">
      <a href="https://www.amazon.es/petici%C3%B3n-Olivia-Abril-Camino-ebook/dp/B07XP67G28/ref=sr_1_4?dchild=1&qid=1600860231&refinements=p_n_binding_browse-bin%3A1462224031&s=books&sr=1-4"><img src="../img/ebook1.jpg" alt="ebook 1">
      <div>La petición de Olivia</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.amazon.es/tinieblas-alba-precuela-pilares-Tierra-ebook/dp/B08B3P35BL/ref=sr_1_5?dchild=1&qid=1600860231&refinements=p_n_binding_browse-bin%3A1462224031&s=books&sr=1-5"><img src="../img/ebook2.jpg" alt="ebook 2">
      <div>Las tinieblas y el alba</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.amazon.es/KYLE-Serie-Escoceses-n%C2%BA-4-ebook/dp/B08GTMN9NK/ref=sr_1_17?dchild=1&qid=1600860231&refinements=p_n_binding_browse-bin%3A1462224031&s=books&sr=1-17"><img src="../img/ebook3.jpg" alt="ebook 3">
      <div>KYLE</div></a>
    </div>
    <div class="ebook">
      <a href="https://www.amazon.es/Rey-blanco-Juan-G%C3%B3mez-Jurado-ebook/dp/B08C35GM6B/ref=sr_1_10?dchild=1&qid=1600860231&refinements=p_n_binding_browse-bin%3A1462224031&s=books&sr=1-10"><img src="../img/ebook4.jpg" alt="ebook 4">
      <div>Rey blanco</div></a>
    </div>
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
