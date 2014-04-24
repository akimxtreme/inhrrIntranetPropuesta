<?php
include_once('funciones.php');
html_inicio('Prototipo Intranet');
banner();
menu_horizontal();
// Inicio 1era División
echo '<div class="row" id="contenido1">';
	////////////////////////////////////////
	echo '<div class="large-3 columns">';
	menu_vertical();
	circulares('Circulares');
	echo '</div>';
	////////////////////////////////////////
	slide();
	
	echo '<a href="#" class="button success large-3" title="Oficina Virtual - Sistemas">Oficina Virtual - Sistemas</a>';
	fecha();
	noticia_externa('Noticia Externa');
	noticia_principal('Noticia Principal del INHRR');

echo '</div>';
// Fin de la 1era División

// Inicio 2da División
echo '<div class="row " id="contenido2">';
	echo '<div class="large-3 columns">';
	acontecimientos('Acontecimientos del Mes');
	echo '</div>';
	noticias_secundarias('Noticias Secundarias del INHRR');
	echo '</div>';
echo '</div>';
pie();
html_cierre();
?>
