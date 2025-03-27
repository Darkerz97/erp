<!doctype html>
<html lang="en">
  @livewireStyles
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link rel="stylesheet" href="{{ asset('assets/formdiag.css') }}">
    </head>

    <body>
      <section class="vh-100 gradient-custom">
  <header>

    @csrf
     <!-- place navbar here -->
     
         <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
             <a class="navbar-brand" href="/home">Inicio</a>
 
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
                         <a class="nav-link active" aria-current="page" href="/lab">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/diagnosis">Diagnostico</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/refurbishment">Refaccionamiento</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/test">Pruebas</a>
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
            <!-- mensaje de confirmacion al registro de una entrada nueva -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Formulario de diagnostico -->
            </title>

            @vite(['resources/js/diagnosis.js'])
    </head>
    <body>

        <div class="container">
            
        

      <form action="index.html" method="post">
        
        <h1>Diagnostico</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Reporte</legend>
          
          <label for="job">Falla reportada:</label>
          <select id="job" name="user_job">
            <optgroup label="Web">
              <option value="frontend_developer">Ambiental</option>
              <option value="php_developer">Uso Negligente</option>
              <option value="python_developer">Dimensionamiento Incorrecto</option>
              <option value="rails_developer">Accidental</option>
              <option value="web_designer">Desgaste Natual(uso)</option>
          </select>
          
          <label for="bio">Falla reportada:</label>
          <textarea id="bio" name="user_bio">lo que reporto el cliente es...</textarea>
       

          <label for="bio">Prediagnostico:</label>
          <textarea id="bio" name="user_bio"></textarea>
          
          <label for="bio">diagnostico:</label>
          <textarea id="bio" name="user_bio"></textarea>

          <label for="image">Imagen:</label>
          <input type="file" id="image" name="image">


        </fieldset>
        

        <button type="submit">finalizar diagnostico</button>
        
      </form>

      <button id="toggle-sidebar">pedido</button>

      </div>

      <div class="sidebar">
        <h2>Pedido de componentes</h2>
        <select id="pedido" name="user_job">
            <optgroup label="seleccionar">
              <option value="almacen">Almacen</option>
              <option value="solicitudprueb">levantar pedido para pruebas</option>
              <option value="solicitudcomp">levantar pedido</option>
          </select>

          <script>
            
          </script>

            <form id="formulario1" style="display: none;">
                <h2>Almacen</h2>

                <label for="searchPartNumber">Numero de parte:</label>
                <input id="searchPartNumber" name="part_number" type="text" placeholder="numero de parte">
                <button type="button" id="searchMouser">buscar en mouser</button>

                <div id="mouserResults"></div>

                <label for="">descripcion:</label>
                <input type="text" placeholder="descripcion">
                <label for="">cantidad:</label>
                <input type="text" placeholder="cantidad">
                <label for="">url:</label>
                <input type="text" placeholder="url">
                <label for="">especificaciones:</label>
                <input type="text" placeholder="especificaciones">
                <button type="submit">Enviar</button>
            </form>

            <form id="formulario2" style="display: none;">
                <h2>Pruebas</h2>
                <label for="">Numero de parte:</label>
                <input name="part_number" type="text" placeholder="numero de parte">
                <label for="">cantidad:</label>
                <button type="submit">Enviar</button>
            </form>

            <form id="formulario3" style="display: none;">
                <h2>Reparacion</h2>
                <label for="">Numero de parte:</label>
                <input name="part_number" type="text" placeholder="numero de parte">
                <label for="">descripcion:</label>
                <input type="text" placeholder="descripcion">
                <label for="">cantidad:</label>
                <input type="text" placeholder="cantidad">
                <label for="">url:</label>
                <input type="text" placeholder="url">
                <label for="">especificaciones:</label>
                <input type="text" placeholder="especificaciones">
                <button type="submit">Enviar</button>
            </form>

          


        
      </div>

      












        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        @livewireStyles
    </body>
</html>
