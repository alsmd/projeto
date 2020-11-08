<html>
<head>
    <meta charset="utf-8" />
    <title>Inicio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   
    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/login.css">

</head>

<body>
    <!-- Cabeçalho -->
    <header class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-dark " id="navbar">
            <div class="container">

                <!-- LOGO -->
                <a href="/" class="navbar-brand" id="logo"><span class="fas fa-spider text-light"></span></a>

                <!-- Button -->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu-collapse"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="menu-collapse">
                    <!-- Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="/registro" class="nav-link">Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')

    
</body>

</html>