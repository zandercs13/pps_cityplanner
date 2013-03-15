<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title ?></title>
		
		<link rel="stylesheet" href="<?php echo site_url('public/css/reset.css')?>" />
		<link rel="stylesheet" href="<?php echo site_url('public/css/mainstyle.css')?>" />
		
		<?php if($jqueryUI){
				echo '<link rel="stylesheet" href="'.site_url('public/css/jqueryui/flick/jquery-ui-1.10.1.custom.min.css').'" />';
		} ?>
		
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<?php
			
			//Load JqueryUI if specified in page_data
			if($jqueryUI){
				echo '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>';
			}
		
			//Load each JavaScript file specified in page_data
			foreach($js as $js_file){ ?>
				<script src="<?php echo site_url('public/js').'/'.$js_file.'.js' ?>"></script>
		<?php } ?>
			

	</head>
	<body>
		<div id="container">
			<header>
				<h1><a href="<?php echo site_url('home') ?>">PPS | City Planner</a></h1>
				<h2>Providing the tools to imrove your neighborhood</h2>
				
			</header>
			
			<nav id="nav_top">
				<ul>
					<li><a href="<?php echo site_url('home') ?>">Home</a></li>
				</ul>
			</nav>
			
			<div id="content">
