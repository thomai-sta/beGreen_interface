<?php
    include "header.php";
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 
	
	$giftid=$_GET['giftid'];
	$_SESSION['giftid']=$giftid;
		$sql = "SELECT name, description, points, suitability, price 
				FROM Gift
				WHERE giftID=$giftid";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);?> 
		<table>
		<tr>
		<td>
		<form action="update_gift.php" method="post" class="qu">
		<div class="text">
		<label for="name">Όνομα: </label>
		</td><td><textarea name="name"><?php echo $row['name'] ?></textarea></td></tr><tr><td>
		<label for="description">Περιγραφή: </label></td><td>
		<textarea name="description"><?php echo $row['description'] ?></textarea></td></tr>
		<tr><td>
		<label for="points">Πόντοι: </label></td><td>
		<textarea name="points"><?php echo $row['points'] ?></textarea></td></tr><tr><td>
		<label for="suitability">Κατηγορία: </label></td><td>
		<textarea name="suitability"><?php echo $row['suitability'] ?></textarea></td></tr><tr><td>
		<label for="price">Τιμή: </label></td><td>
		<textarea name="price"><?php echo $row['price'] ?></textarea></td></tr><tr>
		
		</div><td></td><td>		
		<INPUT TYPE="image" id="sub" VALUE="View Topics" src="eikones/check.png">	
			</td></tr>
		</form>				
		</table>
<?php		
include "footer.php";
?>