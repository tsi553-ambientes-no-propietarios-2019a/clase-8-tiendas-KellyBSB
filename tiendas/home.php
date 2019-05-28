<?php 
include('common/utils.php');
//print_r($_SESSION['user']);

$products = getProducts($conn);
$tiendas = gettiendas($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Tienda: <?php echo $_SESSION['user']['store']; ?></h2>

	<a href="new_product.php">Añadir producto</a>

	<table>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Precio</th>

			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['code'] ?></td>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['type'] ?></td>
					<td><?php echo $p['stock'] ?></td>
					<td><?php echo $p['price'] ?></td>

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
</html>