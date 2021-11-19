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



    <!--Mi 404 personalizado-->
    <div id="contenedor">
        <div id="cabecera" class="amarillo">
            <h1 style="text-align: center">HOLA</h1>
        </div>
        <div id="cuerpo">
            <h1 style="color: #996800; text-align: center; margin-top: 5%">Mi 404.php personalizado. <br>Página no
                encontrada.</h1>
            <img style=" display: block; margin: auto"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/404.jpeg ">

        </div>
    </div>
    <div style="margin-top: 20%"><?php get_footer();?></div>
<?php

