<?php
if (!isset($_FILES['csvfile']['tmp_name'])) header('Location: index.php');
if (!isset($_POST['delim'])) header('Location: index.php');

$lines = explode(PHP_EOL,file_get_contents($_FILES['csvfile']['tmp_name']));
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSV Viewer - <?=$_FILES['csvfile']['name'] ?></title>
	<style>
<?php include('assets/css/csvreader.css') ?>
	</style>
</head>
<body>
	<table>
		<?php foreach ($lines as $line) { ?>
			<?php $line = explode($_POST['delim'], $line); ?>
			<tr>
				<?php foreach ($line as $column) { ?>
					<td><?=(isset($_POST['esc']) ? htmlentities($column) : $column) ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
</body>
</html>