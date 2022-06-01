<?php
	session_start(); 
	if (isset($_SESSION['k_codigo']))
	{
                //echo $_SESSION['k_password'];
                // echo $_SESSION['k_nombres'];
				// echo $_SESSION['k_apellidos'];


	// Borramos toda la sesion
	session_destroy();
	header('location: login.php');
?>
<?php
	}
	else
	{
		header('location: login.php');
	}
	?>