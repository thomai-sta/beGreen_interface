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
		$(".edit_company").hover(function() {
			$(this).attr("src","eikones/edit_1.png");
				}, function() {
			$(this).attr("src","eikones/edit_.png");
		});
	});
	</script>	
	<script type='text/javascript'>
	
	$(document).ready(function(){
		$(".add_gift").hover(function() {
			$(this).attr("src","eikones/add_gift1.png");
				}, function() {
			$(this).attr("src","eikones/add_gift.png");
		});
	});
	</script>
	<script>
	function editGift(key){
	   window.location.href = "edit_gift.php?&giftid=" + key +"&action=deleteVarBySup";
	}
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
			<FORM action="gifts.php" method="post">
			<INPUT TYPE="image" VALUE="gifts" src="eikones/gifts.png" class="gifts">
			</FORM>
			<FORM action="dologout.php" method="post">
			<INPUT TYPE="image" VALUE="logout" src="eikones/logout.png" class="logout">
			</FORM>
			
			</h1>
            <div class="content">