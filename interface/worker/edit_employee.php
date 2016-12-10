<?php
    include "header.php";
	$checkout=$_GET['checkout_date'];
	$occupation=$_GET['occupation'];
	$contract=$_GET['contract'];
	$comment=$_GET['comment'];
	$salary=$_GET['salary'];
	$_SESSION['workerid']=$_GET['workerid'];
	
	
		echo "Welcome to <span id=\"bgreen\">beGreen</span>, ".htmlspecialchars($_SESSION['name'])."!"; ?>
		<div id="text">	
		<form action="update_employee.php" method="post" class="qu">
		<label for="checkout_date">Λήξη Σύμβασης: </label></br>
		<textarea name="checkout_date"><?php echo $checkout ?></textarea></br>
		<label for="occupation">Επάγγελμα: </label></br>
		<textarea name="occupation"><?php echo $occupation ?></textarea></br>
		<label for="contract">Σύμβαση: </label></br>
		<textarea name="contract"><?php echo $contract ?></textarea></br>
		<label for="comment">Σχόλιο: </label></br>
		<textarea name="comment"><?php echo $comment ?></textarea></br>
		<label for="salary">Μισθός: </label></br>
		<textarea name="salary"><?php echo $salary ?></textarea></br>			
		<INPUT TYPE="image" id="sub" VALUE="View Topics" src="eikones/check.png">			
		</form>	
		</div>				