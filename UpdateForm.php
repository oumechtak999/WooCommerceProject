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
	$produit = new produit($_POST['id_produit'],null,null,null);
	$data =  $produit->getById();
	$data = json_decode($data, true);
	$description = $data['description'];
	$name = $data['name'];
	$slug = $data['slug'];
	
	
	?>
	<div>
		<br><br>
		<center>
			<h1 class="text-success">Update page</h1>
		</center>
		<br><br>
	</div>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
				</thead>
				<tbody>
					<tr>
						<form action="Controller/C_produit.php" method="POST">
							<div class="form-group">
								<label for="id">id</label>
								<input type="text" id="id" class="form-control" name="id"  value=<?= $data['id'];  ?>  readonly = "readonly" />
							</div>
							<div class="form-group">
								<label for="name">name</label>
								<?php

                                   echo '<input type="text" id="name" class="form-control"  name="name"  value="'.$name.'"/>';
								  ?>
							</div>
							<div class="form-group">
								<label for="slug">slug</label>
								
								<?php

                                   echo '<input type="text" id="slug" class="form-control"  name="slug"  value="'.$slug.'"/>';
								  ?>
							</div>
							<div class="form-group">
								<label for="description">description</label>
								
								<?php

                                   echo '<input type="text" id="description" class="form-control"  name="description"  value="'.$description.'"/>';
								  ?>
							</div>
							<td><input type="submit" class="btn btn-success w-100" value="edit" name="edit"/></td>
							<td><input type="submit" class="btn btn-primary w-100" value="canal" name="canal"/> </td>
						</form>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
	
	

</body>
</html>