<?php
	include('config.php');
	include(mnminclude.'html1.php');
	do_header(_('Licencias') . ' | ' . _('poémame'));
	$q = 1;
?>
<div id="singlewrap">
<div class="faq"">
<h2>Licencias</h2>
<h4>1. Código fuente</h4>
<p>El código fuente de poémame está disponible bajo la licencia <a href="https://www.gnu.org/licenses/agpl-3.0.en.html">Affero GPL</a>.</p>

<h4>2. Imágenes</h4>
<p>El fondo de poémame está basado en el motivo Dark Embroidery elaborado por <a href="http://www.listvetra.ru/">Listvedra</a> y disponible en <a href="http://subtlepatterns.com/dark-embroidery/">Subtle Patterns</a> bajo licencia CC BY-SA.</p>

<p>El logotipo (la pluma) de poémame está basado en el icono Feather Free Icon elaborado por <a href="http://www.flaticon.com/authors/freepik">Freepik</a> y disponible en <a href="http://subtlepatterns.com/dark-embroidery/">Flaticon</a> bajo la licencia <a href="http://file000.flaticon.com/downloads/license/license.pdf">Free License (with Attribution)</a> de Flaticon.</p>

<h4>3. Contenidos</h4>
<p>Para todos los otros contenidos de poémame se estará a lo dispuesto en la cláusula 3 de las <a href="legal">Condiciones de Uso</a>.</p>

<p>En particular, los usuarios de poémame conservan el copyright y todos los demás derechos que ya tuviesen sobre los contenidos que envíen, o pongan a disposición, a través de poémame, en los términos establecidos en las <a href="legal">Condiciones de Uso</a>.</p>

</div>
</div>
<?php

	do_footer_menu();
	do_footer();
