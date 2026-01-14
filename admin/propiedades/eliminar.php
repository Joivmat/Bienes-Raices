<?php
    require '../../includes/config/database.php';

    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] ==='POST') {
        $id =  $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);

        if($id){
            // Obtener imagen
            $stmt = $db->prepare("SELECT imagen FROM propiedades WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $propiedad = $resultado->fetch_assoc();

            if($propiedad){
                // Eliminar imagen
                $rutaImagen = '../../imagenes/' . $propiedad['imagen'];
                if(file_exists($rutaImagen)){
                    unlink($rutaImagen);   
                }

                // Eliminar propiedad
                $stmt = $db->prepare("DELETE FROM propiedades WHERE id = ?");
                $stmt->bind_param("i",$id);
                $stmt->execute();
            }      
            
        }
    }

header('Location: /admin?resultado=3');
exit;

?>