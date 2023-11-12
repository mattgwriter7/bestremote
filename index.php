<?php

	// how deep is this page?
	$dots = '.';
	
	// fetch the setup files!
	include $dots . '/_PHP/setup.php';

?><!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<title>TEMPLATE</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
<?php include $dots . '/_INCLUDES/meta_head.php'; ?>
<style>
<!-- CUSTOM CSS FOR THIS PAGE -->
		
</style>
</head>

<body class="about">

	<header>
		<section>
			<span class="oswald">MATTGARVIN.COM</span>
		</section>	
	</header>



	<div id="hero">
		<section>		
			HERO
		</section>	
	</div>



	<main>
		<section class="bottom_gutter">		

			<!-- ONE BOX -->
			<div class="grid_1 top_gutter">
			<?php include $dots . '/_BLURBS/welcome.htm'; ?>
			</div><!-- end:grid_1 -->		

			<!-- THREE BOXES -->
			<div class="grid_3">
				<div class="box">
					1st Box
				</div><!-- end:box -->

				<div class="box">
					2nd Box
				</div><!-- end:box -->

				<div class="box">
					3rd Box
				</div><!-- end:box -->
			</div><!-- end:grid_3 -->		

			<!-- TWO BOXES -->
			<div class="grid_2">
				<div class="box">
					<h4 class="roboto"">BOXES and GRIDS</h4>
					<ul> 
						<li>boxes go in grids</li>
						<li>both are <span class="code">&lt;div&gt;</span> tags</li>
						<li>so this row has a 
						<span class="code">&lt;div class="grid_2"&gt;</span> that 
						contains two <span class="code">&lt;div class="box"&gt;</span> 
						tags.</li>
					</ul>
				</div><!-- end:box -->
				
				
				<div class="box">
					2nd Box
				</div><!-- end:box -->
			</div><!-- end:grid_2 -->

		</section>		
	</main>



	<footer>
		<section>
			FOOTER
		</section>	
	</footer>


	<script
		src="https://code.jquery.com/jquery-3.6.4.min.js"
		integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
		crossorigin="anonymous"></script>
	<script>

		var ver = '<?php print $ver; ?>';
		
	</script>
	<script src="<?php print $dots; ?>/js/default.js?t=<?php print $ver; ?>"></script>	
	<script>
	<!-- CUSTOM JS FOR THIS PAGE -->


	</script>	
</body>
</html>