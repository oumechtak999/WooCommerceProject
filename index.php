<!DOCTYPE html>
<html>
<head>
	<title>Data transaksi woocommerce</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php  
	   include 'Model/produit.php';
	   $produit = new produit(null,null,null,null);
	    $data =  $produit->get();	
		$data = json_decode($data, true);
		
	?>
	  <div>
		<br><br>
		<center><h1 class="text-success">Products</h1></center>
		<br><br>
		<center><a href="http://localhost/woocommerce/CreateForm.php">create new product</a></center>
		<br><br>
	</div>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>name</th>
						<th>slug</th>
						<th>description</th>
						<th>delete</th>
						<th>edit</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ( $data as $row ) : ?>
					<tr>
						<td><?= $i; ?></td>
						<td><?= $row['name']; ?> </td>
						<td><?= $row['slug']; ?> </td>
						<td><?= $row['description']; ?> </td>	
						<form action="Controller/C_produit.php" method="POST">
						<td><input type="submit" class="btn btn-danger w-100" value="delete" name="delete"/> </td>
						<input type="hidden" class="btn btn-primary w-100"  name="id_produit" value=<?= $row['id']; ?> />
						</form>
						<form action="UpdateForm.php" method="POST">
						<td><input type="submit" class="btn btn-warning w-100" value="edit" name="edit"/></td>
						<input type="hidden" class="btn btn-primary w-100" name="id_produit" value=<?= $row['id']; ?>  />
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