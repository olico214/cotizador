<!DOCTYPE html>
<html>
<?php include './header-main.php'; ?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cotizador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    
    

</head>

<body>

    <header>

    </header>
    <main>
        <!-- Modal toggle -->
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Toggle modal
        </button>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Cotización
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        
                    <div class="flex flex-row">
                        <div class="basis-2/5 p-4 bg-stone-100 shadow-lg rounded-lg">
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Desarrollo</div>
                                <div class="text-lg text-blue-500">Nombre desarrollo</div>
                            </div>
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Moneda Desarrollo</div>
                                <div class="text-lg text-blue-500">M.N.</div>
                            </div>
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Unidad</div>
                                <div class="text-lg text-blue-500">125 D</div>
                            </div>
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Área</div>
                                <div class="text-lg text-blue-500" id="m2">308.00 m2</div>
                            </div>
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Precio por m2</div>
                                <div class="text-lg text-blue-500" id="m2">308.00 M2</div>
                            </div>
                            <div class="p-2">
                                <div class="text-xl font-bold text-primary md:text-2xl">Precio de Lista</div>
                                <div class="text-lg text-blue-500" id="m2">
                                    <div id="moneda">$1,427,684.72</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="basis-3/5 p-4 bg-stone-100 shadow-lg rounded-lg">
                            <div class="flex sm:flex-row flex-col">
                                <label for="plazo" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Plazo de Financiamiento: <span class="text-red-500">*</span></label>
                                <select id="plazo" class="form-select form-select-sm text-white-dark">
                                    <option>Open this select menu</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="default-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
<?php include './footer-main.php'; ?>

</html>