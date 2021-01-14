<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:login.php");
}
?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="N.A Turismo">
  <title>N.A Turismo | Servicios</title>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <header>
    <div class="contenedorHeader">
      <div class="marca">
        <h1><span class="resaltado">N.A Turismo</span> ¡Que comience el viaje! </h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="">Usuario <strong><?php echo $_SESSION['user'];?></strong> </a></li>
          <li><a href="disconnect.php"> Cerrar Sesión </a></li>
        </ul>
      </nav>
    </div>
  </header>
    
  <section class="main">
    <div class="contenedor">
      <article class="main-col">
        <h1>Servicios</h1>
        <ul class="servicios">
          <li>
            <h3>Vuelos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
            <p>Precio: $300000 - $1000000</p>
          </li>
          <li>
            <h3>Destino1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
            <p>Precio desde: $1000000</p>
          </li>
          <li>
            <h3>Destino2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
            <p>Precio: $300000</p>
          </li>
        </ul>
      </article>

      <aside class="lateral">
        <div class="oscuro">
          <h3>Que hacemos</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna</p>
        </div>
      </aside>
    </div>
  </section>

  <footer>
    <p>N.A Turismo, Copyright &copy; 2020</p>
  </footer>
</body>
</html>
