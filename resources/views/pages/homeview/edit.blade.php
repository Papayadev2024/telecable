<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <form action="{{ route('homeview.update', $homeview->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div
                class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Textos -
                        Home</h2>
                </header>
                @if (session('success'))
                    <script>
                        window.onload = function() {
                            mostrarAlerta();
                        }
                    </script>
                @endif
                <div class="p-3">

                    <div>

                        <div class="flex items-center justify-center">

                            <div class="rounded shadow-lg p-4 px-4 w-full">

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 ">
                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Portada</h2>
                                    <div class="md:col-span-5">
                                        <label for="title1section">Titulo</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title1section" name="title1section"
                                                value="{{ $homeview->title1section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    
                                    <div class="md:col-span-5">
                                        <label for="description1section">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description1section" name="description1section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description1section }}</textarea>
                                        </div>
                                    </div>


                                    <div class="md:col-span-5">
                                        <label for="url_image1section">Imagen principal</label>
                                        <div class="relative mb-2  mt-2">
                                            <input id="url_image1section" name="url_image1section"
                                                class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                        </div>
                                    </div>


                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Planes</h2>

                                    {{-- <div class="md:col-span-5">
                                        <label for="title2section">Titulo</label>
                                        <div class="relative mb-2 ">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title2section" name="title2section"
                                                value="{{ $homeview->title2section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    
                                    <div class="md:col-span-5">
                                        <label for="description2section">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description2section" name="description2section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description2section }}</textarea>
                                        </div>
                                    </div> --}}

                                    <div class="md:col-span-5">
                                        <label for="description2section2">Descripción footer</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description2section2" name="description2section2"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description2section2 }}</textarea>
                                        </div>
                                    </div>

                                    
                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Sección Nosotros</h2>
                                    

                                    <div class="md:col-span-5">
                                        <label for="title3section">Subtitulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title3section" name="title3section"
                                                value="{{ $homeview->title3section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description3section">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description3section"
                                                name="description3section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description3section }}</textarea>
                                        </div>
                                    </div>

                                    {{-- <div class="md:col-span-5">
                                        <label for="description3section2">Descripción texto verde</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description3section2"
                                                name="description3section2"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description3section2 }}</textarea>
                                        </div>
                                    </div> --}}

                                    <div class="md:col-span-5">
                                        <label for="description3section3">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description3section3"
                                                name="description3section3"
                                                class="ckeditor mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description3section3 }}</textarea>
                                        </div>
                                    </div>


                                    <div class="md:col-span-5">
                                        <label for="url_image3section">Imagen principal</label>
                                        <div class="relative mb-2  mt-2">
                                            <input id="url_image3section" name="url_image3section"
                                                class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                        </div>
                                    </div>



                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Sección Caracteristicas</h2>



                                    <div class="md:col-span-5">
                                        <label for="title4section">Subtitulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title4section" name="title4section"
                                                value="{{ $homeview->title4section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description4section">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description4section"
                                                name="description4section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description4section }}</textarea>
                                        </div>
                                    </div>

                                    {{-- <div class="md:col-span-5">
                                        <label for="description4section2">Descripción texto verde</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description4section2"
                                                name="description4section2"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description4section2 }}</textarea>
                                        </div>
                                    </div> --}}

                                    <div class="md:col-span-5">
                                        <label for="url_image4section">Imagen principal</label>
                                        <div class="relative mb-2  mt-2">
                                            <input id="url_image4section" name="url_image4section"
                                                class="p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                        </div>
                                    </div>


                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Caracteristica 1</h2>


                                    <div class="md:col-span-5">
                                        <label for="titlebenefit1">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="titlebenefit1" name="titlebenefit1"
                                                value="{{ $homeview->titlebenefit1 }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="descriptionbenefit1">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="descriptionbenefit1"
                                                name="descriptionbenefit1"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->descriptionbenefit1 }}</textarea>
                                        </div>
                                    </div>


                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Caracteristica 2</h2>


                                    <div class="md:col-span-5">
                                        <label for="titlebenefit2">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="titlebenefit2" name="titlebenefit2"
                                                value="{{ $homeview->titlebenefit2 }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="descriptionbenefit2">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="descriptionbenefit2"
                                                name="descriptionbenefit2"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->descriptionbenefit2}}</textarea>
                                        </div>
                                    </div>

                                    <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Caracteristica 3</h2>


                                    <div class="md:col-span-5">
                                        <label for="titlebenefit3">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="titlebenefit3" name="titlebenefit3"
                                                value="{{ $homeview->titlebenefit3 }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="descriptionbenefit3">Descripción</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="descriptionbenefit3"
                                                name="descriptionbenefit3"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->descriptionbenefit3 }}</textarea>
                                        </div>
                                    </div>


                                    {{-- <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-xl tracking-tight">Sección 5 - Contacto</h2> --}}


                                    {{-- <div class="md:col-span-5">
                                        <label for="footer5section">Titulo</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-2 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="footer5section"
                                                name="footer5section"
                                                value="{{ $homeview->footer5section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el footer">
                                        </div>
                                    </div> --}}


                                    {{-- <div class="md:col-span-5">
                                        <label for="title6section">Titulo de contacto</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title6section" name="title6section"
                                                value="{{ $homeview->title6section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="description6section">Descripción de contacto</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-3 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <textarea type="text" id="description6section"
                                                name="description6section"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">{{ $homeview->description6section }}</textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="title7section">Titulo de formulario</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="w-6 text-gray-500 fas fa-edit"></i>
                                            </div>
                                            <input type="text" id="title7section" name="title7section"
                                                value="{{ $homeview->title7section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese el titulo">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="md:col-span-5">
                                        <label for="description7section">Descripción: Sección contacto</label>
                                        <div class="relative mb-2">
                                            <div
                                                class="absolute top-2 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                    </path>
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <input type="text" id="description7section"
                                                name="description7section"
                                                value="{{ $homeview->description7section }}"
                                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Ingrese la descripcion">
                                        </div>
                                    </div> --}}



                                    <div class="md:col-span-5 text-right mt-6">
                                        <div class="inline-flex items-end">
                                            <button type="submit" id="form_general"
                                                onclick="confirmarActualizacion()"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Actualizar
                                                datos</button>
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

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        
        CKEDITOR.replace('description3section3', {
            toolbar: [
                { name: 'document', items: ['Source'] }, // Código fuente
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'] },
                { name: 'styles', items: ['Styles', 'Format', 'FontSize'] }, // Tamaño y fuente
                { name: 'colors', items: ['TextColor', 'BGColor'] }, // Color de texto y fondo
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] },
                { name: 'insert', items: ['Table', 'HorizontalRule'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'tools', items: ['Maximize'] } // Maximizar
            ],
            extraPlugins: 'colorbutton,font', // Activa plugins para color y fuentes
            removePlugins: 'elementspath', // Elimina la ruta de elementos
            resize_enabled: true // Permite redimensionar el editor
        });

        $('document').ready(function() {

            // Función para mostrar la alerta de confirmación antes de enviar el formulario
            function confirmarActualizacion() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción actualizará los datos.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, actualizar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Envía el formulario si se confirma la acción
                        document.getElementById('form_general').submit();
                    }
                });
            }


            function mostrarAlerta() {
                Swal.fire({
                    title: '¡Actualizado!',
                    text: 'Los datos se han actualizado correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                });
            }


        });
    </script>


</x-app-layout>
