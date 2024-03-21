<?php
session_start();
if(isset($_SESSION['staff_login'])){
	
	header('location:staff_profile.php');
	
}
?>
<html>
<head>
    <title>Staff Page</title>
  
    <link rel="stylesheet" type="text/css" href="css1/staff_login.css" />

    </head>
    <body>
        
	 <?php include'header1.php' ?>
        
	  <form method="post">
	  <div class="tb8"> 
	  <table class="table6">
	  	<tr>
		<td colspan="2" align="center">
			<img src="img/home-logo-hi.png" height="90px" width="90px"></td>
			</tr>
		
		</table>
		
	  <table class="table7" >
	  	<tr>
			<td colspan="2" align="center"><p2>Staff</p2> </td>
		</tr>
		
		<tr>
			<td><p1>Staff Id</p1></td>
			<td><a1><input type="text" name="staff_id" required /></a1></td>
	  	</tr>
		
		<tr>
			<td><p1>Password</p1></td>
			<td><input type="password" name="password" required/></td>
	 	</tr> 
		
		<tr>
			<td colspan="2" align="center"><p3><input type="submit" name="staff_login-btn" value="LOGIN" ></p3></td>
	  </tr>
	  
	  </table>
	                 
     
            </form>
			</div>
        <br>
        
     
    </body>
</html> 
  
<?php include 'staff_login_process.php'?>

