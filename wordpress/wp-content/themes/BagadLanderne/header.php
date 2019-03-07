<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
        <meta name="author" content="">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <!– CSS de Bootstrap –>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <!– Ajout d’une nouvelle feuille de style qui sera spécifique à notre thème –>
        <link href="<?php bloginfo(‘template_directory’);?>/blog.css" rel="stylesheet">
        <!– HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 –>
        <!–[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]–>
        <?php wp_head();?>
    </head>
    <body>
        <div class="header">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_BBL_FondBlanc.png" style="width:auto; height:200px; display: block;margin-left: auto;margin-right: auto;"></a>
        </div>
        <div class="container">