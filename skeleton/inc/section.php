<!-- PAGINA SECCION -->
<section id="pagina">
<?php
if ($row_page['image_display'] == true) {
	echo "<img src=\"img/covers/".$row_page['image']."\">";
}
?>
	<h2><?= $row_page['title'] ?></h2>
	<p id="pagina-descripcion"><?= $row_page['description'] ?></p>
</section>
