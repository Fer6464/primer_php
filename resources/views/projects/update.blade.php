<tbody>
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <td scope="row">{{ $proyecto->id }}</td>
                            <td>{{ $proyecto->titulo }}</td>
                            <td>{{ $proyecto->descripcion }}</td>
                            <td>{{ $proyecto->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>        