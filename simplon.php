<?php
/*
Plugin Name: Simplon
Plugin URI: https://marionbonnet.referentnumerique.insa-rouen.fr
Description: Ceci est mon premier plugin
Author: Marion Bonnet
Version: 1.0
*/


function html_simplon() {
$code_mention_simplon="<section class='main-text'>
	<hr style='max-width:100% !important;'>
	<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <strong>Référent.e Numérique Entreprise</strong> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span style='color: darkred'>3 certifications</span>. <br>
	Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. <br>
	La formation est menée conjointement par : </p>
	<ul>
		<li>l'<a href='https://www.insa-rouen.fr/' style='text-transform: uppercase;'>Insa</a> ;</li>
		<li>le <a href='https://www.cesi.fr/' style='text-transform: uppercase;'>Cesi</a> ;</li>
		<li><a href='https://simplonline.co/'>Simplon.co</a>.</li>
	</ul>
	<hr style='max-width:100%;'>
</section>";

return $code_mention_simplon;
}

add_shortcode ('simplon', 'html_simplon') ;

