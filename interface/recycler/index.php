<?php
    include "header.php";
		$name=$_SESSION['name'];
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($name)."!"; 
	$cardid=$_SESSION['cardid'];
	$sql = "SELECT name, surname, phone_number, municipality, identity_number, date_of_birth,
			parent,points, active_since
			FROM Recycler, Person 
			WHERE Person.ID=Recycler.ID 
			AND cardID=$cardid";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
		
	$municipality=$row['municipality'];
	$sql1 = "SELECT name
			FROM municipality WHERE municipalityID=$municipality";
	$result1 = mysql_query($sql1);
	$row1= mysql_fetch_array($result1);
	
	
	
	?> <table id="stoixeia"> <tr><td id="stoixeia">ΤΑ ΣΤΟΙΧΕΙΑ ΣΑΣ: </td><td></td></tr>
	<tr><td id="stoixeia_1">Όνομα:</td><td><?php echo $row['name']; ?></td> </tr>
	<tr><td id="stoixeia_1">Επίθετο:</td><td><?php echo $row['surname'];?></td></tr><?php
	if ($row['phone_number']!=null) {?>			
		<tr><td id="stoixeia_1">Αριθμός τηλεφώνου:</td><td><?php echo $row['phone_number']; }?></td></tr>
	<tr><td id="stoixeia_1">Δήμος:</td><td><?php echo $row1['name'];?></td> </tr>
	<tr><td id="stoixeia_1">Ημερομηνία Γέννησης:</td><td><?php echo $row['date_of_birth'];?></td> </tr><?php
	if ($row['parent']!=null) {?>			
		<tr><td id="stoixeia_1">ID Γονέα:</td><td><?php echo $row['parent']; }?></td></tr>
	<tr><td id="stoixeia_1">Αριθμός Πόντων:</td><td><?php echo $row['points'];?></td> </tr>
	<tr><td id="stoixeia_1">Ενεργός από:</td><td><?php echo $row['active_since'];?></td> </tr>
	</table>
	<?php
	
	$_SESSION['municipality'] = $row['municipality'];
    include "footer.php";
?>