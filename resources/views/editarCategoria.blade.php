<x-app-layout>

    <div class="">
        <div class="">
            <div class="">

                <form method="POST" action="/categoria/{{ $categoria->id }}">

                    <div class="form-group">
                        <textarea name="nombre"
                                  class=" border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$categoria->nombre }}</textarea>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" name="actualizar"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar categoría
                        </button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
