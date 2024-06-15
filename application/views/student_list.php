<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student List</title>
</head>
<body>
	<h3><?php echo $title; ?></h3>
	<h3>Student List</h3>
	
	<!-- two ways printing the data coming from the controller -->
	<h3><?php echo $body; ?></h3>
	<h3><?= $body ?></h3>
</body>
</html>
