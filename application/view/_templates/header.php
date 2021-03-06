<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MSV Streefkerk</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>">Home</a></li>
          <li <?php if (View::checkForActiveController($filename, "event")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>event">Evenementen</a></li>
          <li <?php if (View::checkForActiveController($filename, "media")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>media">Media</a></li> 
          <li <?php if (View::checkForActiveController($filename, "verenigingen")) { echo ' class="active" '; } ?>> <a href="<?php echo Config::get('URL'); ?>">Omgeving</a></li> 
        </ul>
      </div>
    </nav> -->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>">Home</a></li>
            <li <?php if (View::checkForActiveController($filename, "event")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>event">Evenementen</a></li>
            <li <?php if (View::checkForActiveController($filename, "media")) { echo ' class="active" '; } ?>>        <a href="<?php echo Config::get('URL'); ?>media">Media</a></li> 
            <li <?php if (View::checkForActiveController($filename, "verenigingen")) { echo ' class="active" '; } ?>> <a href="<?php echo Config::get('URL'); ?>">Omgeving</a></li> 
          </ul>


        </div><!--/.nav-collapse -->
      </div>
    </nav>
