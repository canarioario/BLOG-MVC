<?php include 'partial/sidebar.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table{padding: 20px; }
		th,td{padding: 10px;}
		a{padding: 10px; text-decoration: none;}

	</style>
</head>
<body>

<div >
	<table>
		<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>APELLIDO</th>
		<th>CORREO</th>
		<th>ESTADO</th>
        <th>PASS</th>
        <th>LOGIN</th>
        <th>PERMISO</th>
        <th>IMG-ID</th>
		</tr>
<?php 

foreach ($user as $val) {
	echo "<tr>
			<td>".$val['id']."</td>
			<td>".$val['firstname']."</td>
			<td>".$val['lastname']."</td>
			<td>".$val['email']."</td>
            <td>".$val['password']."</td>
            <td>".$val['login_attempts']."</td>
            <td>".$val['permission_id']."</td>
            <td>".$val['file_id']."</td>
			
		</tr>";
}
 ?>

		

	</table>

	<a href="UserExcel.php" >Exportar Excel</a>

</div>

	
</body>
</html>