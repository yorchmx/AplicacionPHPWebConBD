<?php
//INSERT INTO `cursos` (`id`, `nombre_clase`) VALUES (NULL, 'Bádminton para niños'), (NULL, 'Escalada para niños');

include_once '../configuraciones/db.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_clase=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!=''){

    switch($accion){

        case 'agregar':
             $sql="INSERT INTO cursos (id, nombre_clase) VALUES (NULL, '$nombre_clase')";
             echo $sql;
        break;
    }    
}

$consulta=$conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();


?>