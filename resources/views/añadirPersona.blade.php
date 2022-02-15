<x-app-layout>
    

    <div class="">
        <div class="">
            <div class="">

                <form method="POST" action="/persona">

                    <div class="">
                        <label for="nombre" class="col-md-2 control-label">Nombre</label>
                        <textarea name="nombre"
                                  class="bg-gray-100  border border-gray-400 leading-normal resize-none h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                  placeholder='Introduce nombre del contacto'></textarea>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="">
                        <label for="apellidos" class="col-md-2 control-label">Apellidos</label>
                        <textarea name="apellidos"
                                  class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                  placeholder='Introduce apellidos del contacto'></textarea>
                        @if ($errors->has('apellidos'))
                            <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                        @endif
                    </div>

                    <div class="">
                        <label for="telefono" class="col-md-2 control-label">Teléfono</label>
                        <textarea name="telefono"
                                  class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                  placeholder='Introduce teléfono del contacto'></textarea>
                        @if ($errors->has('telefono'))
                            <span class="text-danger">{{ $errors->first('telefono') }}</span>
                        @endif
                    </div>

                    <div class="">
                        <label for="estrella" class="col-md-2 control-label">Favorito</label>
                        <textarea name="estrella"
                                  class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                  placeholder='Introduce "1" para marcar como favorito'></textarea>
                        @if ($errors->has('estrella'))
                            <span class="text-danger">{{ $errors->first('estrella') }}</span>
                        @endif
                    </div>

                    <div class="">
                        <label for="categoria_id" class="col-md-2 control-label">Categoría</label>
                        <select name='categoria_id'
                                class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                            <option value='' disabled selected>Selecciona una categoría</option>

                            @foreach(auth()->user()->categorias as $categoria)
                                <option value='{{$categoria->id }}'>{{$categoria->nombre}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('categoria_id'))
                            <span class="text-danger">{{ $errors->first('categoria_id') }}</span>
                        @endif
                    </div>

                    <div class="">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir contacto</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
