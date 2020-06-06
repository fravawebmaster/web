<!-- HEADER -->
<header>
	<!-- LOGO -->
	<a id="logo" href="/"><img src="web/img/logo/logo.svg" alt="Logotipo"></a>
	<!-- USUARIO -->
	<div id="usuario">
		<div>
			<div class="icono-buscar"></div>
			<ul>
				<li><a href="#">Pagina</a></li>
				<li><a href="#">Preguntas frecuentes</a></li>
			</ul>
		</div>
		<div>
			<div class="icono-usuario"></div>
			<ul>
				<li><a href="#">Nuevo usuario</a></li>
				<li><a href="#">Ingresar</a></li>
			</ul>
		</div>
		<div>
			<div class="icono-carrito"></div>
			<ul>
				<li><a href="#">Almacén</a></li>
			</ul>
		</div>
	</div>
	<!-- NAVEGACION -->
	<nav>
		<div class="icono-menu"></div>
		<ul>
			<?php
				$sql_nav = $mysqli->query("SELECT page FROM web_pages WHERE display = 1 ");
				$row_nav = $sql_nav->fetch_assoc();
				do {
			?>
			
			<li><a class="btn-<?= $row_nav['page'] ?>" href="?page=<?= $row_nav['page'] ?>"><?= $row_nav['page'] ?></a></li>
			<?php
				} while ($row_nav = $sql_nav->fetch_assoc())
			?>
			
		</ul>
	</nav>
</header>
