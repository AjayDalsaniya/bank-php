<?php ob_start(); ?>

<html>
<head><title>Staff Home</title>
<link rel="stylesheet" type="text/css" href="css1/staff_profile.css" />
</head>
<body>
<?php
	include 'header1.php' ;
	include 'staff_profile_header.php' ;?>
	<form method="post">
	
	
<table align="center" class="table8">
	
	<tr>
		<td><input type="submit" name="viewdet" value="View Active Customer"/></td>
		<td><input type="submit" name="view_cust_by_ac" value="View Customer by A/c No"/></td>
	</tr>
	
	<tr>
		<td><input type="submit" name="apprvac" value="Approve Pending Account"/></td>
		<td><input type="submit" name="del_cust" value="Delete Customer A/c"/>	</td>
	</tr>
	
	<tr>
		<td><input type="submit" name="credit_cust_ac" value="Credit Customer"/></td>
	</tr>
	

</table>

	</form>


<?php include'footer.php'; ?>
</body>
</html>


<?php

if(isset($_POST['viewdet'])){
	
	
		header('location:active_customers.php');
}

if(isset($_POST['view_cust_by_ac'])){
	
	header('location:view_customer_by_acc_no.php');
	
}
if(isset($_POST['apprvac'])){
	
	header('location:pending_customers.php');
	
}
if(isset($_POST['view_trans'])){

		echo '<script>alert("View Transaction")</script>';
}
if(isset($_POST['del_cust'])){
	
	
	header('location:delete_customer.php');
}
if(isset($_POST['credit_cust_ac'])){
	
	
	header('location:credit_customer_ac.php');
}

?>
