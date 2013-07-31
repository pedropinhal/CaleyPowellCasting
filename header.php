<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <?php wp_head();?>

</head>
<body>
  <div id="wrap">
    <div class="container">
		<h1>Caley Powell Casting</h1>


	  	<div class="navbar caley-nav">
	        <div class="container">

	          <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>


	          <!-- Place everything within .navbar-collapse to hide it until above 768px -->
	          <div class="nav-collapse collapse navbar-responsive-collapse">
	          	<?php wp_nav_menu( array(
	           		'menu'            => 'main-nav', 
				     
					'menu_class'      => 'nav navbar-nav', 
	       		) ) ?>
	           
	           

	          <form class="navbar-form pull-right" action="">
	            <input type="text" class="form-control col-lg-8" placeholder="Search">
	          </form> 

	        </div><!-- /.nav-collapse -->
	      </div><!-- /.container -->
	    </div><!-- /.navbar -->