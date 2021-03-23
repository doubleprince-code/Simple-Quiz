<?php SESSION_START();
	include_once('connection.php');

	$make = $_GET['id'];
	 $make;
			
	 $done = mysqli_query($conn1, "SELECT * FROM `gallery` WHERE `id` = '$make'");
		while($run_done = mysqli_fetch_array($done)){
			$id = $run_done['id'];
			 $picx = $run_done['photos'];
			 
		}
		
		$del = mysqli_query($conn1, "DELETE FROM `gallery` WHERE `id`='$make'");
		
		echo "<script>alert('Picture deleted')</script>";
		echo "<script>window.location='upload.php'</script>";
?>

