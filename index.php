<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="This is a general purpose website template, made of only HTML & CSS.">
	<meta name="author" content="Sanket">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
	<link  href="src/css/style-main.css" rel="stylesheet" type="text/css">
	<title>Any Blog</title>
</head>
<body>	
    <?php require('header.php'); ?>
	<section id="container">
		<article class="mainarticles">
			<a href="#">
				<img src="Untitled.jpg" height="200" style="position: relative; left: 20px; top: -20px;">
			</a>
				<h2><a href="Post.html" style="text-decoration: none; color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit congue odio.</a></h2>
			
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu congue tortor. Proin convallis nunc et risus lacinia, sed consectetur tortor tempor. Mauris tempor enim pulvinar tortor aliquam rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec et varius ante. In sapien mi, commodo quis gravida rhoncus, ultrices nec mi. Nulla porttitor ultricies urna, et posuere arcu consectetur et.<a href="#" style="text-decoration: none;">. . .</a></h3>
			<hr/>
			<span class="bottomtextl">18.07.2019</span>
			<span class="bottomtextl">&nbsp&nbsp&nbsp<a href="#" style="text-decoration: none; color: grey;">John Doe</a></span>
			<span class="bottomtextl">&nbsp&nbsp&nbspRead 123x</span>
			<span class="bottomtextr">5 comments</span>
		</article>

		<article class="mainarticles">
			<a href="#">
				<img src="Untitled.jpg" height="200" style="position: relative; left: 20px; top: -20px;">
			</a>
				<h2><a href="Post.html" style="text-decoration: none; color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit congue odio.</a></h2>
			
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu congue tortor. Proin convallis nunc et risus lacinia, sed consectetur tortor tempor. Mauris tempor enim pulvinar tortor aliquam rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec et varius ante. In sapien mi, commodo quis gravida rhoncus, ultrices nec mi. Nulla porttitor ultricies urna, et posuere arcu consectetur et.<a href="#" style="text-decoration: none;">. . .</a></h3>
			<hr/>
			<span class="bottomtextl">18.07.2019</span>
			<span class="bottomtextl">&nbsp&nbsp&nbsp<a href="#" style="text-decoration: none; color: grey;">John Doe</a></span>
			<span class="bottomtextl">&nbsp&nbsp&nbspRead 123x</span>
			<span class="bottomtextr">5 comments</span>
		</article>

		 <article id="lastmainarticles">
			<a href="#">
				<img src="Untitled.jpg" height="200" style="position: relative; left: 20px; top: -20px;"></a>
			<a href="Post.html" style="text-decoration: none; color: black;">
				<h2>Lorem ipsum dolor sit amet</h2>
			</a>
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu congue tortor. Proin convallis nunc et risus lacinia, sed consectetur tortor tempor. Mauris tempor enim pulvinar tortor aliquam rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec et varius ante. In sapien mi, commodo quis gravida rhoncus, ultrices nec mi. Nulla porttitor ultricies urna, et posuere arcu consectetur et.<a href="#" style="text-decoration: none;">. . .</a></h3>
			<hr/>
			<span class="bottomtextl">18.07.2019</span>
			<span class="bottomtextl">&nbsp&nbsp&nbsp<a href="#" style="text-decoration: none; color: grey;">Jane Doe</a></span>
			<span class="bottomtextl">&nbsp&nbsp&nbspRead 123x</span>
			<span class="bottomtextr">5 comments</span>
		</article>
	</section>
	<div class="sidebar">
		<form method="get" action="search.php">
			<input type="text" name="value" placeholder="Type to search something...">
			<input type="submit" value="" />
		</form>			
		<br/>
		<br/>
		<br/>
		<h2>Latest Articles</h2>
		<ul> 
			<li><a href="https://sscodes.github.io/Any-Blog/Post.html">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
			<li><a href="https://sscodes.github.io/Any-Blog/Post.html">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
			<li><a href="https://sscodes.github.io/Any-Blog/Post.html">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
			<li><a href="https://sscodes.github.io/Any-Blog/Post.html">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
			<li><a href="https://sscodes.github.io/Any-Blog/Post.html">Lorem ipsum dolor sit amet, consectetur adipiscing.</a></li>
		</ul>
		<h2>Most Recent Comments</h2>
		<ul>
			<li><a href="#"><b>John</b></a>&nbspadded a<a href="#">&nbsp<b>comment</b></a>&nbspto&nbsp<a href="https://sscodes.github.io/Any-Blog/Post.html"><b>Lorem ipsum dolor sit amet, consectetur adipiscing.</b></a></li>
			<li><a href="#"><b>Jane</b></a>&nbspadded a<a href="#">&nbsp<b>comment</b></a>&nbspto&nbsp<a href="https://sscodes.github.io/Any-Blog/Post.html"><b>Lorem ipsum dolor sit amet, consectetur adipiscing.</b></a></li>
			<li><a href="#"><b>John</b></a>&nbspadded a<a href="#">&nbsp<b>comment</b></a>&nbspto&nbsp<a href="https://sscodes.github.io/Any-Blog/Post.html"><b>Lorem ipsum dolor sit amet, consectetur adipiscing.</b></a></li>
			<li><a href="#"><b>Jane</b></a>&nbspadded a<a href="#">&nbsp<b>comment</b></a>&nbspto&nbsp<a href="https://sscodes.github.io/Any-Blog/Post.html"><b>Lorem ipsum dolor sit amet, consectetur adipiscing.</b></a></li>
			<li><a href="#"><b>John</b></a>&nbspadded a<a href="#">&nbsp<b>comment</b></a>&nbspto&nbsp<a href="https://sscodes.github.io/Any-Blog/Post.html"><b>Lorem ipsum dolor sit amet, consectetur adipiscing.</b></a></li>
		</ul>
		<h2>Archives</h2>
		<ul >
			<li><a href="#">2018</a></li>
			<li><a href="#">2017</a></li>
			<li><a href="#">2016</a></li>
			<li><a href="#">2015</a></li>
			<li><a href="#">2014</a></li>
		</ul>
	</div>
	<?php require("footer.php"); ?>
</body>
</html>
