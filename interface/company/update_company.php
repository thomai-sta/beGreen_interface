<?php
    include "db.php";
	if ($_POST['name']<>'' && $_POST['description']<>'' && $_POST['company_manager']<>'') 
	{
		$name=$_POST['name'];
		$description=$_POST['description'];
		$company_manager=$_POST['company_manager'];
		$company=$_SESSION['companyid'];
		$cat1=mysql_query("UPDATE Company 
							SET name='$name',
							description='$description',
							company_manager='$company_manager'
							WHERE companyID=$company");
		header( "Location: index.php" );
	}
	else 
	{
	header( "Location: edit_company.php?error=yes" );	
	}
?>