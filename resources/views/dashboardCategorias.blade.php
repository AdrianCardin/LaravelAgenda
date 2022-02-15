<x-app-layout>
    

    <div class="py-12">
        <div class="">
            <div class="">
                <div class="">
                    <div class=" text-2xl">Listado de categorías</div>

                    <div class=" mt-2">
                        <a href="/categoria" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir
                            nueva categoría</a>
                    </div>
                </div>
                <table class=" text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Categoría</th>
                        <th class="text-left p-3 px-5">Acciones</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->categorias as $categoria)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$categoria->nombre}}
                            </td>
                            <td class="p-3 px-5">

                                <a href="/categoria/{{$categoria->id}}" name="editar"
                                   class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Editar</a>
                                <form action="/categoria/{{$categoria->id}}" class="inline-block">
                                    <button type="submit" name="eliminar" formmethod="POST"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Eliminar
                                    </button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
