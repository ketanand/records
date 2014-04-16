<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print $title; ?></title>

    <!-- Bootstrap -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/main.css" rel="stylesheet">
    <link href="/public/css/plugins/fancybox.css" rel="stylesheet">
    <link href="/public/css/MetroJs.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php 
	      //echo $css;
	      //echo $scripts;
	      echo $head; 
    ?>
  </head>
  <body class="rt-theme">
    <?php echo $header; ?>

    <div class="container-fluid" >
	<?php echo $banner; ?>
    </div>
    <div class="container" >
	<div class="row">
		<div class="col-md-9" >
    			<?php echo $content; ?> 
		</div>
		<div class="col-md-3 hidden-xs">
			<?php echo $sidebar; ?> 
		</div>
	</div>
    </div>   

   
    <?php echo $footer; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/plugins/jquery.anoslide.js"></script>
    <script type="text/javascript" src="/public/js/plugins/fancybox.js"></script>
    <script type="text/javascript" src="/public/js/MetroJs.min.js"></script>
  </body>
</html>
