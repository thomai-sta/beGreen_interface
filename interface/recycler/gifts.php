<?php
    include "header.php";
	
    if(isset($_SESSION['cardid']))
	{
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 
    }else
	{
		header("Location: ../index.php");
    }	
	
	
?>
	<div id="gift">
	<form  class="login" method="get">
		<select name = "suitability" id = "suitability">
		<option value = "0">Κατηγορια </option>
		<option value = "1" ><?php echo "Ανδρικά"; ?></option>
		<option value = "2" ><?php echo "Γυναικεία"; ?></option>
		<option value = "3" ><?php echo "Unisex"; ?></option>
		<option value = "4" ><?php echo "Παιχνίδι"; ?></option>
		<option value = "5" ><?php echo "Παιδικά Είδη"; ?></option>
		<option value = "6" ><?php echo "Είδη Ευγηρίας"; ?></option>

		</select>
		<input type="submit" value="go" class="button"/>
	</form>
</div>
	
	<?php

	if (isset($_GET['suitability']))
	{
		$suit=$_GET['suitability'];
		
		if ($suit<>0)
		{
			$sql = "SELECT giftID, name, description, points, suitability, price 
			FROM Gift
			WHERE suitability=$suit";
		}
		else 
		{
			$sql = "SELECT giftID, name, description, points, suitability, price 
			FROM Gift";
		}
	}
	else
	{
		$sql = "SELECT giftID, name, description, points, suitability, price 
				FROM Gift";
	}
	$result = mysql_query ($sql); 
	
?> 
	
	
	<table id="gift">
	<tr id="first_row"><td id="name">Δώρο</td><td id="descr">Περιγραφή</td><td id="points">Πόντοι</td><td id="cat">Κατηγορία</td><td id="price">Τιμή</td><td>Εταιρία</td></tr>

	<?php 
	
	while ($row = mysql_fetch_assoc($result)) {
		$gift=$row['giftID'];
		$sql1="SELECT Company.name
				FROM Company, Gift
				WHERE Gift.giftID=$gift
				AND Company.companyID=Gift.company";
		$result1=mysql_query($sql1);
		$row1=mysql_fetch_assoc ($result1);
	
	?> 
		<tr>
		<td><?php echo htmlspecialchars($row["name"]);?></td>
		<td><?php echo htmlspecialchars($row["description"]); ?></td>
		<td><?php echo htmlspecialchars($row["points"]); ?></td>
		<?php
		if ($row["suitability"]==1) {
			?><td>Ανδρικά</td><?php
		} else if ($row["suitability"]==2) {
			?><td>Γυναικεία</td><?php
		} else if ($row["suitability"]==3) {
			?><td>Unisex</td><?php
		} else if ($row["suitability"]==4) {
			?><td>Παιχνίδι</td><?php
		} else if ($row["suitability"]==5) {
			?><td>Παιδικά Είδη</td><?php
		} else {
			?><td>Είδη Ευγηρίας</td><?php
		}?>
		<td><?php echo htmlspecialchars($row["price"]); ?></td>
		<td><?php echo htmlspecialchars($row1["name"]); ?></td>
		</tr>
		
	<?php 
	}; 
	?>	

	</table>	
	
<?php
    include "footer.php";
?>