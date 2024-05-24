<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div
            class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl">Pedido #{{ $orders->codigo_orden }}
                </h2>
            </header>
            <div class="p-6">

                <div class="flex flex-col gap-2 ">
                    <div class="flex gap-2 p-3 ">

                        <div class="basis-0 md:basis-3/5">
                            <div class="rounded shadow-lg p-4">

                                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-md ml-1">Nombre completo:</h2>
                                <p class="ml-1 text-slate-800 dark:text-slate-100 text-sm">{{ $orders->usuarioPedido->name }} {{ $orders->usuarioPedido->lastname }}</p>

                                
                                <div class="flex flex-col py-4">
                                    <div class="-m-1.5 overflow-x-auto">
                                      <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="border rounded-lg overflow-hidden">
                                          <table class="min-w-full divide-y divide-gray-200">
                                            <thead>
                                              <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Producto</th>
                                                <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Precio</th>
                                                <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Cantidad</th>
                                                <th scope="col" class="px-6 py-3 text-end text-base font-medium text-gray-500 ">Total</th>
                                              </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                            @foreach ($orders->DetalleOrden as $item)
                                              <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                  <div class="flex flex-row items-start gap-4 mt-2">
                                                    <img class="w-10" src="{{asset($item->imagenProducto->name_imagen)}}"/> 
                                                    <h2 class="">{{$item->producto->producto}}</h2>
                                                  </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$item->precio}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$item->cantidad}}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">{{$item->precio * $item->cantidad}}</td>
                                              </tr>
                                            @endforeach

                                            </tbody>
                                            <tfoot>
                                              <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Producto</th>
                                              <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Precio</th>
                                              <th scope="col" class="px-6 py-3 text-start text-base font-medium text-gray-500 ">Cantidad</th>
                                              <th scope="col" class="px-6 py-3 text-end text-base font-medium text-gray-500 ">Total</th>
                                            </tfoot>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                            </div>
                        </div>

                        <div class="basis-0 md:basis-2/5">
                            <div class="rounded shadow-lg p-4">

                              <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-md ml-1">Direccion de envio:</h2>
                              <p class="ml-1 text-slate-800 dark:text-slate-100 text-sm">{{$direccion->dir_av_calle}}</p>
                              <p class="ml-1 text-slate-800 dark:text-slate-100 text-sm">{{$direccion->dir_av_calle}}</p>
                            </div>
                        </div>

                    </div>
                </div>











                <div class="inline-flex items-end">
                    <a href="{{ URL::previous() }}"
                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Volver</a>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
<script>
    new DataTable('#tabladatos', {
            responsive: true
        });
</script>