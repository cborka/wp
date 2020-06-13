<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Тема wordpress cborka19 - minimalism</title>

    <meta name="description" content="Минималистичная тема для wordpress">
    <meta name="author" content="cborka">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="favicon.ico" >


    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
</head>
<body>

<header> <!-- Header Begin -->

    <div><a href="<?php echo home_url() ?>" >Блог "<?php bloginfo("Name") ?>" </a></div>

<?php wp_nav_menu( [
        'theme_location'  => 'top'
    ] );
    ?>

</header> <!-- Header End -->
