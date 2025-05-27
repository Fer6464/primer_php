
            <form action="{{route('example.update', $ejemplo->id)}}"method="post">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                    <input type="text" class="form-control" id="id" name="id" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$ejemplo->id}}"></input>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id ="inputGroup-sizing-default">Nombre</span>
                    <input class="form-control" id="nombre" name="nombre" aria-label="With textarea" value="{{$ejemplo->nombre}}">{{$ejemplo->nombre}}</input>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <textarea class="form-control" id="descripcion" name="descripcion" aria-label="With textarea" value="{{$ejemplo->descripcion}}">{{$ejemplo->descripcion}}</textarea>
                </div>    
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>