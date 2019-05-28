<?php
include('common/utils.php');

if ($_GET) {
	if(isset($_GET['tienda'])){
		$store=$_GET['tienda'];
		echo "<h3>Esta es la tienda $store </h3>";
	}

}

$pro = getotrastiendas($conn,$store);
$tiendas = gettiendas($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>
				<th>id</th>

			</tr>
		</thead>

		<tbody>
			<?php foreach ($pro as $p) { ?>
				<tr>
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?></td>
					<td><?php echo $p['id'] ?></td>
					
				</tr>
			<?php } ?>
		</tbody>
	</table>

<h3>Otras tiendas</h3>

	<?php foreach ($tiendas as $p) { ?>
				
				<a href="store.php?tienda= <?php echo $p['store'] ?>"><?php echo $p['store'] ?> </a>
				<br>
				
			<?php } ?>

</body>
</html

