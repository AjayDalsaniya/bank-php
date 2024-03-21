<?php ob_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="css1/customer_reg_form.css">
</head>
<body>

	<table class="customer_reg_form" align="center">
		<form method="post">

		<tr>
			<td colspan="8" align="center"><h1>Online Account Opening Form </h1></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Name" required /></td>

			<td>Gender</td>
			<td><select name ="gender" required >					 
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>					  
				</select>
			</td>

			<td> Mobile No</td>
			<td><input type="number" name="mobile" placeholder="Mobile no"   required /></td>

			
		</tr>

		<tr>
			<td> Email </td>
			<td><input type="text" name="email" placeholder="Email id" />
			</td>

			<td>Date Of Birth</td>
			<td><input type="text" name="dob" placeholder="Date of Birth" onfocus ="(this.type='date')" required /></td>

			<td>Aadhar Number</td>
			<td><input type="text" name="aadhar" placeholder="Aadhar no" ></td>	
		</tr>

		<tr>
			<td>Pan Number</td>
			<td><input type="text" name="pan_no" placeholder="PAN Number" required /></td>


			<td>Home Address</td>
			<td><textarea rows="3" cols="19" class="address" type="text" name="homeaddrs" 
			 placeholder="Home Address" required  /></textarea> </td>

			 <td>Office Address</td>
			<td> <textarea rows="3" cols="19" input class="address"   name="officeaddrs" placeholder="Office Address" /></textarea></td>

				
		</tr>
		<tr>
			<td><input type="text" name="country" placeholder="US" value="india" readonly="readonly" /></td>
			<td><script src="js\cities.js"></script>
				<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select></td>

			<td><select id ="state" class="form-control"  name="city"required></select>
				<script language="javascript"> print_state("sts");</script></td>

			<td> Village</td>
			<td><input type="text" name="village" placeholder="village" required /></td>

			<td> PinCode</td>
			<td><input type="text" name="pin" placeholder="Pin Code" required /></td>	
		</tr>

		<tr>

		
			<td> Nominee Name </td>
			<td><input type="text" name="nominee_name" placeholder="Nominee Name (If any)" /></td>

			<td>Nominee Account No </td>
			<td><input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  /></td>

			<td> Account Type</td>
			<td><select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
			</td>	
		</tr>
		<tr>
			<td colspan="8" align="center"><br><input type="submit" name="submit" value="Submit"></td>
			<td><a href="index.php">Back </a></td>
		</tr>
		</form>
	</table>
	
</body>
</html>

<?php 


if (isset($_POST['submit']))
	{
		echo $staff_name = $_POST['Staff_name'];
		echo $cust_name = $_POST['name'];
		echo $cust_gender =$_POST['gender'];
		echo $cust_mobile =$_POST['mobile'];
		echo $cust_email =$_POST['email'];
		echo $cust_aadhar = $_POST['aadhar'];
		echo $cust_dob = $_POST['dob'];
		echo $cust_pan = $_POST['pan_no'];
		echo $cust_homeaddrs =$_POST['homeaddrs'];
		echo $cust_officeaddrs = $_POST['officeaddrs'];
		echo $cust_country = $_POST['country'];
		echo $cust_state = $_POST['state'];
		echo $cust_city = $_POST['city'];
		echo $cust_village = $_POST['village'];
		echo $cust_pin = $_POST['pin'];
		echo $cust_nominee_name =$_POST['nomminee_name'];
		echo $cust_nominee_Ac_no = $_POST['nominee_ac_no'];
		echo $cust_acctype = $_POST['acctype'];
		header ('location : cust_regfrm_confirm.php');

	}


?>

/*if(isset($_POST['submit'])){

	session_start();
	
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}
*/
?>