<x-app-layout>
   
<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <form action="{{ route('servicios.update', $servicios->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Edición servicio: {{ $servicios->title }}</h2>
            </header>
          
            <div class="p-3">
                    <div class="rounded shadow-lg p-4 px-4 ">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                            <div class="md:col-span-5">
                                                <label for="title">Titulo de servicio</label>
                                                <div class="relative mb-2 ">
                                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                                    </div>
                                                    <input type="text" id="title" name="title" value="{{ $servicios->title }}" class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                                                </div>
                                            </div>

                                            <div class="md:col-span-5">
                                                <label for="description">Descripción de servicio</label>
                                                <div class="relative mb-2">
                                                    <div class="absolute inset-y-0 left-0 top-3 flex items-start pl-3 pointer-events-none">
                                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                                    </div>
                                                    <textarea type="text" rows="4"  id="description" name="description"  class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">{{ $servicios->description }}</textarea>
                                                </div>
                                            </div>


                                            <div class="md:col-span-5">
                                                <label for="description">Imagen de servicio</label>
                                                <div class="relative mb-2">
                                                <img src="{{ asset('storage/images/servicios/'.$servicios->name_image) }}" class="max-w-xs max-h-48 object-cover">              
                                                </div>
                                            </div>



                                            <div class="md:col-span-5">
                                                    <label for="address">Subir una foto</label>
                                                    <div class="relative mb-2 ">
                                                        <input name="imagen" class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                                    </div>
                                             </div>

                                             

                                            <div class="md:col-span-5 text-right mt-6">
                                                <div class="inline-flex items-end">
                                                <button type="submit"  class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar datos</button>
                                                </div>
                                            </div>
                                </div>           
                    </div>
            </div>
        </div>   
    </form>
    
</div>

</x-app-layout>
