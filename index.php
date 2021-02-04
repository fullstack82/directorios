<?php

// Crear directorio  (sino esta, me la crea, sino salta el error)
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('no se pudo crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}

echo "<hr/> <h1>Contenido de la carpeta</h1>";
//rmdir('mi_carpeta');   // Borrar carpeta;

if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }
        
    }
}