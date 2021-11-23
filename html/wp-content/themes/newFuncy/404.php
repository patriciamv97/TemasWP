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
    <div id="contenedor">
        <div id="cabecera" >
            <h1 style="text-align: center">HOLA</h1>
        </div>
        <div id="cuerpo">
            <h1 style="color: #996800; text-align: center; margin-top: 1%;">Mi 404.php personalizado. <br>Página no
                encontrada.</h1>
            <img class="center" width="50%" height="50%"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/404.jpeg ">

        </div>
    </div>
    <div style="margin-top: 1%"><?php get_footer();?></div>
<?php

