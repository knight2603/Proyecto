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
                    <option value="user">Usuario</option>
                    <option value="proveer">Proveedor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" id="contraseña" required placeholder="Ingrese su contraseña">
            </div>
            <div id="error-message" style="display: none;"></div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>