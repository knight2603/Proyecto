<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <title>Login</title>
</head>
<body>
    <a href="index.html" class="volver">
        Volver
    </a>

    <div class="container">
        <form id="login-form">
            <h1>Iniciar Sesión</h1>
            <p>Ingrese sus credenciales para acceder</p>
            
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" required placeholder="ejemplo@correo.com">
            </div>
            
            <div class="form-group">
                <label for="rol">Rol</label>
                <select id="rol" required>
                    <option value="">Seleccione un rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario">Usuario</option>         
                    <option value="Proveedor">Proveedor</option>     
                  </select>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <div class="password-container">
                    <input type="password" id="contraseña" required placeholder="Ingrese su contraseña">
                    <span class="toggle-password" id="togglePassword">👁️</span>
                </div>
                <a href="forgetpassword.html" class="forgot-password">Olvidé mi contraseña</a>
            </div>
            <div id="error-message" style="display: none;"></div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    <script src="<?php echo e(asset('js/login-unificado.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\HomeCopyVentas\resources\views/auth/login.blade.php ENDPATH**/ ?>