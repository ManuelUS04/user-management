<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex justify-center items-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo modal -->
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- Contenido del modal -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" wire:model="id"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form class="px-6 py-4">
                <!-- Campos del formulario -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nombre:</label>
                    <input type="text" id="name" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-bold text-gray-700 mb-2">Apellido:</label>
                    <input type="text" id="last_name" wire:model="last_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Correo:</label>
                    <input type="text" id="email" wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Contraseña:</label>
                    <input type="password" id="password" wire:model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Teléfono:</label>
                    <input type="text" id="phone" wire:model="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end">
                    <button type="button" wire:click.prevent="save()" class="inline-flex justify-center bg-green-500 hover:bg-green-600 mx-2 items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150">Guardar</button>

                    <button type="button" wire:click="closeModal()" class="mx-2 ml-2 inline-flex justify-center bg-red-500 hover:bg-red-600 items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest focus:outline-none focus:border-gray-400 focus:shadow-outline-gray active:bg-gray-200 transition ease-in-out duration-150">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
