<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Das Quadrat - Der Feed" />

    <!-- Fonts -->
  	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,900' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    <link href="http://localhost:8888/kirby/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <header>
        <a href="<?php echo url() ?>"><h1 class="site_title"><?php echo $site->title()->html() ?></h1></a>
      </header>
