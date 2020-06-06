<!-- FOOTER -->
<footer>
	<div>
		<a href="/"><img id="logo-footer" src="web/img/logo/logo.svg" alt="Logotipo"></a>
	</div>
	<div>
		<h2>MAPA DEL SITIO</h2>
		<ul>
			<?php
				$sql_nav = $mysqli->query("SELECT page FROM web_pages WHERE display = 1");
				$row_nav = $sql_nav->fetch_assoc();
				do {
			?>

			<li><a class="btn-<?= $row_nav['page'] ?>" href="?page=<?= $row_nav['page'] ?>"><?= $row_nav['page'] ?></a></li>
			<?php
				} while ($row_nav = $sql_nav->fetch_assoc())
			?>

		</ul>
	</div>
	<div>
		<h2>PRODUCTOS</h2>
		<ul>
			<li><a href="ingresar">Ingresar</a></li>
		</ul>
	</div>
	<div>
		<h2>USUARIO</h2>
		<ul>
			<li><a href="ingresar">Ingresar</a></li>
		</ul>
	</div>
	<div id="redes-sociales">
		<a href="#"><div class="btn-facebook"></div></a>
		<a href="#"><div class="btn-instagram"></div></a>
		<a href="#"><div class="btn-twitter"></div></a>
	</div>
</footer>
</body>
</html>
