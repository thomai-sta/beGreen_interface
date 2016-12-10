<?php
    include "db.php";
		if ($_POST['name']<>'' && $_POST['description']<>'' && $_POST['points']<>'' && $_POST['suitability']<>'' && $_POST['price']<>'') 
		{
			$name=$_POST['name'];
			$description=$_POST['description'];
			$points=$_POST['points'];
			$suitability=$_POST['suitability'];
			$price=$_POST['price'];
			$giftid=$_SESSION['giftid'];
			$cat1=mysql_query("UPDATE Gift 
								SET name='$name',
								description='$description',
								points='$points',
								suitability='$suitability',
								price='$price'
								WHERE giftID=$giftid");
			header( "Location: gifts.php" );
		}
		else 
		{
		header( "Location: edit_gift.php?error=yes" );
		}			

	
?>