<div class="bg-white rounded-xl shadow-sm">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Lista de Usuarios</h2>
                            <button id="addUserButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                                Agregar Usuario
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full" id="usersTable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rol</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="usersTableBody"></tbody>
                        </table>
                    </div>
                </div>

                <div id="userModal" class="modal hidden">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle" class="text-xl font-semibold text-gray-800">Agregar Usuario</h2>
                <button id="closeModal" class="modal-close">&times;</button>
            </div>
            <form id="userForm" class="modal-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required>
                    <span class="error-message" id="nameError"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error-message" id="emailError"></span>
                </div>
                <div class="form-group">
                    <label for="role">Rol</label>
                    <select id="role" name="role">
                        <option value="Usuario">Usuario</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Proveedor">Proveedor</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancelButton" class="btn-secondary">Cancelar</button>
                    <button type="submit" class="btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>      