<?php
	include_once("DbManager.php");
  session_start();

	$codigo=$_POST['codigo'];

   $obj=new DBManager;

	 $conexion = $obj->connectDB();

	mysqli_set_charset($conexion, "utf8");


	if ($obj->connectDB()==true){
		  if($codigo!="")
		  {
				$query="SELECT * FROM admin WHERE codigo='$codigo'";
				$result = mysqli_query($conexion,$query);
				if($row = mysqli_fetch_array($result)){
				  if( $row["codigo"] == $codigo){
          			$_SESSION['k_codigo'] = $row['codigo'];
					  $_SESSION['k_nombre'] = $row['nombre'];
					


					header('location: menu.php');
        		}
			}
			else
			{
				header('location: login.php');
        	}
    	}
			else{header('location: login.php');}

	}
	mysqli_close($conexion);

?>
