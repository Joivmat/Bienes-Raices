<?php 

    require 'includes/config/database.php';
    $db = conectarDB();
    $errores = [];


    // Autentificar User
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validar

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores['email'] = 'El email no es válido';
        }

        if(!$password) {
            $errores['password'] = 'La contraseña no es válida';
        }

        if(empty($errores)){

        $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if( $resultado->num_rows === 0) {
            $errores['email'] = 'El usuario no existe';    
        } else {
            $usuario = $resultado->fetch_assoc();

            if (!password_verify($password, $usuario['password'])) {
                $errores['password'] = 'Las credenciales son incorrectas';
            } else {
                // Login correcto
                session_start();
                session_regenerate_id();

                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');
                exit;
            }
        }

        $stmt->close();
    }
}    
        

        

    

    // Header
    require 'includes/funciones.php';
    incluirTemplate('header','Login'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php if(!empty($errores)): ?>
        <div class="alerta error">
            Error al iniciar sesión
        </div>
    <?php endif; ?>

        <form class="formulario" method="POST">
            <fieldset>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu E-mail" id="email">
                
                <?php if(isset($errores['email'])): ?>
                <p class="error-text"><?php echo $errores['email']; ?></p>
                <?php endif; ?>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu password" id="password">

                <?php if(isset($errores['password'])): ?>
                <p class="error-text"><?php echo $errores['password']; ?></p>
            <?php endif; ?>
            </fieldset>
            
            <input type="submit" value="Iniciar Sesión" class="boton boton-verde" > 
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>