<!doctype html>
<html lang="en">
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
                                <a class="nav-link active" aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/diagnosis">Diagnostico</a>
                            </li>
                            <li class="nav-item">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
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


            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                          <form>
              
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div data-mdb-input-init class="form-outline">
                                  <input type="text" id="firstName" class="form-control form-control-lg" />
                                  <label class="form-label" for="firstName">First Name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div data-mdb-input-init class="form-outline">
                                  <input type="text" id="lastName" class="form-control form-control-lg" />
                                  <label class="form-label" for="lastName">Last Name</label>
                                </div>
              
                              </div>
                            </div>
              
                            <div class="row">
                              <div class="col-md-6 mb-4 d-flex align-items-center">
              
                                <div data-mdb-input-init class="form-outline datepicker w-100">
                                  <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                  <label for="birthdayDate" class="form-label">Birthday</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <h6 class="mb-2 pb-1">Gender: </h6>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                    value="option1" checked />
                                  <label class="form-check-label" for="femaleGender">Female</label>
                                </div>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                    value="option2" />
                                  <label class="form-check-label" for="maleGender">Male</label>
                                </div>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                    value="option3" />
                                  <label class="form-check-label" for="otherGender">Other</label>
                                </div>
              
                              </div>
                            </div>
              
                            <div class="row">
                              <div class="col-md-6 mb-4 pb-2">
              
                                <div data-mdb-input-init class="form-outline">
                                  <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                  <label class="form-label" for="emailAddress">Email</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4 pb-2">
              
                                <div data-mdb-input-init class="form-outline">
                                  <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                  <label class="form-label" for="phoneNumber">Phone Number</label>
                                </div>
              
                              </div>
                            </div>
              
                            <div class="row">
                              <div class="col-12">
              
                                <select class="select form-control-lg">
                                  <option value="1" disabled>Choose option</option>
                                  <option value="2">Subject 1</option>
                                  <option value="3">Subject 2</option>
                                  <option value="4">Subject 3</option>
                                </select>
                                <label class="form-label select-label">Choose option</label>
              
                              </div>
                            </div>
              
                            <div class="mt-4 pt-2">
                              <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                            </div>
              
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


















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
    </body>
</html>
