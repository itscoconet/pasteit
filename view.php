<?php 
require('global/connect.php');
require('functions.php');
?>
<!DOCTYPE>
<html lang="en">
<head>
	<title>Paste</title>
	<?php include('global/meta.php'); ?>

</head>
<body>
	<?php 
		include('global/nav.php');
		view();
		include('global/footer.php'); 
	?>
</body>
</html>
