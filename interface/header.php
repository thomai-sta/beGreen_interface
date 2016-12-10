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
		$(".authenticate_me").hover(function() {
			$(this).attr("src","eikones/green_button.jpg");
				}, function() {
			$(this).attr("src","eikones/green_button_1.jpg");
		});
	});
	</script>
	
        <title>beGreen</title>
        <link rel="stylesheet" type="text/css" href="styledb.css" />
    </head>
    <body>
        <div class="universe">

            <div class="content">