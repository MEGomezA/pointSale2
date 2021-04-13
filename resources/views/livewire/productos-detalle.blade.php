<div>
    <section class="w-full max-w-2xl mt-6 px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Información del producto</h2>
        <p class="mt-1 text-sm text-gray-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </p>
        <div class="mt-6 ">
            <form action="#" wire:submit.prevent="save" method="POST">
                <div class="items-center -mx-2 md:flex">
                    <div class="w-full mx-2">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Código</label>
                        <input
                            class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                            type="text" wire:model="prod.codigo" id="codigo">
                    </div>

                    <div class="w-full mx-2 mt-4 md:mt-0">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Descripción</label>
                        <input
                            class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                            type="text" wire:model="prod.descripcion" id="descripcion">
                    </div>
                    <div class="w-full mx-2 mt-4 md:mt-0">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Precio</label>
                        <input
                            class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                            type="text" wire:model="prod.precio" id="precio">
                    </div>
                </div>
                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-4 py-2 text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-gray-600">
                        Guardar</button>
                </div>
                
            </form>
        </div>
    </section>
</div>
