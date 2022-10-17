<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel='stylesheet' href="https://fonts.googleapis.com/css2?family=Roboto">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
        <style>
            *{
                font-family: roboto;
            }
            #logo{
                width: 55px;
            }
        </style>
    <head>
    <body>
        <div class='container-fluid'>
           <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img id='logo' src="/img/logo.jpg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Home</a>
                    @auth
                    <a class="nav-item nav-link" href="login">Logout</a>
                        
                    @endauth
                    <a class="nav-item nav-link" href="login">Login</a>
                    
                    <a class="nav-item nav-link" href="#">Preços</a>
                  </div>
                </div>
              </nav>
           </header>
            @yield('content')

            <footer >
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                </section>
                <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Tô Perdido
                        </h6>
                        <p>
                        
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                        Contate-nos
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Caratinga, MG</p>
                        <p>
                        <i class="fas fa-envelope me-3"></i>
                        toperdido.adm@lib.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> 33 99999-9999</p>
                        <p><i class="fas fa-print me-3"></i> 32 00000-0000</p>
                    </div>
                    </div>
                </div>
                </section>

                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © @php echo date('Y') @endphp Copyright:
                <a class="text-reset fw-bold" href="/">Teste</a>
                </div>  
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>