<?php 
function archive(){
	global $connect;
	$sql = "SELECT * FROM pastes INNER JOIN type on pastes.typeID = type.typeID ORDER BY pasteDate DESC";
	$query = mysqli_query($connect, $sql);
	
	while($row = mysqli_fetch_assoc($query)){ 
		$name = $row['pasteTitle'];
		$url = $row['pasteLink'];
		$typeCode = $row['typeCode'];
		$type = $row['typeTitle'];
				
		echo '<li class="list-group-item"><a href="view.php?pasteLink='.$url.'">'.$name.'</a><span class="badge">'.$type.'</span></li>';

	}
}

function raw(){
	global $connect;
	$sql = "SELECT * FROM pastes 
			INNER JOIN type ON pastes.typeID = type.typeID 
			WHERE pasteLink = '" .$_GET['pasteLink']. "'";
	$query = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($query);
	$title = $row['pasteTitle'];
	$paste = $row['pasteContent'];
	$type = $row['typeTitle'];

	echo '<pre>'.$paste.'</pre>';
}


function view(){
	global $connect;
	$sql = "SELECT * FROM pastes INNER JOIN type on pastes.typeID = type.typeID WHERE pasteLink = '" .$_GET['pasteLink']. "'";
	$query = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($query);
	$title = $row['pasteTitle'];
	$paste = $row['pasteContent'];
	$type = $row['typeCode'];
	$url =  $row['pasteLink'];


	echo '
	<div class="container cvbe-view">
		<div class="btn-group">
			<a href="https://www.facebook.com/sharer/sharer.php?u=view.php?pasteLink='.$url.'" class="btn btn-primary">Facebook</a>
			<a href="https://twitter.com/home?status=view.php?pasteLink='.$url.'" class="btn btn-info">Twitter</a>
			<a href="https://plus.google.com/share?url=view.php?pasteLink='.$url.'" class="btn btn-danger">Google+</a>
		</div>
		<div class="btn-group">
			<a href="raw.php?pasteLink='.$url.'" class="btn btn-default">View Raw</a>
		</div>
		<pre class="'.$type.'"><code class="'.$type.'">'.$paste.'</code></pre>
	</div>';
}

?>