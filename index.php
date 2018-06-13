<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
<body>
	<form class="form-horizontal" action="upload.php" method="POST" name="upload_excel" enctype="multipart/form-data">
		<fieldset>
			<div class="form-group">
				<label class="col-md-4 control-label" for="filebutton">Select File</label>
			<div class="col-md-4">
				<input type="file" name="file" id="file" class="input-large">
			</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="singlebutton">Import data</label>
			<div class="col-md-4">
				<button type="submit" id="submit" name="upload" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
			</div>
			</div>
		</fieldset>
	</form>
</body>
</html>