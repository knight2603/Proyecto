<?php>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>

</head>
<body class="bg-gray-50">

<?php

    $peticionAjax=false;
    require_once "./controladores/vistasControlador.php";
    $IV = new vistasControlador();

    $vistas = $IV->obtener_vistas_controlador();

    if($vistas == "login" || $vistas == "404"){
        require_once "./vistas/contenidos/".$vistas."-view.php";

    }else{


?>

            <!-- Recent Activity -->
            <main class="p-8">

            <div class="flex min-h-screen">

            <!-- Main Content -->
            <div class="flex-1 ml-64">
            <?php include"./vistas/include/header.php"; ?>

            <?php 
            include"./vistas/include/navLateral.php"; 

            include $vistas;

        }
            ?>

                

                
            </main>
        </div>
    </div>
</body>
</html>