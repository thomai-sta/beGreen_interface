<?php
    include "header.php";
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!</br></br>"; 	
?>
		<div id="kiosks">
	<form  class="login" method="get">
		<select name = "municipality" id = "municipality">
		<option value = "0">Δήμος</option>
		<?php 
			$sql="SELECT name, municipalityID FROM Municipality";
			$result =mysql_query($sql);
			while ($data=mysql_fetch_assoc($result)){
		?>		
		<option value ="<?php echo $data['municipalityID'] ?>" ><?php echo $data['name'] ?></option>
		<?php } ?>

		</select>

		<select name = "material" id = "material">
		<option value = "0">Υλικό</option>
		

		<?php 
			$sql="SELECT name, materialID FROM Material order by name asc";
			$result =mysql_query($sql);
			while ($data=mysql_fetch_assoc($result)){
		?>
		
		<option value ="<?php echo $data['materialID'] ?>" ><?php echo $data['name'] ?></option>
		<?php } ?>
		</select>
		<input type="submit" value="go" class="button"/>
	</form>

	
	<?php

	if (isset($_GET['municipality']) || isset($_GET['material']))
	{
		$mun=$_GET['municipality'];
		$mat=$_GET['material'];
		
		if ($mun<>0 && $mat<>0)
		{
			$sql = "SELECT address , Kiosk.kioskID
			FROM Kiosk, Kiosk_Material 
			WHERE municipality=$mun
			AND materialID=$mat
			AND Kiosk.kioskID=Kiosk_Material.kioskID";
		}
		else if ($mun<>0)
		{
			$sql = "SELECT address, kioskID
					FROM Kiosk
					WHERE municipality=$mun"; 
		}
		else if ($mat<>0)
		{
			$sql = "SELECT address, Kiosk.kioskID
					FROM Kiosk, Kiosk_Material
					WHERE Kiosk_Material.materialID=$mat
					AND Kiosk.KioskID=Kiosk_Material.KioskID";
		}
		else
		{
			$sql = "SELECT address, kioskID
					FROM Kiosk";
		}
	} else {
		$sql = "SELECT address, kioskID
				FROM Kiosk";
		$mun=0;
		$mat=0;		
	}
	$result = mysql_query ($sql); 
	
?> 
	

	<table>
	<tr id="first_row"><td id="address"><?php echo "Διεύθυνση Περιπτέρου"; ?></td><td id='mun'><?php echo "Δήμος"; ?></td><td><?php echo "Υλικό";?></td></tr>
	<?php 
	
	while ($row = mysql_fetch_assoc($result)) { 
	$address=$row['address'];
	$kioskid=$row['kioskID'];
	
	if ($mun<>0){
	$sql1="SELECT Municipality.name FROM Municipality, Kiosk
				WHERE municipalityID=$mun";
		
		$result1 = mysql_query ($sql1);	
		$row1 = mysql_fetch_assoc($result1);
	} else {
		$sql1="SELECT Municipality.name FROM Municipality, Kiosk
				WHERE Kiosk.kioskID=$kioskid
				AND Kiosk.municipality=Municipality.municipalityID";
		$result1 = mysql_query ($sql1);	
		$row1 = mysql_fetch_assoc($result1);
	}
	if ($mat<>0){
	$sql2="SELECT Material.name FROM Material, Kiosk_Material
				WHERE Material.materialID=$mat";
		
		$result2 = mysql_query ($sql2);	
		$row2 = mysql_fetch_assoc($result2);
	} else {
		$sql2="SELECT Material.name FROM Material, Kiosk_Material
				WHERE Material.materialID=Kiosk_Material.materialID
				AND kioskID=$kioskid";
		$result2 = mysql_query ($sql2);	
		$row2 = mysql_fetch_assoc($result2);
	}
	
	?> 
		<tr>
		<td id="address"><?php echo htmlspecialchars($address);?></td>
		<td><?php echo htmlspecialchars($row1["name"]); ?></td>
		<td><?php echo htmlspecialchars($row2["name"]); ?></td>
		</tr>
	<?php 
	}; 
	?>	
	</table>	
	</div>
	
<?php
    include "footer.php";
?>