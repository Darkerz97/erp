<!doctype html>
<html lang="en">
    <head>
        <title>Registro de reparaciones</title>
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
           
        <link rel="stylesheet" href="{{ asset('assets/formulario.css') }}">
        <!-- se agrega jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <body>
        <header>
            <!-- place navbar here -->
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
                        <a class="nav-link active" aria-current="page" href="/storage">Inicio almacen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/components">Componentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/repairs_reg"></a>
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
            @if (session('success'))
                 <div class="alert alert-success">
                     {{ session('success') }}
                 </div>
            @endif

            <form action="{{ route('repairs_reg.save') }}" method="POST">
                @csrf


                <label for="devices">modelo:</label><br>
                <select name="devices" id="device_model" required>
                    <option value="">Selecciona modelo</option>
                    @foreach ($devicesc as $device)
                        <option value="{{ $device->id }}">{{ $device->model }}</option> 
                    @endforeach
                </select><br><br>



                    <div id="datos-equipo">
                        <p>Equipo: <span id="comercial_name"></span></p>
                        <p>Marca: <span id="brand"></span></p>
                        {{-- Agrega aquí los demás campos que deseas mostrar --}}
                    </div>

             

                <label for="serial_number">Número de Serie:</label><br>
                <input type="text" name="serial_number" id="serial_number" required><br><br>
        
                <label for="sales_worker">Vendedor:</label><br>
                <select name="sales_worker" id="sales_worker" required>
                    <option value="">Selecciona un vendedor</option>
                    @foreach ($salespe as $sales)
                        <option value="{{ $sales->id }}">{{ $sales->name }}</option> {{-- Asumiendo que 'nombre' es el campo que muestra el nombre del cliente --}}
                    @endforeach
                </select><br><br>

                <label for="cliente_id">Cliente:</label><br>
                <select name="cliente_id" id="cliente_id" required>
                    <option value="">Selecciona un cliente</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->company_name }}</option> {{-- Asumiendo que 'nombre' es el campo que muestra el nombre del cliente --}}
                    @endforeach
                </select><br><br>

        
                <label for="lab_worker">Técnico de Laboratorio:</label><br>
                <select name="lab_worker" id="lab_worker" required>
                    <option value="">Selecciona un Ingeniero</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option> {{-- Asumiendo que 'nombre' es el campo que muestra el nombre del cliente --}}
                    @endforeach
                </select><br><br>

        
                <label for="warehouse_address">Dirección de Almacén:</label><br>
                <input type="text" name="warehouse_address" id="warehouse_address" required><br><br>
        
                <label for="priority">Prioridad:</label><br>
                <select name="priority" id="priority" required>
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                </select><br><br>
        
                <label for="initial_diagnosis">Diagnóstico Inicial:</label><br>
                <textarea name="initial_diagnosis" id="initial_diagnosis" required></textarea><br><br>
        
                <button type="submit">Guardar Registro</button>
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


        <!-- script para mostrar datos del equipo -->
        <script>
            $(document).ready(function() {
                $('#device_model').change(function() {
                    //console.log('evento change ejecutando'); //depuracion
                    var deviceId = $(this).val();
        
                    if (deviceId) {
                        $.ajax({
                            url: '/obtener-datos-equipo/' + deviceId, // Ruta para obtener los datos del equipo
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                $('#brand').text(data.brand);
                                $('#comercial_name').text(data.comercial_name);
                                // Actualiza aquí los demás campos con los datos recibidos
                            },
                            error: function() {
                                alert('Error al obtener los datos del equipo.');
                            }
                        });
                    } else {
                        $('#marca').text('');
                        $('#descripcion').text('');
                        // Limpia aquí los demás campos
                    }
                });
            });
        </script>

    </body>
</html>
