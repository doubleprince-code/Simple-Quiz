<?php SESSION_START();
	error_reporting(E_ERROR);

	SESSION_DESTROY();
    SESSION_UNSET();

    echo "<script> window.location ='../../index.php' </script>";
?>

