            <form action = "{{route('example.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></input>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <textarea class="form-control" id="descripcion" name="descripcion" aria-label="With textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>