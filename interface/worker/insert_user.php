<?php
    include "header.php";
?>

<?php
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!</br></br>";

	
	if(isset($_GET['error']))
	{
            ?><div id="error">Έχετε αφήσει κενά κάποια υποχρεωτικά πεδία!!</div>
    <?php } ?>
	
<div id="insert">	
<div id="displayContext">Εισαγωγή Ανακυκλωτή</div>	
<form action="save_user.php" method="post" class="qu">
	
		<table>
		<tr>
		<td>
		<label for="name">Όνομα:</label>
		</td>
		<td>
		<input type="text" name="name" id="name" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="surname">Επίθετο:</label>
		</td>
		<td>
		<input type="text" name="surname" id="surname" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="phone_number">Αριθμός Τηλεφώνου:</label>
		</td>
		<td>
		<input type="text" name="phone_number" id="phone_number" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="municipality">Δήμος:</label>
		</td>
		<td>
		<input type="text" name="municipality" id="municipality" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="identity_card">Αριθμός Ταυτότητας:</label>
		</td>
		<td>
		<input type="text" name="identity_card" id="identity_card" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="date_of_birth">Ημερομηνία Γέννησης:</label>
		</td>
		<td>
		<input type="text" name="day" id="day" />
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="text" name="month" id="month" />
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<input type="text" name="year" id="year" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="gender">Φύλο:</label>
		</td>
		<td>
		<input type="text" name="gender" id="gender" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="parent">ID Γονεα:</label>
		</td>
		<td>
		<input type="text" name="parent" id="parent" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="date">Ημερομηνία Ενεργοποίησης:</label>
		</td>
		<td>
		<input type="text" name="date" id="date" />
		</td>
		</tr>
		<tr>
		<td>	
		</td>
		<td>
		<INPUT TYPE="image" id="sub" VALUE="View Topics" src="eikones/check.png">
		</td>
		</tr>
		
</form>
</div>
<?php include "footer.php"; ?>