<?php

define('CONTROLLER_PATH', '../Controller/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coming Soon - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>

    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="../assets/mp4/bg2.mp4" type="video/mp4" />
    </video>

    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <form action="<?php echo CONTROLLER_PATH; ?>create_user.php" method="POST">
                    <div class="row input-group-newsletter">
                        <div>
                            <h1 class="fst-italic lh-1 mb-4">CREAR USUARIO</h1>
                            <div class="col"><input class="form-control" id="nombre" type="text" name="nombre" placeholder="Name.." /></div>                         
                            <p class="mb-5">Nombre</p>
                            <div class="col"><input class="form-control" id="apellido" type="text" name="apellido" placeholder="Last Name.." /></div>                         
                            <p class="mb-5">Apellido</p>
                            <div class="col"><input class="form-control" id="nikname" type="text" name="nikname" placeholder="Nikname.."/></div>
                            <p class="mb-5">Apodo</p>
                            <div class="col"><input class="form-control" id="email" type="email" name="email" placeholder="Email.."/></div>
                            <p class="mb-5">Email</p>
                            <div class="col"><input class="form-control" id="password" type="password" name="password" placeholder="Password.."/></div>
                            <p class="mb-5">Contraseña</p>
                            
                            <br>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit" input="nuevoUsuario">Next</button>                          
                    </div>
                </form>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>