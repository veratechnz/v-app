<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="node_modules/jquery-mobile/dist/jquery.mobile.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Template</title>
</head>
<body>
		
		<?php include 'inc/page1.inc.php'; ?>
		<?php include 'inc/page2.inc.php'; ?>
		<?php include 'inc/page3.inc.php'; ?>
		<?php include 'inc/page4.inc.php'; ?>
		<?php include 'inc/page5.inc.php'; ?>
		<?php include 'inc/page6.inc.php'; ?>
							
    <!-- All js -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery-mobile/dist/jquery.mobile.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="http://veratech.co.nz/blog/?json=1&count=10&callback=listPosts"></script>
    <script src="http://gdata.youtube.com/feeds/users/gameofthrones/uploads?alt=json&max-results=30&callback=listVideos"></script>

</body>
</html>