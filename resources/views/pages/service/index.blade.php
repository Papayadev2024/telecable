<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <section class="py-4 border-b border-slate-100 dark:border-slate-700">
            <a href="{{ route('servicios.create') }}" class="bg-blue-600 text-white rounded px-4 py-2" >Crear Servicios</a>
        </section>


        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            
            
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100">SERVICIOS</h2>
            </header>
            <div class="p-3">
        
                <!-- Table -->
                <div class="overflow-x-auto">
                    
                    <table id="tabladatos" class="display text-lg" style="width:100%">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Foto</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($servicios as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td class="px-3 py-2"><img src="{{$item->url_image}}" alt=""></td>
                                    <td>
                                        <a href="" class="bg-red-600 p-2 rounded text-white"><i class="fa-regular fa-trash-can"></i></a>
                                        <!--a href="" class="bg-yellow-400 p-2 rounded text-white mr-6"><i class="fa-regular fa-pen-to-square"></i></a-->
                                    </td>
                                </tr>    
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Titulo</th>
                                <th>Foto</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
        
                </div>
            </div>
        </div>   

    </div>

    <script>
        $('document').ready(function(){
            new DataTable('#tabladatos');
        })
    </script>

</x-app-layout>
