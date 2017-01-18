<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vive Grupo Constructor</title>
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script>
		$(function() {
    		var pull = $('#pull');
    		menu = $('nav ul');
    		menuHeight = menu.height();
 
    		$(pull).on('click', function(e) {
        		e.preventDefault();
        		menu.slideToggle();
    		});
		});
 
		$(window).resize(function(){
    		var w = $(window).width();
    		if(w > 320 && menu.is(':hidden')) {
        		menu.removeAttr('style');
    		}
		});
	</script>
</head>
<body>
	<?php 
		include ("nav.php");
	 ?>
	<div id="logo">
		<img src="../img/logo.jpg" alt="">
	</div>
</body>
</html>