<?php
    include "header.php";
	$name=$_SESSION['name'];
	$company=$_SESSION['companyid'];
	echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".$name."!"; 
	$sql = "SELECT name, description, company_manager, program_manager, affiliation_date
			FROM company
			WHERE companyID = $company";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$sql1 = "SELECT Person.name, Person.surname
			FROM Person,Company,Worker
			WHERE Company.program_manager=Worker.workerID
			AND Worker.ID=Person.ID
			AND Company.companyID=$company";
	$result1=mysql_query($sql1);
	$row1 = mysql_fetch_assoc($result1);

	?> <table id="stoixeia">
		<tr>
		<td id="stoixeia">Όνομα Εταιρίας:</td><td><?php echo $row['name']; ?></td>
		</tr>
		<tr>
		<td id="stoixeia">Περιγραφή:</td><td><?php echo $row['description']; ?></td>
		</tr>
		<tr>
		<td id="stoixeia">Υπεύθυνος Εταιρίας:</td><td><?php echo $row['company_manager']; ?></td>
		</tr>
		<tr>
		<td id="stoixeia">Υπεύθυνος Συνεργασίας Προγράμματος:</td><td><?php echo $row1['surname']." ".$row1['name']; ?></td>
		</tr>
		<tr>
		<td id="stoixeia">Ημερομηνία Έναρξης Συνεργασίας:</td><td><?php echo $row['affiliation_date']; ?></td>
		</tr>
		<tr>
		<td></td>
		<td>
			<FORM action="edit_company.php" method="post">
			<INPUT TYPE="image" VALUE="edit_company" src="eikones/edit_.png" class="edit_company">
			</FORM>
		</td>
		</tr>
		</table>
			

<?php
    include "footer.php";
?>