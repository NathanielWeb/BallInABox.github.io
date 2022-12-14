<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Index.html</title>	
	
	<meta name="description" content="index page">
	<meta name="author" content="Nathaniel Webster">

	<!-- Internal styles not linked -->
	<style type="text/css">
		body{
			text-align: center;
			background-image: url(https://images4.content-hci.com/commimg/myhotcourses/blog/post/myhc_89683.jpg);
			background-size: cover;
			background-attachment: fixed;
			font-family: Allerta, "Varela Round", Voltaire, sans-serif;
			font-size: 20px;
			padding: 0;
			margin: 0;
			width: 100%;
			height: 100%;
		}
		* {
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		/* fluid column layout */
		.fluid1col, .fluid2col, .fluid3col, .fluid23col, .fluid4col, .fluid5col, .fluid6col, .fluid34col {
			padding:  10px 10px;
			position: relative;
			display: inline-block;
			width: 100%;
			float: left;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;	
		}
		@media screen and (min-width: 601px) {
			/* fluid columns */
			.fluid1col {
				width: 100%;
			}
			.fluid2col {
				width: 50%;
			}
			.fluid23col {
				width: 66.666666666666666%;
			}	
			.fluid3col {
				width: 33.33333333333%;		
			}
			.fluid34col {
				width: 75%;	
			}	
			.fluid4col {
				width: 25%;	
			}	
			.fluid5col {
				width: 20%;
			}
			.fluid6col {
				width:  16.6666666666%;
			}
		}
		@media screen and (max-width: 600px) {
			/* fluid columns */
			.fluid1col, .fluid2col, .fluid3col, .fluid23col, .fluid4col, .fluid5col, .fluid6col, .fluid34col {
				width:  100%;
			}
		}
		.clear {
			clear: both;
		}
		#faded-background{
			position: relative;
			display: inline-block;
			border-radius: 0.7em;
			margin-left: auto;
			margin-right: auto;
			width: 1000px;
			padding: 20px;
			background: rgba(179, 128, 255, 0.8);
			border: 10px solid #ff751a; /* the values in order are size, style, color */	
		}
		.normalImage {
			border-radius: 0.5em; /* 50% border radius */
			box-shadow: 0px 0px 10px #333333; /* http://www.css3.info/preview/box-shadow/ */
			-moz-box-shadow: 0px 0px 10px #333333;
			-webkit-box-shadow: 0px 0px 10px #333333;
			padding: 5px; 
			background-color: #0099ff;
			width: 400px;
			height: 300px;
		}
		.normalVideo {
			border-radius: 0.5em; /* 50% border radius */
			box-shadow: 0px 0px 10px #333333; /* http://www.css3.info/preview/box-shadow/ */
			-moz-box-shadow: 0px 0px 10px #333333;
			-webkit-box-shadow: 0px 0px 10px #333333;
			padding: 5px; 
			background-color: #0099ff;
		}
		.buttons {
			background: #0031f7;
			background-image: -webkit-linear-gradient(top, #0031f7, #f01111);
			background-image: -moz-linear-gradient(top, #0031f7, #f01111);
			background-image: -ms-linear-gradient(top, #0031f7, #f01111);
			background-image: -o-linear-gradient(top, #0031f7, #f01111);
			background-image: linear-gradient(to bottom, #0031f7, #f01111);
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			font-family: Arial;
			color: #ffffff;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
			margin: 10px;
		}

		.buttons:hover {
			background: #2a90fc;
			background-image: -webkit-linear-gradient(top, #2a90fc, #ff2638);
			background-image: -moz-linear-gradient(top, #2a90fc, #ff2638);
			background-image: -ms-linear-gradient(top, #2a90fc, #ff2638);
			background-image: -o-linear-gradient(top, #2a90fc, #ff2638);
			background-image: linear-gradient(to bottom, #2a90fc, #ff2638);
			text-decoration: none;
		}
		/* default link styles */
		a:link, a:visited, a:active {
			color: #333333;
			text-decoration: underline;
		}
		a:hover {
			color: #ffa500;
			text-decoration: underline;
		}
	</style>


</head>
<body>
	<body>
		<?
			//The variables for each level
			$levelOne = $_GET['levelOne'];
			$levelTwo = $_GET['levelTwo'];
			$levelThree = $_GET['levelThree'];
		?>
	<!-- main content -->
	<div id="container">
		<a href="#" id="tab">The Tab</a>
		<h1>Division Tags</h1>
		<p>This text is inside the main container.  The panels below have a specified class and styles.</p>
		<div class="panel"><h2>Panel 1</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 2</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 3</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
		<div class="panel"><h2>Panel 4</h2><p>Proin commodo dolor vel tellus rutrum pellentesque. Curabitur sit amet ex sit amet nisi vulputate tincidunt sit amet eu augue. Curabitur ornare, sapien eu suscipit ultricies, sapien augue lacinia metus, non ornare nisl quam sed sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque interdum eros at libero dapibus convallis. Donec velit neque, pulvinar pulvinar pellentesque nec, ornare venenatis nisi. Sed vehicula diam eget mi efficitur, sit amet laoreet ante imperdiet.</p></div>
	</div>
	<!-- /main content -->
	
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
