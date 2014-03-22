<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Ajax &ndash; twitter feed &ndash; with Pure</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
        <script src="script.js"></script>
		
		<!--[if lte IE 8]>
        <link rel="stylesheet" href="css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/main-grid.css">
    <!--<![endif]-->
  

  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/blog.css">
    <!--<![endif]-->
	
	
    </head>
    <body onload="load();">
		<div class="pure-g">
			<div class="sidebar pure-u-1 pure-u-med-1-4">
				<div class="header">
					<hgroup>
						<h1 class="brand-title">A Twitter Feed Example</h1>
					</hgroup>
					
					<form class="pure-form" action="" method="POST" onsubmit="update();">
						<fieldset>
							<input type="text" id="user" name="user" class="pure-input-rounded" placeholder="input twitter user name" onchange="update();" value="<?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>">
						</fieldset>
					</form>
				</div>
			</div>
			
			<div class="content pure-u-1 pure-u-med-3-4">
				<div>
					<!-- A Wrapper for all the blog posts -->
					<div class="posts">
						<h1 class="content-subhead">Twitter Feed</h1>
						
						<div id="result">
						</div>
					</div>
				</div>
			</div>
		</div><!-- end of .pure-g -->

    </body>
</html>