<!DOCTYPE html>
<html>
<head>
    <title>Registrar Componente</title>
    
    @csrf
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
                        <a class="nav-link" href="/storage">Inicio almacen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/components">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/components_view">registrar equipo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/storage">Inicio almacen</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">Disabled</a>
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


    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
/>

</head>
<body>
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="/components" method="POST">
        @csrf
        <label for="description">description:</label><br>
        <input type="text" name="description" required><br><br>

        <label for="package">Empaquetado:</label><br>
        <textarea name="package" required></textarea><br><br>

        <label for="part_number">Numero de parte:</label><br>
        <textarea name="part_number" required></textarea><br><br>

        <label for="quantity">Cantidad:</label><br>
        <textarea name="quantity" required></textarea><br><br>

        <label for="specs">Especificaciones:</label><br>
        <textarea name="specs" required></textarea><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>