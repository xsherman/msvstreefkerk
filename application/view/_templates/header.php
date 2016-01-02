<!doctype html>
<html>
<head>
    <title>MSV Streefkerk</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap-menu.css" />
</head>
<body>
    <!-- wrapper, to center website -->
    <div class="wrapper">
               
        <nav class="navbar">
            <div class="container">
                <div class="underline-nav"></div>
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo Config::get('URL'); ?>css/logo.png" width="150px"></a>
                </div>
                
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evenementen <span class="caret"></span></a>              
                            <ul class="dropdown-menu">
                                <li><a href="#">Kerstmarkt</a></li>
                                <li><a href="#">Jaarmarkt</a></li>
                                <li><a href="#">Beachvolleybal</a></li>
                            </ul>               
                        </li>           
                        <li><a href="#">Inschrijven</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Login/Registreer</a></li>
                  </ul>
                </div><!-- /.nav-collapse -->
            </div>
          </nav>