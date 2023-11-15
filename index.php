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

<body class="">

	<header class="ruler">
		<section class="ruler">
			<a name="top">SITE TITLE HERE</a>
		</section>	
	</header>



	<div id="hero">
		<section>		
			<br />
		</section>	
	</div>



	<main>
		<section>		



			<div id="INTRO" class="panel">
				<div class="interior">
					
					<h1>Hey Now!</h1>
					<p class="dropcap">This is a paragraph tag with
					a class="dropcap".  Dropcaps only look good if
					there is a big block of text. (You don't want a
					dangling dropcap if the paragraph is just one
					short sentence!) To be honest, this paragraph is just
					<i>barely</i> long enough.</p>
					
					<aside>
						<img src="./images/mattgarvin.jpg"/>
						<div>Guess What? I know my pic looks silly. 
							It is meant to showcase my sense of humor! (And rugged 
							good looks, obviously.)
						</div>
					</aside>
					
					<p>The "Hey Now!" is an &lt;h1&gt; tag.  It looks
					all fancy because some CSS is applied to it.  These
					"main heading" tags should be used judiciously. (I
					am only using them at the start of "panels," which
					I explain in a moment.)</p>
					
					<h2>Panels</h2>
					<p>A "div.panel" is like a section that
						can be shown or hidden.  They are denoted by
						the a lot of vertical padding, plus
						the little black dots up top.</p>
						
					<p>Panels always start with a "div.interior"
						which is used to actually add the padding.</p>
						
					<p>This "Panel" section starts with an &lt;h2&gt; tag,
						which (obviously) is a bit smaller than an
						&lt;h1&gt; tag.  I don't use any headings
						besides h1 and h2.<br />
						<span class="note"><u>NOTE:</u> H1s and H2s
							may have different margins and paddings when
							used in a grid.
						</span>
					</p>		

					<h2>Other Stuff</h2>
					<p>I need to add an "aside" that will
						float a div on the right, that can
						have an image and a caption. (When it is
						on mobile, it will be full-width.)</p>

				</div><!-- end:interior -->
			</div><!-- end:panel -->
			
			
			
			<div id="FONTS" class="panel">
				<div class="closed">
					Do you want to see my<br />
					<b class="r big">FONTS</b> write-up?<br />
					<button class="show_me" data-panel="FONTS">show me!</button>
					<div class="spinner"><br /></div>
					<span class="spinner_mssg"></span>					
				</div>	
				
				<div class="hud" id="main_show_me">Click the blue "show&nbsp;me!"
					button to open up this panel.
				</div>

			</div><!-- end:panel -->




			<div class="panel">
			
				<div class="interior">
					
					<h1>Grids 'n Boxes</h1>
					<p>Many things are displayed using Grids. To keep
						things simple, a grid is always a row of "boxes". 
						If there appears to be 6 same-sized boxes, 3 on
						top of the other, it is actually two
						different "div.grid_3" classes, holding
						three different "div.box" containers, stacked.
					</p>
					
					<h2>grid_3 Example</h2>
					<p>This first example is what I just described: a
						row with 3 boxes in it:</p>

					<div class="grid_3">
						<div class="box">
							<ol>
								<li>This is the first
										"box" in a "grid_3"
									<ul>
										<li>by default grids have a 
												margin-bottom
										</li>
										<li>Add a "short" class to
												remove margin-bottom
										</li>
									</ul>											
								</li>
							</ol>			
						</div>
						<div class="box">
							<ol start="2">
								<li>Boxes are grey by
										default
									<ul>
										<li>they also have padding on
												all 4 sides by default
										</li>
										<li>plus, they are min-height
												of 180px by default
										</li>
									</ul>												
								</li>
							</ol>			
						</div>
						<div class="box blank">
							<ol start="3">
								<li>This 3rd one appears
										white because the
										class is "blank"
									<ul>
										<li>blanks also have padding
												removed
										</li>
										<li class="note"><u>NOTE</u>: There is 
												still a margin-bottom on the
												grid itself!
										</li>
									</ul>										
								</li>
							</ol>	
						</div>	
					</div><!-- end this grid row -->

					<h2>grid_2 Example</h2>

					<div class="grid_2">
						<div class="box">
							<ol start="4">
								<li>This is the 4th "box"
									<ul>
										<li>It is in a "grid_2"</li>
									</ul>	
								</li>
							</ol>							
						</div>
						<div class="box">
							<ol start="5">
								<li>This is the 5th "box"
									<ul>
										<li>The &lt;h2&gt; tag has a class="tall" applied 
											add a margin-bottom after the heading
										</li>
										<li>In general, a "tall" class adds vertical
											spacing, a "short" class removes it.
										</li>
										<li class="note"><u>NOTE</u>: Not
											just for headings, but for many things,
											including grids. (See Box #6 below.)		
										</li>
									</ul>	
								</li>
							</ol>						
						</div>						
					</div><!-- end this grid row -->

					<h2>grid_1 Example</h2>
					
					<div class="grid_1 short">
						<div class="box">
							<ol start="6">
								<li>This is the 6th "box"
									<ul>
										<li>It is in a "grid_1"</li>
										<li>The grid has a "short" class that
												makes it have no margin-bottom
										</li>
										<li>...which makes it butt up
												against the grid_3 underneath
										</li>
									</ul>	
								</li>
							</ol>							
						</div>
					</div><!-- end this grid row -->

					<div class="grid_3">
						<div class="box">
							<ol start="7">
								<li>This is the 7th "box"</li>
							</ol>	
						</div>
						<div class="box">
							<ol start="8">
								<li>This is the 8th "box"</li>
							</ol>	
						</div>
						<div class="box">
							<ol start="9">
								<li>This is the 9th "box"</li>
							</ol>	
						</div>						
					</div><!-- end this grid row -->

					<h2>Other Box Examples?</h2>
					
					<p>I still need some fancy box stuff... Including:</p>
					
					<ol>
						<li class="tall">A box that will center text (vertically 
							and horizontally.)</li>
						<li class="tall">Another one that will center an image (vertically 
							and horizontally.)</li>
						<li class="tall">Another one that will show an image
							in the background, with a caption overlayed
							at the bottom.</li>
						<li class="tall">Finally, one that shows an image up
							top with captioned text underneath
							<div class="note">
							By the way, these &lt;li&gt; tags have class="tall" 
							added to bump up the margin-bottom.</div></li>
					</ol>
						
				</div><!-- end:interior -->
			</div><!-- end:panel -->	
			


			<div id="WRITING" class="panel">
			
				<div class="closed">
					Do you want to see my<br />
					<b class="r">WRITER</b> write-up?<br />
					<button class="show_me" data-panel="WRITER">show me!</button>
					<div class="spinner"><br /></div>
					<span class="spinner_mssg"></span>					
				</div>	

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
			<div class="grid_3">
				<div class="box">
					FOOTER BOX 1<br />
					(Contact)
				</div>
				<div class="box">
					FOOTER BOX 2<br />
					(Social Media)
				</div>
				<div class="box">
					FOOTER BOX 3<br />
					(??)
				</div>						
			</div><!-- end this grid row -->			
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