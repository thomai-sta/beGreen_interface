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
<div id="displayContext">Εισαγωγή Δώρου</div>	
<form action="save_gift.php" method="post" class="qu">
	
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
		<label for="description">Περιγραφή:</label>
		</td>
		<td>
		<input type="text" name="description" id="description" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="price">Τιμή:</label>
		</td>
		<td>
		<input type="text" name="price" id="price" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="points">Πόντοι:</label>
		</td>
		<td>
		<input type="text" name="points" id="points" />
		</td>
		</tr>
		<tr>
		<td>
		<label for="suitability">Καταλληλότητα:</label>
		</td>
		<td>
		<input type="text" name="suitability" id="suitability" />
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