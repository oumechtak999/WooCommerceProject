<!DOCTYPE html>
<html>
<head>
	<title> woocommerce</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<?php  
	include 'Model/client.php';
	$customer = new customer(null,null,null,null);
	$data =  $customer->get();
	$data = json_decode($data, true);
	
	?>
	<div>
		<br><br>
		<center><h1 class="text-success">Customers</h1></center>
		<br><br>
		<center><a href="http://localhost/woocommerce/CustCreateForm.php">create new Customer</a></center>
		<br><br>
	</div>
	<div class="container">
		<div class="table-responsive">	
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>first name</th>
						<th>last name</th>
						<th>email</th>
						<th>delete</th>
						<th>edit</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ( $data as $row ) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $row['first_name']; ?> </td>
							<td><?= $row['last_name']; ?> </td>
							<td><?= $row['email']; ?> </td>
							<form action="Controller/C_client.php" method="POST">
								<td><input type="submit" class="btn btn-danger w-100" value="delete" name="delete"/> </td>
								<input type="hidden" class="btn btn-primary w-100"  name="id" value=<?= $row['id']; ?> />
							</form>
							<form action="CustUpdateForm.php" method="POST">
								<td><input type="submit" class="btn btn-warning w-100" value="edit" name="edit"/></td>
								<input type="hidden" class="btn btn-primary w-100" name="id" value=<?= $row['id']; ?>  />
							</form>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>


		</div>
	</div>
	
	

</body>
</html>