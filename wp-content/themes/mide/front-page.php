<?php
/*
Template Name: Home
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body>
	
		<header>
			<div id="logodiv">
				<img src="<?php bloginfo('template_directory'); ?>/images/midelogo.png" alt="<?php bloginfo('name'); ?>" id="logo"/>
			</div>
		</header>

	
		<div id="quotediv">
			<q id="myquote">“Uma máquina pode fazer o trabalho de cinquenta pessoas comuns,<br> mas nenhuma máquina o poderá fazer como uma pessoa extraordinária”</q>
			<p id="autor"> Elbert Hubbard </p>
		</div>

		<div id="slogandiv">
			<p id="slogan">Nós podemos mostrar-lhe o caminho</p>
		</div>

		<div class="formdiv">
			<?php
				$widgetNL = new WYSIJA_NL_Widget(true);
				echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
			?>
			<div class="clear"></div>
		</div>
		
		<div class="botdiv">
			<p id="newsletter" class="bot">Tenha acesso à nossa newsletter</p>
			<p id="hello" class="bot">Ou contacte-nos: hello@wpbox.io</p>
			<img src="<?php bloginfo('template_directory'); ?>/images/box.png" alt="<?php bloginfo('name'); ?>" id="box"/>
		</div>
		


			
	

</body>

<footer>
</footer>
