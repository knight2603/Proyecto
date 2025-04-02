<div class="bg-white rounded-xl shadow-sm">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-gray-800">Lista de Productos</h2>
                            <button id="addProductButton" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                                Agregar Producto
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKU</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producto</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoría</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="productsTableBody" class="bg-white divide-y divide-gray-200"></tbody>
                        </table>
                    </div>
                </div>

                <div id="productModal" class="modal hidden">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle" class="text-xl font-semibold text-gray-800">Agregar Producto</h2>
                <button id="closeModal" class="modal-close">&times;</button>
            </div>
            <form id="productForm" class="modal-body">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" id="sku" name="sku" placeholder="AAA-000" required>
                    <span class="error-message" id="skuError"></span>
                </div>
                <div class="form-group">
                    <label for="name">Nombre del Producto</label>
                    <input type="text" id="name" name="name" required>
                    <span class="error-message" id="nameError"></span>
                </div>
                <div class="form-group">
                    <label for="category">Categoría</label>
                    <select id="category" name="category" required>
                        <option value="Cuadernos">Cuadernos</option>
                        <option value="Escritura">Escritura</option>
                        <option value="Papel">Papel</option>
                        <option value="Archivo">Archivo</option>
                        <option value="Arte">Arte</option>
                        <option value="Oficina">Oficina</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                    <span class="error-message" id="priceError"></span>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" required>
                    <span class="error-message" id="stockError"></span>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancelButton" class="btn-secondary">Cancelar</button>
                    <button type="submit" class="btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>          