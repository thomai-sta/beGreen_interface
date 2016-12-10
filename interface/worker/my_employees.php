<?php
    include "header.php";
	
	echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; 

	
	$sql = "SELECT Worker.workerID, name, surname, recruitement_date, occupation, contract, comment, salary, checkout_date
			FROM Worker, Worker_Kiosk, Person
			WHERE Worker.workerID=Worker_Kiosk.workerID
			AND Person.ID=Worker.ID";
	$result = mysql_query($sql);
	?><div id="stoixeia"><?php
	echo "</br></br>Οι εργαζόμενοι των περιπτέρων είναι:</br></br>";
	echo "<table>
	<tr id='first_row'>
	<td id='emp_name'>Όνομα</td>
	<td id='emp_sur'>Επίθετο</td>
	<td id='start'>Έναρξη Σύμβασης</td>
	<td id='checkout'>Λήξη Σύμβασης</td>
	<td id='occ'>Επάγγελμα</td>
	<td id='contr'>Σύμβαση</td>
	<td id='comm'>Σχόλιο</td>
	<td>Μισθός</td>
	<td></td>
	</tr>";
		while ($row = mysql_fetch_assoc($result)) { 
			$id=$row['workerID'];
			echo"<tr>
			<td>".$row['name']."</td>
			<td>".$row['surname']."</td>
			<td>".$row['recruitement_date']."</td>
			<td class=".$id.">".$row['checkout_date']."</td>
			<td class=".$id.">".$row['occupation']."</td>
			
			<td class=".$id.">";
			if ($row['contract']<>0) 
				{ echo $row['contract']." Μήνες";}
			else 
				{echo "Αορίστου";}
			echo "</td>
			<td class=".$id.">".$row['comment']."</td>
			<td class=".$id.">".$row['salary']."</td>";
			if ($row['checkout_date']==0){
				echo "
			<td><a href='#' onclick='editEmployee(".$id.");return false;'>Edit</a></td>"; }
			echo "	</tr>	";
		} ?>
	</table>	
	</div>
<?php
    include "footer.php";