<?php
    include "header.php";
	$name=$_SESSION['name'];
	$company=$_SESSION['companyid'];
	echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".$name."!"; 

		$sql = "SELECT name, description, company_manager
				FROM company
				WHERE companyID = $company";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);?> 
		
		<form action="update_company.php" method="post" class="qu">
		<div class="text">
		<table id="edit_company">
		<tr>
		<td>
		<label for="name">Όνομα Εταιρίας: </label>
		</td>
		<td>
		<textarea name="name"><?php echo $row['name'] ?></textarea></br>
		</td>
		</tr>
		<tr>
		<td>
		<label for="description">Περιγραφή Εταιρίας: </label>
		</td>
		<td>
		<textarea name="description"><?php echo $row['description'] ?></textarea></br>
		</td>
		</tr>
		<tr>
		<td>
		<label for="company_manager">Υπεύθυνος Εταιρίας: </label>
		</td>
		<td>
		<textarea name="company_manager"><?php echo $row['company_manager'] ?></textarea></br>
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>	<INPUT TYPE="image" id="sub" VALUE="View Topics" src="eikones/check.png">	</td>
		</tr>
		</table>
		</div>		
			
		</form>				

<?php		
	include "footer.php"
?>