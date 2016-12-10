<?php
    include "header.php";
	echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 

	
	$sql = "SELECT name, surname, phone_number, identity_number, date_of_birth,	parent
					FROM Recycler, Person WHERE Person.ID=Recycler.ID";
			$result = mysql_query($sql);
			?> <div id="stoixeia"><?php
			echo "</br></br>ΟΙ ΑΝΑΚΥΚΛΩΤΕΣ ΤΟΥ ΣΥΣΤΗΜΑΤΟΣ EINAI:</br></br>";
			
	?> 
	<table>
	<tr id="first_row">
	<td id='emp_name'>Όνομα</td>
	<td id='emp_sur'>Επίθετο</td>
	<td id='phone'>Αριθμός Τηλεφώνου</td>
	<td id='id_num'>Αριθμός Ταυτότητας</td>
	<td id='birth'>Ημερομηνία Γέννησης</td>
	<td id='parent'>ID Γονέα</td>
	
	</tr>
		<?php
			while ($row = mysql_fetch_assoc($result)) { 
		?>
		<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['surname']; ?></td>
		<td><?php echo $row['phone_number']; ?></td>
		<td><?php echo $row['identity_number']; ?></td>
		<td><?php echo $row['date_of_birth']; ?></td>
		<td><?php echo $row['parent']; ?></td>
		</tr>
		<?php } ?>
		<tr>
		<td></td><td></td><td></td><td></td><td></td><td><FORM action="insert_user.php" method="post">
			<INPUT TYPE="image" VALUE="insert" src="eikones/add_user.png" class="insert">
			</FORM></td>
		</tr>

	</table>
		</div>	

<?php
    include "footer.php";
?>