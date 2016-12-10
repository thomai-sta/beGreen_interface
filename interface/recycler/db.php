<?php
    session_start();
	mysql_connect("localhost","root", "pitsapitsa"); 
	mysql_select_db("begreen") or die( "Unable to select database");
	mysql_query( "SET NAMES UTF8;" );
	$link=new mysqli("localhost","root", "pitsapitsa", "begreen");
?>