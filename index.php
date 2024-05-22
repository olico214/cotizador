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
            Cotizacion
        </button>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full">
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

                        <div class="grid grid-cols-1 gap-2">
                            <div class="flex flex-wrap justify-center items-center  bg-stone-100 shadow-lg rounded-lg p-8 space-x-4">
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg text-orange-200 md:text-2xl">Desarrollo</div>
                                    <div class="text-base text-green-500">Nombre desarrollo</div>
                                </div>
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg text-orange-200 md:text-2xl">Moneda Desarrollo</div>
                                    <div class="text-base text-green-500">M.N.</div>
                                </div>
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg text-orange-200 md:text-2xl">Unidad</div>
                                    <div class="text-base text-green-500">125 D</div>
                                </div>
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg text-orange-200 md:text-2xl">Área</div>
                                    <div class="text-base text-green-500" id="m2">308.00 m2</div>
                                </div>
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg text-orange-200 md:text-2xl">Precio por m2</div>
                                    <div class="text-base text-green-500" id="m2">308.00 M2</div>
                                </div>
                                <div class="p-2 shadow-lg rounded-lg">
                                    <div class="text-lg  text-orange-200 md:text-2xl">Precio de Lista</div>
                                    <div class="text-base text-green-500" id="m2">
                                        <div id="moneda">$1,427,684.72</div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5 flex justify-center " x-data="{ activeTab: 1}">
                                <div class="inline-block w-full">
                                    <ul class="mb-5 grid grid-cols-2 text-center">
                                        <li>
                                            <a href="javascript:;" class="bg-[#f3f2ee] dark:bg-[#1b2e4b] p-2.5 block rounded-full" :class="{'!bg-success text-white': activeTab === 1}" @click="activeTab = 1">1 Cotización</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="bg-[#f3f2ee] dark:bg-[#1b2e4b] p-2.5 block rounded-full" :class="{'!bg-success text-white': activeTab === 2}" @click="activeTab = 2">2 Imagenes</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="container mx-auto max-w-2xl p-4">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                                                    <div>
                                                        <label for="plazo" class="mb-0 sm:w-1/4 ">Plazo de Financiamiento:</label>
                                                    </div>

                                                    <div>
                                                        <select id="plazo" class="form-select form-select-lg text-white-dark  w-3/8">
                                                            <option>Seleccione un plazo</option>
                                                            <option>Contado</option>
                                                            <option>24 Meses</option>
                                                            <option>36 Meses</option>
                                                            <option>48 Meses</option>

                                                        </select>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <!--descuento-->


                                                    <div>
                                                        <label for="descuento" class="mb-0 sm:w-1/4">Descuento m2:</label>
                                                    </div>

                                                    <div class="flex w-full">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="Descuento" class="rounded-r-lg" style="width: 150px;" />
                                                    </div>

                                                    <div class="flex w-full">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="valor" class="rounded-r-lg" style="width: 150px;" />
                                                    </div>


                                                    <!--total venta-->

                                                    <div>
                                                        <label for="total-venta" class="mb-0 sm:w-1/4">Total Venta:</label>
                                                    </div>

                                                    <div class="col-span-2 flex w-full w-1/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b] ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="total-venta" placeholder="0" class="rounded-r-lg w-3/8" />
                                                    </div>



                                                    <!--total engacnhe-->
                                                    <div>
                                                        <label for="descuento" class="mb-0 sm:w-1/4">Total Enganche:</label>
                                                    </div>

                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="0" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>


                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="0" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>


                                                    <div>
                                                        <label for="descuento" class="mb-0 sm:w-1/4">Enganches:</label>
                                                    </div>

                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hash" viewBox="0 0 16 16">
                                                                <path d="M8.39 12.648a1 1 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1 1 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.51.51 0 0 0-.523-.516.54.54 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532s.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531s.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="NUM ENGANCHES" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>


                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="0" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>

                                                    <!--total mensualidad-->
                                                    <div>
                                                        <label for="descuento" class="mb-0 sm:w-1/4">Total Mensualidades:</label>
                                                    </div>

                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="0" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>


                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="0" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>

                                                    <!--numero de mensualidades-->
                                                    <div>
                                                        <label for="descuento" class="mb-0 sm:w-1/4">Mensualidades:</label>
                                                    </div>

                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="Descuento" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>

                                                    <div class="flex w-full sm:w-4/5">
                                                        <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-semibold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="descuento" placeholder="Descuento" class="rounded-r-lg w-3/8" style="width: 150px;" />
                                                    </div>

                                                    <div>
                                                        <input type="text" placeholder="Nombre(s)" class="rounded-lg" required />
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="Apellido Paterno" class="rounded-lg" required />
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="Apellido Materno" class="rounded-lg" required />
                                                    </div>

                                                    <div>
                                                        <input type="text" placeholder="Numero de telefono" class="rounded-lg" required />
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="Correo Electronico" class="rounded-lg" required />
                                                    </div>
                                                    <br>

                                                    <div class="col-span-3">
                                                        <textarea id="ctnTextarea" rows="3" class="form-textarea rounded-lg" placeholder="Escribe un comentario" required></textarea>
                                                    </div>
                                                </div>




                                            </div>

                                        </template>
                                        <template x-if="activeTab === 2">
                                            <p class="mb-5">Aqui va un carrusel de imagenes</p>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 bg-white">
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