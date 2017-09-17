<?php 
	require_once("conectar.php");

	$conectar = new conexion;

	$sql = "SELECT * FROM usuario";
	$result =  $conectar->Conectar()->query($sql); 

	while ($row = $result->fetch_assoc()) 
	{ 
	    /*almacenamos el nombre de la ruta en la variable $ruta_img*/ 
	    $ruta_img = $row["imagen"]; 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina de perfil</title>
</head>
<body>
	<div>
	   <img src="Images/<?php echo $ruta_img;?>" alt="" />
	</div>

	<form action="subirImagen.php" enctype="multipart/form-data" method="post">
	  <label for="imagen">Imagen:</label> 
	  <input id="imagen" name="imagen" size="30" type="file" />
	  <input type="submit" value="Enviar" />
	</form>
</body>
</html>