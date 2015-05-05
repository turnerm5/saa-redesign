<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="description" content="<?php echo html($site->description()) ?>">
        <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  		<meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">

        <!-- Css Global Compulsory -->
        <link rel="stylesheet" href="<?php echo u() ?>assets/plugins/bootstrap/css/bootstrap.css"> 
        <!-- Css Implementing Plugins -->
        <link rel="stylesheet" href="<?php echo u() ?>assets/plugins/font-awesome/css/font-awesome.min.css">   
        <!-- Css Theme -->           

        <link rel="stylesheet" href="<?php echo u() ?>assets/plugins/lightbox/css/lightbox.css">
        <link rel="stylesheet" href="<?php echo u() ?>assets/styles/styles.css">
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset;=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo u() ?>assets/fonts/montserrat/style.css">
    </head>
    <body>
    