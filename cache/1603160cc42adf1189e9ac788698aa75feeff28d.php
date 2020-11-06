<html>
<head>
    <meta charset="utf-8" />
    <title>Inicio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                        <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="/registro" class="nav-link">Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <?php echo $__env->yieldContent('content'); ?>

    
</body>

</html><?php /**PATH C:\Users\Flavio da Silva\Desktop\projeto\MVC\Views/layouts/layout.blade.php ENDPATH**/ ?>