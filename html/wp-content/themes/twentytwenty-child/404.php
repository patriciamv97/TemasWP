<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <div id="contenedor" class="static">
        <div id="cabecera" class="relative2" >
            <h1 style="text-align: center">HOLA</h1>
        </div>
        <div id="cuerpo" class="absolute">
            <h1 style="color: #996800; text-align: center; margin-top: 1%;">Mi 404.php personalizado. <br>Página no
                encontrada.</h1>
            <img class="relative"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/404.jpeg ">

        </div>
    </div>
    <div class="fixed"><?php get_footer();?></div>
<?php

