<?php
    include "header.php";
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 
	
	$company=$_SESSION['companyid'];

	$sql = "SELECT giftID, name, description, points, suitability, price 
	FROM Gift
	WHERE company=$company";	
	$result = mysql_query ($sql); 
	
?> 	
	
	<table id="gifts">
	<tr id="first_row"><td>Δώρο</td><td>Περιγραφή</td><td>Πόντοι</td><td>Τιμή</td><td>Κατηγορία</td><td></td></tr>

	<?php 
	
	while ($row = mysql_fetch_assoc($result)) { 
		$giftid=$row['giftID'];
		echo "<tr>
		<td class=".$giftid.">".$row['name']."</td>
		<td class=".$giftid.">".$row['description']."</td>
		<td class=".$giftid.">".$row['points']."</td>
		<td class=".$giftid.">".$row['price']."</td>";
		if ($row["suitability"]==1) {
			echo"<td class=".$giftid.">Ανδρικά</td>";
		} else if ($row["suitability"]==2) {
			echo "<td class=".$giftid.">Γυναικεία</td>";
		} else if ($row["suitability"]==3) {
			echo "<td class=".$giftid.">Unisex</td>";
		} else if ($row["suitability"]==4) {
			echo "<td class=".$giftid.">Παιχνίδι</td>";
		} else if ($row["suitability"]==5) {
			echo "<td class=".$giftid.">Παιδικά Είδη</td>";
		} else {
			echo "<td class=".$giftid.">Είδη Ευγηρίας</td>";
		}
		echo "<td><a href='#' onclick='editGift(".$giftid.");return false;'>Edit</td>
		</tr>"; 
	}; 
	?>	
	<tr><td></td><td></td><td></td><td></td><td></td><td><FORM action="add_gift.php" method="post">
			<INPUT TYPE="image" VALUE="add_gift" src="eikones/add_gift.png" class="add_gift">
			</FORM></td></tr>
	</table>	

<?php
    include "footer.php";
?>