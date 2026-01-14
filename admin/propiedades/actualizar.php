<?php
// Verificar id
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /admin');
    exit;
}

// Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consulta Propiedad
$consultaPropiedad = "SELECT * FROM propiedades WHERE id={$id}";
$resultado = mysqli_query($db, $consultaPropiedad);
$propiedad = mysqli_fetch_assoc($resultado);

// Consulta Vendedores
$consultaVendedores = 'SELECT * FROM vendedores';
$resultado = mysqli_query($db,$consultaVendedores);

// Inicializar variables
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$imagen = $propiedad['imagen'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedor_id = $propiedad['vendedores_id'];

// 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $titulo = trim($_POST['titulo'] ?? '');
    $precio = $_POST['precio'] ?? '';
    $descripcion = trim($_POST['descripcion'] ?? '');
    $habitaciones = $_POST['habitaciones'] ?? '';
    $wc = $_POST['wc'] ?? '';
    $estacionamiento = $_POST['estacionamiento'] ?? '';
    $vendedor_id = $_POST['vendedor'] ?? '';
    $imagen = $_FILES['imagen'] ?? null;
    
    // Condicionales
    
    if($titulo === ''){
        $errores['titulo'] = 'El título es obligatorio';
    }

    if(!filter_var($precio, FILTER_VALIDATE_FLOAT) || $precio <= 0){
        $errores['precio'] = 'El precio es obligatorio';
    }

    if($descripcion === ''){
        $errores['descripcion'] = 'La descripción es obligatoria';
    } elseif(strlen($descripcion) < 50){
        $errores['descripcion'] = 'La descripción debe tener al menos 50 caracteres';
    }

    if(!filter_var($habitaciones, FILTER_VALIDATE_INT)){
        $errores['habitaciones'] = 'Debes indicar el número de habitaciones';
    }

    if(!filter_var($wc, FILTER_VALIDATE_INT)|| $wc < 0){
        $errores['wc'] = 'Debes indicar el número de baños';
    }

    if(!filter_var($estacionamiento, FILTER_VALIDATE_INT) || $estacionamiento < 0){
        $errores['estacionamiento'] = 'Debes indicar los espacios de estacionamiento';
    }

    if(!filter_var($vendedor_id, FILTER_VALIDATE_INT)){
        $errores['vendedor'] = 'Selecciona un vendedor';
    }

    // Tamaño máximo 5mb
    if($imagen['name']){
        if($imagen['size'] > 5 * 1024 * 1024){
        $errores['imagen'] = 'La imagen no puede pesar más de 5MB';
    }

    // Tipos permitidos
    $tiposPermitidos = ['image/jpeg', 'image/png'];
    if(!in_array($imagen['type'], $tiposPermitidos)){
        $errores['imagen'] = 'Solo se permiten imágenes JPG o PNG';
    }
    }
    


    
    if(empty($errores)) {

        $precio = (float) $precio;
        $habitaciones = (int) $habitaciones;
        $wc = (int) $wc;
        $estacionamiento = (int) $estacionamiento;
        $vendedor_id = (int) $vendedor_id;

        // Crear carpeta imagenes
        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes, 0755, true);
        }

        $nombreImagen = "";

        if($imagen['name']){
            // Eliminar imagen existente
            unlink($carpetaImagenes . $propiedad['imagen']);

            // Nombre unico
            $nombreImagen = bin2hex(random_bytes(16)) . '.jpg' ;

            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . $nombreImagen);
        } else {
            // Mantener imagen previa
            $nombreImagen = $propiedad['imagen'];
        }

        

        

        //Instruccion sql

        $stmt = $db->prepare("
            UPDATE propiedades SET 
                titulo = ?,
                precio = ?,
                imagen = ?,
                descripcion = ?,
                habitaciones = ?,
                wc = ?,
                estacionamiento = ?,
                vendedores_id = ?
            where id=?
        ");

        // Unir los parametros

        $stmt->bind_param(
            "sdssiiiii",
            $titulo,
            $precio,
            $nombreImagen,
            $descripcion,
            $habitaciones,
            $wc,
            $estacionamiento,
            $vendedor_id,
            $id
        );

        // Ejecutar la instruccion 

        if($stmt->execute()){
            header('Location: /admin?resultado=2');
            exit;
        } else {
            $errores[] = "Error al guardar la propiedad";
        }
    }
}

// Templates
require '../../includes/funciones.php';
incluirTemplate('header','Actualizar');
?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <?php if(!empty($errores)): ?>
        <div class="alerta error">
            Corrige los campos marcados para continuar
        </div>
    <?php endif; ?>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form method="POST" class="formulario" enctype="multipart/form-data">

        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input 
                type="text"
                id="titulo"
                name="titulo"
                value="<?php echo htmlspecialchars($titulo); ?>">

            <?php if(isset($errores['titulo'])): ?>
                <p class="error-text"><?php echo $errores['titulo']; ?></p>
            <?php endif; ?>

            <label for="precio">Precio:</label>
            <input 
                type="number"
                step="0.01"
                id="precio"
                name="precio"
                value="<?php echo (htmlspecialchars($precio)); ?>">

            <?php if(isset($errores['precio'])): ?>
                <p class="error-text"><?php echo $errores['precio']; ?></p>
            <?php endif; ?>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            <?php if (isset($errores['imagen'])):?>
                <p class="error-text"><?php echo $errores['imagen']; ?></p>
            <?php endif; ?>
            <img src="/imagenes/<?php echo $imagen;?>" alt="imagen propiedad" class="imagen-form">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo htmlspecialchars($descripcion); ?></textarea>
            <?php if(isset($errores['descripcion'])): ?>
                <p class="error-text"><?php echo $errores['descripcion']; ?></p>
            <?php endif; ?>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input 
                type="number"
                id="habitaciones"
                name="habitaciones"
                value="<?php echo htmlspecialchars($habitaciones); ?>">
            <?php if(isset($errores['habitaciones'])): ?>
                <p class="error-text"><?php echo $errores['habitaciones']; ?></p>
            <?php endif; ?>

            <label for="wc">Baños:</label>
            <input 
                type="number"
                id="wc"
                name="wc"
                value="<?php echo htmlspecialchars($wc); ?>">
            <?php if(isset($errores['wc'])): ?>
                <p class="error-text"><?php echo $errores['wc']; ?></p>
            <?php endif; ?>

            <label for="estacionamiento">Estacionamiento:</label>
            <input 
                type="number"
                id="estacionamiento"
                name="estacionamiento"
                value="<?php echo htmlspecialchars($estacionamiento); ?>">
            <?php if(isset($errores['estacionamiento'])): ?>
                <p class="error-text"><?php echo $errores['estacionamiento']; ?></p>
            <?php endif; ?>
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="" disabled selected>-- Seleccionar Vendedor --</option>
                <?php while($row = mysqli_fetch_assoc($resultado)):?>
                    <option <?php echo $vendedor_id == $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['nombre'] . " " . $row['apellido'];?></option>
                <?php endwhile ?>
            </select>

            <?php if(isset($errores['vendedor'])): ?>
                <p class="error-text"><?php echo $errores['vendedor']; ?></p>
            <?php endif; ?>
        </fieldset>

        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">

    </form>
</main>

<?php incluirTemplate('footer'); ?>
