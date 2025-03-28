<!DOCTYPE html>
<html>
<head>
    <title>Registrar Componente</title>
    
    @csrf
   
    <nav class="nav-bar">
        <div class="nav-brand">
            <a href="home">Inicio</a>
        </div>
        <ul class="nav-links">
            <li><a href="/storage">Almacen</a></li>
            <li><a href="/components">Indice</a></li>
            <li><a href="#"></a></li>
        </ul>
        <div class="nav-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>


    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home.css') }}">

</head>
<body>
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="/components" method="POST">
        @csrf
        <label for="description">descripcion:</label><br>
        <input type="text" name="description" required><br><br>

        <label for="package">Empaquetado:</label><br>
        <textarea name="package" required></textarea><br><br>

        <label for="part_number">Numero de parte:</label><br>
        <textarea name="part_number" required></textarea><br><br>

        <label for="quantity">Cantidad:</label><br>
        <input type="number" name="quantity" id="quantity" min="0" required></textarea><br><br>

        <label for="specs">Especificaciones:</label><br>
        <textarea name="specs" required></textarea><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>