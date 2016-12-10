<?php
    include "header.php";
	
    if(isset($_SESSION['cardid']))
	{
		$cardid=$_SESSION['cardid'];
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 
	}
    else
	{
		header("Location: ../index.php");
    }	
	$cardid=$_SESSION['cardid'];
	$sql = "SELECT *
			FROM Recycler_Kiosk_Material WHERE cardID=$cardid";
	$result = mysql_query($sql);
	?><div id="gift"><?php
	echo "</br></br>Οι ανακυκλώσεις που έχετε πραγματοποιήσει μέχρι τώρα είναι:</br></br>";
	?> </div><table id="recyclings">
	<tr id="first_row">
	<td>Ημερομηνία</td>
	<td>Υλικό</td>
	<td>Διεύθυνση Περιπτέρου</td>
	<td>Δήμος Περιπτέρου</td>
	<td>Ποσότητα</td>
	<td>Πόντοι</td>
	</tr>
	
	 <?php
		while ($row = mysql_fetch_assoc($result)) { 
		$materialid=$row['materialID'];
		$quantity=$row['quantity'];
		$kioskid=$row['kioskID'];
		$date_of_recycling=$row['date_of_recycling'];
		
		$sql1 = "SELECT name
				FROM Material WHERE materialID=$materialid";
		$result1 = mysql_query($sql1);
		$row1=mysql_fetch_assoc($result1);
		$material=$row1['name'];
		$points=2*$quantity;
		
		$sql2 = "SELECT address, municipality
				FROM Kiosk WHERE kioskID=$kioskid";
		$result2 = mysql_query($sql2);
		$row2=mysql_fetch_assoc($result2);
		$address=$row2['address'];
		$municipalityid=$row2['municipality'];
		
		$sql3 = "SELECT name
				FROM Municipality WHERE municipalityID=$municipalityid";
		$result3 = mysql_query($sql3);
		$row3=mysql_fetch_assoc($result3);
		$municipality=$row3['name'];
		?>		
		
	<tr>
	<td><?php echo $date_of_recycling; ?></td>
	<td><?php echo $material; ?></td>
	<td><?php echo $address; ?></td>
	<td><?php echo $municipality; ?></td>
	<td><?php echo $quantity; ?></td>
	<td><?php echo $points; ?></td>
	</tr>
<?php } ?>	
	</table>

<?php
    include "footer.php";
?>