<!doctype html>
<html lang="en">
  @livewireStyles
    <head>
        <title>Reporte</title>
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
        <link rel="stylesheet" href="{{ asset('assets/diagnosis.css') }}">
    </head>

    <body>
      <section class="vh-100 gradient-custom">
  <header>
            
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
                        <a class="nav-link" href="/diagnosis">Diagnostico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/components_view">registrar componente</a>
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


    
      
             

                
    
  </header>
        <main>

          <form action="" method="POST">
            @csrf
    
            
    
            <label for="fecha_diagnostico">Fecha de Diagnóstico:</label><br>
            <input type="date" name="fecha_diagnostico" id="fecha_diagnostico" required><br><br>
    
            <label for="diagnostico">Diagnóstico:</label><br>
            <textarea name="diagnostico" id="diagnostico" required></textarea><br><br>
    
            <label for="pruebas_realizadas">Pruebas Realizadas:</label><br>
            <textarea name="pruebas_realizadas" id="pruebas_realizadas"></textarea><br><br>
    
            <label for="resultados_pruebas">Resultados de Pruebas:</label><br>
            <textarea name="resultados_pruebas" id="resultados_pruebas"></textarea><br><br>
    
            <label for="observaciones">Observaciones:</label><br>
            <textarea name="observaciones" id="observaciones"></textarea><br><br>
    
            <button type="submit">Guardar Diagnóstico</button>
        </form>



        </main>
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
        @livewireStyles
    </body>
</html>
