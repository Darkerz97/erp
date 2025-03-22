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

        <link rel="stylesheet" href="{{ asset("assets/estiloreg.css")}}">
    </head>

    <body>
        <section class="vh-100 bg-image"
        style="background-image: {{ asset('assets/imagenes/logo.png')}}">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Registrar Usuario</h2>
      
                    <form method="post" action="{{route('register')}}">
                     @csrf
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="name" id="name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1cg">Nombre</label>
                        @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cg">Correo</label>
                        @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cg">Confirme Contraseña</label>
                        @error('password_confirmation')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                      </div>  
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cg">Contraseña</label>
                        @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                      </div>        
                      
                      

      
                      <div class="d-flex justify-content-center">
                        <button  type="submit" data-mdb-button-init
                          data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Registrar</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Ya tiene un Usuario? <a href="{{route('login')}}"
                          class="fw-bold text-body"><u>Inicie sesion aqui</u></a></p>
      
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
    </body>
</html>
