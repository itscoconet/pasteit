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
	<?php include('global/nav.php'); ?>

	<div class="container">
		<ul class="list-group">
		<?php archive(); ?>
		</ul>
	</div>

	<?php include('global/footer.php'); ?>
</body>
</html>
