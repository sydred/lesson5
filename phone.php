<?php 
$text = file_get_contents(__DIR__ . '/phone.json');

$info = json_decode($text, true);
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>дз 5</title>
</head>
<body>
<table>
	<tr>
		<td>Имя:</td>
		<td>Фамилия:</td>
		<td>Адрес:</td>
		<td>Телефон:</td>
	</tr>
	<?php foreach ($info as $name) : ?>
		<tr>
			<td><?php echo $name['firstName'];?></td>
			<td><?php echo $name['lastName'];?></td>
			<td><?php echo $name['address'];?></td>
			<td><?php echo $name['phoneNumber'];?></td>
		</tr>
	<?php endforeach; ?>
</table>

</body>
</html>