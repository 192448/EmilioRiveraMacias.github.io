<?php
    //verificar si el archivo existe e inicializarlo con 0
    if(!file_exists("dato.txt")){
        file_put_contents("dato.txt", "0\r\n");
    }
    //verifica si la variable data está definida en la solicitud GET y escribir el valor de estavariable dentro de dato.txt con su formato respectivo
    if(isset($_GET['data'])){
        $VAR1=$_GET['data'];
        $TEXTO=$VAR1."\r\n";
        file_put_contents("dato.txt",$TEXTO);
    }
    
    //abrir el archivo dato.txt y extraer el valor de este con el formato adecuado en la variable %VAR1
    $ARCHIVO = file_get_contents("dato.txt");
    $pos=strpos($ARCHIVO, "\r\n");
    $VAR1=substr($ARCHIVO,0,$pos);
?>

<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content="1">
	</head>
	
	<body>
        <p style="font-size:20px ;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        color: #707070;
        <!-- Insertar $VAR1 dentro del HTML para que el usuario lo pueda visualizar  -->
        line-height: 0;"><?php echo $VAR1 ?> </p>
    </body>

</html>
