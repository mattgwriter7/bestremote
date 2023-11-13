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
			<br />
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
				<div class="box img white">
				  <div class="content">	
					<img src="./images/mattgarvin.jpg"/>
				  </div>	
				</div><!-- end:box -->

				<div class="box middle">
				  <div class="content blue_bordered fadein">
					<p><span class="oswald bigger">Guess What?</span>  I know my pic looks silly.  
					It is meant to 
					showcase my sense of humor! (And rugged good looks.)</p>
					<p> I am passionate about creating 
					<span class="roboto">COOL STUFF</span> 
					but I can laugh at myself, too.
				  </div>	
				</div><!-- end:box -->

				<div class="box">
					<p class="dropcap">This site was made in about 
						<span class="roboto">8&nbsp;HOURS</span> by Yours Truly.  I wanted to 
						showcase my coding skills so I 
						designed it from scratch, plus  
						I stuck it  
						on <span class="oswald">Github</span>. Want to have a look at the code?</p>
						
					<p>Check out the repo:<br />
						<a href="https://github.com/mattgwriter7/bestremote" 
						class="break_me" target="_blank">https://github.com/mattgwriter7/bestremote</a><br />
						<div class="hint"><b>NOTE</b>: The repo is public, so it should be  
							easy to peruse. (Or you can go Old School and 
							just View Source!)
						</div>
					</p>						
				</div><!-- end:box -->
			</div><!-- end:grid_3 -->		

			<!-- ONE WIDE BOX -->
			<div class="grid_1">
				<div class="box wide">
					<p class="dropcap">Here is the deal.  I have a university degree, and
						a college diploma.  Yet, I am an "autodidact."  Why? Because I have
						taught myself FAR more using the internet and my own
						RESOURCEFULNESS than I ever learned in school.</p>
					<p>I am one of those smug nerds with the ability become
						quite knowledgable on almost any topic as long as I have an internet
						connection, a couple hours, and the will to learn (which I do 99.97% of the time).</p>
				</div><!-- end:box -->
			</div><!-- end:grid_1 -->
			
			<!-- "scalable image" -->
			<div class="scale_img">
				<img src="./images/autodidact.gif" style="max-width: 600px; float: right;" />
			</div><br class="clr"/>
			
			
			
			
			
			
			<div class="panel">
			
				<div class="closed" data-panel="REMOTE">
					Do you want to see my<br />
					REMOTE WORKER write-up?<br />
					<button>Yes!</button>
				</div>	

			</div><!-- end:panel -->





			<div class="panel">
			
				<h1>MY WRITING</h1>
				

				<!-- TWO BOXES -->
				<div class="grid_2">
					<div class="box white">
						<h2 class="roboto">RECENT NEWS</h2>
						<p>Three years ago I started doing MOBILE&nbsp;DEVELOPMENT 
						using 
						<span class="roboto">FLUTTER</span>
						for FLUID&nbsp;MOBILITY.  
							I soon came to realize I LOVE FLUTTER!</p> 
						<p>Please read my article on Medium:<br /> 
						"5 Things I Love About Flutter"	
					</div><!-- end:box -->
					
					<div class="box white">
						<h2 class="roboto">SHORT BIO</h2>
						<p>A loooong time ago I started my career as a 
							Graphic&nbsp;Designer. Then I became a Web&nbsp;Developer. 
							Next I became a UI&nbsp;Designer, and 
							most recently a Mobile&nbsp;Developer.</p>  
						<p>I am a "Jack-of-all-trades" and... well 
							 I am pretty decent at a few of them.</p>		
					</div><!-- end:box -->
				</div><!-- end:grid_2 -->


				<!-- TWO MORE BOXES -->
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

			</div><!-- end:panel -->
			
			
			
			
			<div class="panel">
			
				<div class="closed" data-panel="DEV">
					Do you want to see my<br />
					SOFTWARE DEVELOPER write-up?<br />
					<button>Yes!</button>
				</div>	

			</div><!-- end:panel -->			
			
			<div class="pre_footer"><br /></div>
		
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