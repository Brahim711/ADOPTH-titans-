<?php
	include 'codeC.php';
	$codeC=new codeC();
	$listeclient=$codeC->afficherclient(); 
?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
	    
		<center><h1>Liste des adherents</h1></center>
		<table  class="table">
			<tr>
				<th scope="col">id</th>
				<th scope="col">first name</th>
				<th scope="col">last name</th>
		
			</tr>
			<?php
				foreach($listeclient as $coupon){
			?>
			<tr>
				
			<td><?php echo $coupon['id']; ?></td>
			    <td><?php echo $coupon['coupon_code']; ?></td>
				<td><?php echo $coupon['discount']; ?></td>
				<td><?php echo $coupon['status']; ?></td>
				

				
			</tr>
			<?php
				}
			?>
		</table>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
