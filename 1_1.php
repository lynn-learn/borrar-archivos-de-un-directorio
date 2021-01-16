//listar directorio
<?php
$urlActual = getcwd();
echo $urlActual;
$url = $urlActual.'/mysql_resources';
$arrayArchivos = scandir($url);
print_r($arrayArchivos);
echo '<br>unlink:<br>';

for($i=0; $i < count($arrayArchivos); $i++ ){
    $urlArchivo = $url.'/'.$arrayArchivos[$i];
    if (file_exists($urlArchivo) &&  $arrayArchivos[$i]!='.' && $arrayArchivos[$i]!='..' ) {
        $success = unlink($urlArchivo);
        if (!$success) {
            throw new Exception("Cannot delete $urlArchivo");
        }else{echo 'exito<br>';
        
        }

    }

}


?>