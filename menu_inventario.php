<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú Inventario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Sistema de Inventario</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="menuInventario" data-bs-toggle="dropdown">
            Inventario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="consultar_producto.php">Consultar y modificar producto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
    <h3>Bienvenido al módulo de inventario</h3>
    <p>Selecciona <strong>Inventario &raquo; Consultar y modificar producto</strong> en el menú superior.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
