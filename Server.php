<!DOCTYPE html>
<html>
<head>
	<title>Установка и настройка веб-сервера</title>
</head>
<body>

<?php
$json=file_get_contents(__DIR__ . '/Contacs.json');
$date=json_decode($json, true);

?>
<style type="text/css">
	table{
		text-align: center;
		border-collapse: collapse;
	}
	td{
		padding: 10px;
		border: 1px solid black;
	}

</style>
<table>
	
	<tr>
		<td>Первое имя</td>
		<td>Второе Имя</td>
		<td>Адрес</td>
		<td>Телефон</td>
	</tr>
		<?php foreach ($date as $value) { ?>
	<tr>
				<td> <?php echo $value['Firstname']; ?> </td>
				<td> <?php echo $value['second name']; ?> </td>
				<td> <?php echo $value['adress']; ?></td>
				<td> <?php echo $value['number']; ?></td>
		<?php } ?>
	</tr>
		
</table>
</body>
</html>
