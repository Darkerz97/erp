<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="nav-bar">
                <div class="nav-brand">
                    <a href="home">Inicio</a>
                </div>
                <ul class="nav-links">
                    <li><a href="/storage">Almacen</a></li>
                    <li><a href="/components_view">Registrar componente</a></li>
                    <li><a href="#"></a></li>
                </ul>
                <div class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>



        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        

        <h1>Lista de Componentes</h1>

        <link rel="stylesheet" href="{{ asset('assets/components_css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/formulario.css') }}">
       

    <form action="{{ route('components.index') }}" method="GET">
        <input type="text" name="buscar" value="{{ $buscar }}" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
        
    <table border="1">
        <thead>
            <tr>
                <th>
                    <a  href="{{ route('components.index', ['ordenarpor' => 'id', 'orden' => $ordenarpor == 'id' && $orden == 'asc' ? 'desc' : 'asc']) }}">
                        id
                    </a>
                    
                </th>
                <th>
                    <a  href="{{ route('components.index', ['ordenarpor' => 'description', 'orden' => $ordenarpor == 'description' && $orden == 'asc' ? 'desc' : 'asc']) }}">
                        description
                    </a>
                </th>
                <th>
                    <a  href="{{ route('components.index', ['ordenarpor' => 'package', 'orden' => $ordenarpor == 'package' && $orden == 'asc' ? 'desc' : 'asc']) }}">
                        package
                    </a>
                </th>
                <th>part_number</th>
                <th>quantity</th>
                <th>specs</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($components as $component)
                <tr>
                    <td>{{ $component->id }}</td>
                    <td>{{ $component->description }}</td>
                    <td>{{ $component->package }}</td>
                    <td>{{ $component->part_number }}</td>
                    <td>{{ $component->quantity }}</td>
                    <td>{{ $component->created_at }}</td>
                    <td>{{ $component->updated_at }}</td>
                    <td>{{ $component->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>






    </body>
</html>
