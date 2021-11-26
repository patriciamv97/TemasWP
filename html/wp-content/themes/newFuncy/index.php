<!doctype html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <title>New Funcy</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri() ?>"/>


</head>

<body>

<?php get_header();
define('WP_USE_THEMES', false) ?>

<div id="cuerpo">

    <?php
    echo get_stylesheet_uri();
    echo '<h1 class="morado">Hola Funcy</h1>';
    ?>

    <?php include("header.php"); ?>
    <!-- Código que muestra los post de wordpress -->
    <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <!-- Display the Title as a link to the Post's permalink. -->
        <h2><a href="<?php the_permalink(); ?>" style="color: #0A246A" rel="bookmark"
               title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

        <!-- Stop The Loop (but note the "else:" - see next line). -->
    <?php endwhile; else : ?>


        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


        <!-- REALLY stop The Loop. -->
    <?php endif; ?>
</div>

<?php get_footer() ?>
</body>
</html>
