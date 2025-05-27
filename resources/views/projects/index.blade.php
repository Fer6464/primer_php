<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
<body style="background-color:white;">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
   <div class="row">
        <div class="col-sm-2">
            <a href="example/create">
                <button style="background-color:#106cfc; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Insertar ejemplo</button> 
            </a>
        </div>
        <div class="col-10">
            
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    font-family: sans-serif;
                }

                th, td {
                    border: 1px solid #ccc;
                    padding: 12px;
                    text-align: left;
                }

               /* td{
                    color: white;
                } */

                th {
                    background-color: #f0f0f0;
                }

                tr:nth-child(even) {
                    background-color: #f9f9f9;
                }
            </style>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Creado en</th>
                        <th>Actualizar/Eliminar</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach($ejemplos as $proyecto)
                            <tr>
                                <td scope="row">{{ $proyecto->id }}</td>
                                <td>{{ $proyecto->nombre }}</td>
                                <td>{{ $proyecto->descripcion }}</td>
                                <td>{{ $proyecto->created_at }}</td>
                                <td><a href="{{ url('example/' . $proyecto->id . '/edit') }}">
                                        <button style="background-color:#106cfc; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Modificar</button> 
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
   </div>
    <div class="row">
    <div class="col">
      <figure>
      <br>
      <blockquote class="blockquote">
        <p>Mi primer proyecto de php.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">Copyright de Fer.</cite><br>
      </figcaption>
    </figure>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>