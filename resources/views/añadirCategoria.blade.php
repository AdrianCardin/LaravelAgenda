<x-app-layout>
    

    <div class="">
        <div class="">
            <div class="">

                <form method="POST" action="/categoria">

                    <div class="">
                        <textarea name="nombre"
                                  class=""
                                  placeholder='Introduce categoria nueva'></textarea>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white  font-bold py-2 px-4 ">Añadir
                            categoría
                        </button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
