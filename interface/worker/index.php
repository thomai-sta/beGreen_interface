<?php
    include "header.php";

	echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 
	$workerid=$_SESSION['workerid'];
	$id=3;
	$sql = "SELECT name, surname, phone_number, identity_number, municipality, date_of_birth,
			parent
			FROM Person WHERE ID=$id";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$municipality=$row['municipality'];
	$sql1 = "SELECT name
			FROM municipality WHERE municipalityID=$municipality";
	$result1 = mysql_query($sql1);
	$row1= mysql_fetch_array($result1);		
		
		/*echo "<br/>ΤΑ ΣΤΟΙΧΕΙΑ ΣΑΣ:<br/><br/>";
		echo "Όνομα:  ".$row['name']."<br/>";
		echo "Επίθετο:  ".$row['surname']."<br/>";
					
		if ($row['phone_number']!=null) {
			echo "Αριθμός τηλεφώνου:  ".$row['phone_number']."<br/>";
		}
		echo "Δήμος:  ".$row['municipality']."<br/>";
		echo "Αριθμός Ταυτότητας:  ".$row['identity_number']."<br/>";
		echo "Ημερομηνία Γέννησης:  ".$row['date_of_birth']."<br/>";
		if ($row['parent']!=null) {
			echo "ID Γονέα: ".$row['parent']."<br/>";
		}
		$_SESSION['municipality'] = $row['municipality'];**/	
	?> <table id="stoixeia"> <tr><td id="stoixeia">ΤΑ ΣΤΟΙΧΕΙΑ ΣΑΣ: </td><td></td></tr>
	<tr><td id="stoixeia_1">Όνομα:</td><td><?php echo $row['name']; ?></td> </tr>
	<tr><td id="stoixeia_1">Επίθετο:</td><td><?php echo $row['surname'];?></td></tr><?php
	if ($row['phone_number']!=null) {?>			
		<tr><td id="stoixeia_1">Αριθμός τηλεφώνου:</td><td><?php echo $row['phone_number']; }?></td></tr>
	<tr><td id="stoixeia_1">Δήμος:</td><td><?php echo $row1['name'];?></td> </tr>
	<tr><td id="stoixeia_1">Αριθμός Ταυτότητας:</td><td><?php echo $row['identity_number'];?></td> </tr>
	<tr><td id="stoixeia_1">Ημερομηνία Γέννησης:</td><td><?php echo $row['date_of_birth'];?></td> </tr><?php
	if ($row['parent']!=null) {?>			
		<tr><td id="stoixeia_1">ID Γονέα:</td><td><?php echo $row['parent']; }?></td></tr>
	</table>
	<?php
	
	$_SESSION['municipality'] = $row['municipality'];

    include "footer.php";
?>