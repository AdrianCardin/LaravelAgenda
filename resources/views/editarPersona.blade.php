<x-app-layout>

    <div class="">
        <div class="">
            <div class="">

                <form method="POST" action="/persona/{{ $persona->id }}">

                    <div class="form-group">
                        <label for="nombre" class="col-md-2 control-label">Nombre</label>
                        <textarea name="nombre"
                                  class=" border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$persona->nombre }}</textarea>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="apellidos" class="col-md-2 control-label">Apellidos</label>
                        <textarea name="apellidos"
                                  class="  border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$persona->apellidos }}</textarea>
                        @if ($errors->has('apellidos'))
                            <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-md-2 control-label">Teléfono</label>
                        <textarea name="telefono"
                                  class="  border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$persona->telefono }}</textarea>
                        @if ($errors->has('telefono'))
                            <span class="text-danger">{{ $errors->first('telefono') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="col-md-2 control-label">Favorito</label> 
                        @if ($errors->has('estrella'))
                            <span class="text-danger">{{ $errors->first('estrella') }}</span>
                        @endif
                        
                        @if ($persona->estrella==0)
                        <input type="checkbox" name="estrella"
                                  class="  border border-gray-400 leading-normal resize-none  py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></input>
                        @else
                        <input type="checkbox" name="estrella" checked
                                  class="  border border-gray-400 leading-normal resize-none  py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></input>
                        @endif

                        
                    </div>

                    <div class="form-group">
                        <label for="categoria_id" class="col-md-2 control-label">Categoría</label>
                        <select name='categoria_id'
                                class="  border border-gray-400 leading-normal resize-none  h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                            @foreach (auth()->user()->categorias as $categoria)
                                @php $seleccion = ""; @endphp
                                @if ($categoria->id == $persona->categoria_id)
                                    @php $seleccion = $categoria->id == $persona->categoria_id ? "selected" : ""; @endphp
                                @endif

                                <option value='{{$categoria->id }}' {{$seleccion}}>{{$categoria->nombre}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('categoria_id'))
                            <span class="text-danger">{{ $errors->first('categoria_id') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit" name="actualizar"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ">Actualizar
                            contacto
                        </button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
