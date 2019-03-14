<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CSV Viewer</title>
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	</head>
	<body>
		<form enctype="multipart/form-data" action="viewer.php" method="POST">
			<div class="tab header">
				<img src="assets/img/icon.png" width="20" align="top"> CSV Viewer
			</div>
			<hr>
			<div class="tab">
				Upload a .csv file:
				<input name="csvfile" type="file" />
			</div>
			<hr>
			<div class="tab">
				Delimiter:<br>
				<span class="radiooption"><input type="radio" name="delim" id="delim0" value="," checked> <label for="delim0">Comma (,)</label></span>
				<span class="radiooption"><input type="radio" name="delim" id="delim1" value=";"> <label for="delim1">Semicolon (;)</label></span>
			</div>
			<hr>
			<div class="tab">
				<span class="checkboxoption"><input type="checkbox" name="esc" id="esc" value="1"> <label for="esc">Escape HTML entities</label></span>
			</div>
			<hr>
			<div class="tab" style="background-color:#EFEDDD">
				<input type="submit" value="Submit">
			</div>
		</form>
	</body>
</html>