<?php
    header( "Content-Type: text/html; charset=utf-8" );
    include "db.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="eikones/favicon.ico"/>
	<script type="text/javascript" src="jquery-1.7.1.js"></script>
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".index").hover(function() {
			$(this).attr("src","eikones/home_button_pointer.png");
				}, function() {
			$(this).attr("src","eikones/home_button2.png");
		});
	});
	</script>
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".gifts").hover(function() {
			$(this).attr("src","eikones/gifts1.png");
				}, function() {
			$(this).attr("src","eikones/gifts.png");
		});
	});
	</script>
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".kiosks").hover(function() {
			$(this).attr("src","eikones/kiosks1.png");
				}, function() {
			$(this).attr("src","eikones/kiosks.png");
		});
	});
	</script>
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".logout").hover(function() {
			$(this).attr("src","eikones/logout1.png");
				}, function() {
			$(this).attr("src","eikones/logout.png");
		});
	});
	</script>
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".recycling").hover(function() {
			$(this).attr("src","eikones/recyclings1.png");
				}, function() {
			$(this).attr("src","eikones/recyclings.png");
		});
	});
	</script>
	

	
        <title>beGreen</title>
        <link rel="stylesheet" type="text/css" href="styledb.css" />
    </head>
    <body>
        <div class="universe">
            <h1>
			<FORM action="index.php" method="post">
			<INPUT TYPE="image" VALUE="index" src="eikones/home_button2.png" class="index">
			</FORM>
			<FORM action="recyclings.php" method="post">
			<INPUT TYPE="image" VALUE="recycling" src="eikones/recyclings.png" class="recycling">
			</FORM>
			<FORM action="kiosks.php" method="post">
			<INPUT TYPE="image" VALUE="kiosks" src="eikones/kiosks.png" class="kiosks">
			</FORM>
			<FORM action="gifts.php" method="post">
			<INPUT TYPE="image" VALUE="gifts" src="eikones/gifts.png" class="gifts">
			</FORM>
			<FORM action="dologout.php" method="post">
			<INPUT TYPE="image" VALUE="logout" src="eikones/logout.png" class="logout">
			</FORM>
			</h1>
            <div class="content">