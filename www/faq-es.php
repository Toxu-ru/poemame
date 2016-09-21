<?php
	include('config.php');
	include(mnminclude.'html1.php');
	do_header(_('FAQ') . ' | ' . _('menéame'));
	$q = 1;
?>
<div id="singlewrap">
<div class="faq"">
<h2>Preguntas frecuentes</h2>

<h4><?php echo "$q";$q++;?>. ¿Qué es poémame?</h4>
<p><b>poémame</b> es una comunidad poética donde podrás publicar y compartir tus poemas y creaciones literarias en línea.</p>

<p>Las obras más populares se publicarán en la portada principal de <strong>poémame</strong>: cuando un usuario envía una obra ésta queda en la <a href="queue">cola de pendientes</a> hasta que reúne los votos suficientes para ser publicada en la portada.</p>
</p>

<h4><?php echo "$q";$q++;?>. ¿Hace falta registrarse?</h4>
<p>Sólo es necesario registrarse para enviar poemas y comentar los enviados por otros usuarios.</p>

<h4><?php echo "$q";$q++;?>. ¿Cómo enviar un poema</h4>
<p>Una vez registrado, debes hacer clic en <a href="submit">enviar poema</a>. Se abrirá una ventana donde deberás introducir el <b>título y texto de tu poema</b> así como una serie de <b>etiquetas</b> para identificarlo y facilitar su lectura por otros usuarios.</p>
<p>Es fundamental que el título y el texto estén correctamente escritos, sin faltas de ortografía (de lo contrario tu poema podría resultar penalizado por otros usuarios).</p>
<p>Se recomienda que las etiquetas reflejen, al menos, el género de tu poema (lírico, épico, erótico…) y la clase de estrofa (soneto, copla, haiku…).</p>
<p>Cuando hayas terminado podrás revisar tu poema una última vez, antes de su envío definitivo. No obstante, una vez enviado, aún dispondrás de un breve espacio de tiempo para realizar cambios o correcciones.</p>
<p>Un último consejo importante: en el texto del poema incluye sólo el texto del poema. Si deseas incluir observaciones o comentarios sobre tu poema, hazlo como comentario una vez lo hayas publicado.</p>
<p>No olvides leer nuestras <a href="legal">condiciones de uso</a>.</p>
<h4><?php echo "$q";$q++;?>. ¿Qué tipos de poemas se pueden enviar?</h4>
<p>Los que tú desees, siempre y cuando sean de tu autoría (es decir, que no constituyan plagio ni infrinjan derechos de autor de terceros) y no resulten ofensivos. Los poemas estarán sujetos a la revisión de los lectores y usuarios de poémame que los votarán, o no. </p>
<p>El fin principal de poémame es <b>leer, compartir y hablar sobre poesía</b> así como dar a <b>conocer poetas noveles y sus trabajos</b>. Envía textos de los que te sientas orgulloso o sobre los que quieras recibir opiniones y críticas (que en ocasiones pueden ser ácidas) y procura comentar de manera constructiva sobre el trabajo de los demás.</p>
<p>Usa <b>buenas formas y tu sentido común</b> y mantén un mínimo de espíritu colaborativo y respeto hacia los demás para <b>una comunidad mejor</b>.</p>

<h4><?php echo "$q";$q++;?>. ¿Cómo votar los poemas?</h4>
<p>Selecciona la opción <a href="queue">nuevos</a> y te aparecerán los poemas enviados y no publicados, ordenados descendentemente por fecha de envío.</p>
<p>Sólo tienes que votar o "poemar" aquellos que más te gusten o que consideres singulares, haciendo clic en el botón “¡poémalo!” que hay junto a cada poema.</p>
<p>Una vez superado unos umbrales de votos y karma serán promovidas a la portada principal.</p>
<p>No olvides leer nuestras <a href="legal">condiciones de uso</a>.</p>

<h4><?php echo "$q";$q++;?>. ¿Qué es ese formulario "¿problemas?" que aparece cuando voy a votar poemas pendientes?</h4>
<p>Es un formulario para indicar que un poema o texto presenta alguno de los siguientes problemas: <br />
- <strong>Erróneo</strong>: el envío no es un poema o texto literario, está mal redactado o con numerosas faltas de ortografía, se ha enviado  un sub equivocado, etc. <br />
- <strong>Duplicado</strong>: el envío ya ha sido publicado con anterioridad. <br />
- <strong>Plagio</strong>: el envío presenta de una obra de otro autor como si fuera propia. <br />
- <strong>Ofensivo</strong>: el envío  contiene injurias, insultos o calumnias y/o atenta contra el honor, la intimidad personal y/o la imagen de individuos, entidades o colectivos. <br />
- <strong>Spam</strong>: el envío contiene publicidad o propaganda no solicitada destinada a promocionar productos y servicios. <br />
- <strong>Infracción de derechos de autor</strong>: la totalidad o parte de los contenidos del envío están protegidos por derechos de autor que impiden su reproducción por terceros. </p>

<p>Señalar cualquiera de estos problemas equivale a votar negativamente el poema, por lo que <strong>su uso debe estar completamente justificado y no se debe abusar de él</strong>.</p>
<p>Es además recomendable dejar un comentario que explique de manera respetuosa y constructiva los motivos del problema al autor del envío. Los envíos que reúnan muchos votos negativos serán movidos a la cola de descartados.</p>

<h4><?php echo "$q";$q++;?>. ¿Cómo se seleccionan los poemas que se publican en la portada?</h4>
<p>Lo hace un proceso que se ejecuta cada pocos minutos. Grosso modo, depende del karma, de si los votos son anónimos o no, y del número de problemas reportados (similar a votos negativos). El algoritmo empleado es bastante complejo.</p>
<p>Primero calcula cuál es el karma mínimo que tienen que tener los poemas para ser publicados. Este valor depende de la media del karma de los poemas que fueron promovidos en las últimas dos semanas, más un coeficiente que depende del tiempo transcurrido desde la publicación del último poema. Este coeficiente decrece a medida que pasa el tiempo y se hace uno (1) cuando ha pasado una hora. Eso quiere decir que pasada una hora, cuando el coeficiente se hizo uno, cualquier poema que tenga un karma igual o superior a la media será promovida. Esto tiene dos objetivos, por un lado se persigue que si la calidad es constante se promoverá una media de un poema por hora, pero los que reciban más votos (se espera que sea incremental) serán publicados antes.</p>
<p>El karma de cada poema se calcula multiplicando el número de votos por el karma del autor del voto. Si es anónimo ese voto vale cuatro (4), si es de un usuario registrado el valor es multiplicado por su karma.</p>	
<p>Finalmente hay una restricción adicional para evitar abusos de los usuarios registrados: sólo pueden ser promovidas aquellos poemas que al menos tengan N votos. Donde N actualmente es cinco (5).</p>
<h4><?php echo "$q";$q++;?>. ¿Cómo funciona eso del karma?</h4>
<p>Es una suerte de sistema de puntuación o, mejor dicho, <strong>reputación</strong>. En el wiki de menéame está <a href="http://meneame.wikispaces.com/Karma">perfectamente explicado</a>.</p>

<h4><?php echo "$q";$q++;?>. ¿Qué es esa pestaña "descartadas" en la página de votación de pendientes?</h4>
<p>Cuando un poema recibe más reportes de "problemas" que votos positivos, es movida a esta cola. Los usuarios pueden seguir votando y si consigue los votos suficientes volverá a la cola de pendientes normal.</p>

<h4><?php echo "$q";$q++;?>. ¿Qué es el nótame?</h4>
<p>Una herramienta de comunicación entre los usuarios de <b>poémame</b> que se organiza en pequeños apuntes, como los mini-post de un blog colectivo -de todos los usuarios de nótame- y a la vez individual.	Puedes usarlo para comentar cuestiones relacionadas con <b>poémame</b> o para explicar lo que quieras.</p>

<h4><?php echo "$q";$q++;?>. ¿Qué es la fisgona?</h4>
<p>Muestra lo que sucede en <b>poémame</b> en tiempo real. Si eres usuario registrado también puedes usarla para chatear.</p>

<h4><?php echo "$q";$q++;?>. <a name="we"></a>¿Quién está detrás de poémame?</h4>
<p><b>poémame</b> es un proyecto personal y amateur de Óscar David Sánchez, cuyos datos de contacto puedes encontrar en la página de <a href="legal">condiciones de uso</a>.</p>

<h4><?php echo "$q";$q++;?>. ¿Por qué es tan similar a menéame?</h4>

<p>Porque menéame era un buen punto de partida, se trata de un excelente proyecto de software libre y la interfaz e interacción con el usuario era simple y efectiva. ¿Por qué reinventar la rueda desde cero si ya está bastante redonda?</p>
<p><b>poémame</b> aprovecha las funcionalidades de menéame -su sistema de publicación, moderación por la comunidad y reputación- y lo adapta para compartir poemas y otras creaciones literarias en lugar de enlaces a noticias externas, como es el caso de menéame.</p>

<h4><?php echo "$q";$q++;?>. ¿Qué software se usa?</h4>
<p>El software de <b>poémame</b> está basado en el proyecto original de menéane, desarrollado por Ricardo Galli, Benjamí Villoslada y colaboraciones de terceros, e incorpora modificaciones propias y de otros proyectos derivados de menéame, como copuchalo. Tiene la licencia <a href="http://www.affero.org/oagpl.html">Affero General Public License</a></p>

<h4><?php echo "$q";$q++;?>. ¿Dónde puedo notificar errores, problemas o sugerencias?</h4>
<p>Consulta por favor las formas de contactar con poémame en nuestras <a href="legal">condiciones de uso</a>.</p>

</div>
</div>
<?php

	do_footer_menu();
	do_footer();
