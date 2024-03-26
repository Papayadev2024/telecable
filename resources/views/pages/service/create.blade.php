<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <section class="py-4 border-b border-slate-100 dark:border-slate-700">
            <a href="{{ route('servicios.create') }}" class="bg-blue-600 text-white rounded px-4 py-2" >Crear Servicios</a>
        </section>


        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            
            
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100">CREAR SERVICIO</h2>
            </header>
            <div class="p-3">
        
                <form action="{{ route('servicios.store') }}" method="POST">
                    @csrf
                    <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                            <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-normal">Información del Servicio</h2>
                        </header>

                        <div class="bg-violet-100 p-3 w-1/2">
                            
                            <div class="md:col-span-5">
                                <label for="address">Título del servicio</label>
                                <div class="relative mb-2 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                    </div>
                                    <input type="text" id="address" name="address" value="" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Titulo del Servicio">
                                </div>
                            </div>
                            
                        </div>

                        <div class="p-3">
                            <div class="flex items-center justify-center ">
                                        
                                        <div class="rounded shadow-lg p-4 px-4 bg-yellow-100">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
            
                                            <div class="lg:col-span-1">
                                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                                
                                                <!--h2 class="md:col-span-5 text-lg font-semibold text-slate-800 dark:text-white" >Información de contacto</h2-->
            
                                                <div class="md:col-span-5">
                                                    <label for="address">Título del servicio</label>
                                                    <div class="relative mb-2 ">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                                        </div>
                                                        <input type="text" id="address" name="address" value="" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Titulo del Servicio">
                                                    </div>
                                                </div>

                                                <div class="md:col-span-5">
                                                    <label for="address">Descripción del servicio</label>
                                                    <div class="relative mb-2 ">

                                                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                                                    </div>
                                                </div>

                                                <div class="md:col-span-5">
                                                    <label for="address">Subir una Foto</label>
                                                    <div class="relative mb-2 ">
                                                        <input class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                                    </div>
                                                </div>
            
                                                <div class="md:col-span-5 text-right mt-6">
                                                    <div class="inline-flex items-end">
                                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar datos</button>
                                                    </div>
                                                </div>
            
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                       
                                </div>
        
                        </div>
                    </div>   
            </form>


            </div>
        </div>   

    </div>


</x-app-layout>
