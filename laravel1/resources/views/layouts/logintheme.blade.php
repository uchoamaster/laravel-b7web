
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>@yield('title') Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <!-- Fonts -->
       <link rel="dns-prefetch" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

       <link rel="stylesheet" href="css/style.css">

       <link rel="icon" href="Favicon.png">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}
.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}
.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}
.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}
.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}
.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}
.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Sistema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="config">Configurações</a>
                </li>
            </ul>

        </div> --}}
    </div>
</nav>

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        @yield('content')
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
<footer >
@yield('footer')
</footer>

</html>
<script type="text/javascript">

</script>
</body>
</html>
