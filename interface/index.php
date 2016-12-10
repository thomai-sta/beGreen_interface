<?php
    include "header.php";
        if(isset($_GET['error']))
		{
            ?><div class="error">Access Denied</div><?php
        }
		?> <table id="first_table">
		<tr>
		<td id="welcome">
		<?php  echo "Welcome to <span id=\"bgreen\">beGreen</span>!"; ?>
		</td>
		<td id="login">
		
	<form method="post" action="dologin.php" class="login">
		<input type="radio" name="logger" value="person" /> Person
		<input type="radio" name="logger" value="company" /> Company
		<div id="bla">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" />
		</div>
		
		<div id="bla">
			<label for="surname">Surname:</label>
			<input type="text" name="surname" id="surname" />
		</div>
		<div id="bla">
			<label for="id">ID:</label>
			<input type="text" name="myid" id="myid" />
		</div>		
		<div id="bla1">
			<input type="image" value="authenticate_me" src="eikones/green_button_1.jpg" class="authenticate_me"/>
		</div>		
	</form>
	</td>
	</tr>
	<tr>
	<td>
		<?php
		echo '<img id="logo" src="eikones/eco.jpg" />';
		?>
	</td>
	<td></td>
	</tr>
	</table>
		

<?php
    include "footer.php";
?>