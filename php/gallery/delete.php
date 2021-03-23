<?php SESSION_START();
  include_once('connection.php');

	$make = $_GET['id'];
	 $make;
	
	
		
	 $gist= mysqli_query($conn1, "SELECT * FROM `gallery`");
		while($run_done = mysqli_fetch_array($gist)){
			$id = $run_done['id'];
			 $picx = $run_done['photos'];
		}
?>

<div>
	<img src="pics/<?php echo $picx ?>"  style="width:50%;"/>
	<br />
	<br />
	<form>
		<input type="button" class="input_dl"  onclick="window.location='upload.php.'" value="Go back">
		<input type="button" onclick="window.location='del.php?id=<?php echo $id ?>'" value="Delete picture">
	</form>
</div>