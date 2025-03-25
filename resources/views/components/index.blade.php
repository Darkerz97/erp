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
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
        
                    <button
                        data-mdb-collapse-init
                        class="navbar-toggler"
                        type="button"
                        data-mdb-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
        
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/components_view">registrar componente</a>
                            </li>
                            <li class="nav-item">
                                <div class="d-flex align-items-center">
                                    <span>
                                        <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                            <button type="submit" class="btn btn-link px-3 me-2" style="background:none; border:none; padding:0; color:red;">Cerrar Sesión</button>
                                        </form>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
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
       

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>description</th>
                <th>package</th>
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
