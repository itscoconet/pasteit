<?php require('global/connect.php');
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$paste = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['paste']));
   	$type = $_POST['type'];
   	$date = $_POST['date'];
   	$link = $_POST['link'];
	$unique = $link . date('His',$date);


	if(strlen($paste) >= 10){
		$sql = "INSERT INTO pastes (typeID, pasteLink, pasteTitle, pasteContent, pasteDate) VALUES ('$type', '$unique', '$title', '$paste', '$date')";
		$query = mysqli_query($connect, $sql);
		if($query){
			$uploadMSG = '<div class="alert alert-success">
    <strong>Success!</strong> Your Paste have been saved! You can view it here <a href="view.php?pasteLink='.$link.'">view.php?pasteLink='.$link.'</a></div>';
		}else {
			$uploadMSG = "Saving your paste has failed!";
		}
	}else{
		$uploadMSG = '<div class="alert alert-warning">
    <strong>Warning!</strong>Your Paste is too short!
  </div>';
	}
	
}?>

<!DOCTYPE>
<html lang="en">
<head>
	<title>Paste</title>
	<?php include('global/meta.php'); ?>
</head>


<body>
	<?php include('global/nav.php'); ?>

	<div class="container cvbe-index">
		<?php if(isset($uploadMSG)) echo $uploadMSG ?>
	  	<form action="" method="POST">
		    <div class="form-group">
		      	<input type="text" class="form-control input-lg" id="title" placeholder="Paste Title" name="title">
		      	<input type="hidden" name="date" value="<?php echo time();?>"/>
		      	<input type="hidden" name="link" value="<?php echo generateRandomString();?>"/>
		    </div>
		    <div class="form-group">
		      	<textarea rows="10" name="paste" class="form-control input-lg" placeholder="Paste your code here"></textarea>
		    </div>
		    <div class="form-group">
		      	<select name="type" class="form-control input-lg" >
		      		<option value="language-none">Select Language</option>
				<?php
					$sql = "SELECT * FROM type ORDER BY typeID";
					$query = mysqli_query($connect, $sql);
					while($row = mysqli_fetch_assoc($query)){
						$id = $row['typeID'];
						$name = $row['typeTitle'];
						echo "<option value=$id>".$name."</option>";
					}
				?>
				</select>
		    </div>
		    <button type="submit" name="submit" class="btn btn-info btn-lg">Save</button>
	  	</form>
	</div>
				
	
	<?php include('global/footer.php'); ?>
				
				<!--<script>
		        var textarea = null;
		        window.addEventListener("load", function() {
		            textarea = window.document.querySelector("textarea");
		            textarea.addEventListener("keypress", function() {
		                if(textarea.scrollTop != 0){
		                    textarea.style.height = textarea.scrollHeight + "px";
		                }
		            }, false);
		        }, false);
		    	</script>-->
		
</body>
</html>
