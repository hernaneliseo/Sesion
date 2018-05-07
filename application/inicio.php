 <!DOCTYPE html>
<html>
<head>
	<title>Tienda 2GRL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<header>
				<h2>Tienda 2GRL</h2>
				<img>
			</header>
			  <nav>
      <ul class="dropdownmenu">
        <li><a href="#">Clientes</a>
          <ul id="submenu">
            <li><a href="agregar_usuario.php">Agregar</a></li>
            <li><a href="buscar_usuario.php">Buscar</a></li>
            <li><a href="listar_usuario.php">Listar</a></li>
          </ul>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="vendedores.php">Vendedores</a></li>
        <li><a href="#">Clientes</a>
          <ul id="submenu">
            <li><a href="agregar_cliente.php">Agregar</a></li>
            <li><a href="buscar_cliente.php">Buscar</a></li>
            <li><a href="listar_cliente.php">Listar</a></li>
          </ul>
        <li><a href="#">Compras</a>
        <ul id="submenu">
            <li><a href="agregar_cliente.php">Agregar</a></li>
            <li><a href="buscar_cliente.php">Buscar</a></li>
                      <li><a href="listar_precio.php">Listar de Precio</a></li>
          </ul>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="salir.php">Salir</a></li>
      </ul>
    </nav>
			</div>
			<div id="contenido">
			<article>
				<?php
					echo "<h1>Bienvenido Administrador</h1>";
				?>
			</article>
			</div>
			<div id="pie">
				<address>Pagina web creada para la tienda 2GRL &reg; Perido IV<br />
				autor:Cristina Dayanara Mendieta Sanchez - 2017 &copy;</address>
			</div>
			</div>
</body>
</html>