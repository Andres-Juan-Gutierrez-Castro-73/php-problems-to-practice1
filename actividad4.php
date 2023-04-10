<!--ANDRES JUAN GUTIERREZ CASTRO-->
<!--SOLUCION ACTIVIDAD 4-->

<?php
//CREACION DEL ARRAY DE EQUIPOS
$listaEquipos = array('Medellín', 'Nacional', 'Envigado', 'Aguilas');

//ARRAY DE JUGADORES
$listaJugadores = array(3, 5, 2, 4);

//ARRAY DE PRECIOS
$listaPrecios = array(
    3000000,
    2100000,
    1650000,
    350000,
);

//ARRAY INVERSION
$listaInversiones = array(
    9000000,
    10500000,
    3300000,
    1400000,
);

/*SE CREA UNA FUNCIONA PARA HACER EL PROGRAMA DINAMICO Y SIMPRE TENER ACTUALIZADA LA SUMA SIN IMOPORTAR LA DIMENSION DEL ARRAY DE PRECIOS*/
function totalSuma($arrays){ //RECIBE UN ARRAY COMO PARA METRO
    $suma = 0; //VARIABLE LOCAL PARA GUARDAR LOS VALORES DE LA SUMA
    foreach ($arrays as $key => $array) { //CICLO PARA RECORRER EL ARREGLO MANTENIEDO LA SUMA
        $suma += $array;
    }
    return $suma; //RETORNO DEL VALOR
}
?>

<!doctype html>
<html lang="es">
<head>
  <title>Actividad 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--HOJA DE ESTILOS DEL BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!--INICIO DE LA BARRA DE NAVEGACION-->
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#" aria-current="page" style="color:orange; font-weight: bold">ALMACEN AJGC <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="actividad1.php">Actividad 1</a>
            <a class="nav-item nav-link" href="actividad2.php">Actividad 2</a>
            <a class="nav-item nav-link" href="actividad3.php">Actividad 3</a>
            <a class="nav-item nav-link active" href="actividad4.php">Actividad 4</a>
        </div>
    </nav>
    <!--FIN DE LA BARRA DE NAVEGACION-->


    <!--INICIO CONTENIDO-->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1>Firma Deportiva AJGC</h1>
                <!--INICIO TABLA DE INFORMACION EQUIPOS-->
                <br>
                <div class="table-responsive">
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th scope="col">Escudo</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Jugadores</th>
                                <th scope="col">Precio $</th>
                                <th scope="col">Invesion $</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            //INICIO DEL FOREACH PARA RECORRER TODOS LOS ARREGLOS
                            foreach ($listaEquipos as $key => $equipo) {
                            ?>
                            <tr class="">
                                <td> <img src="./img2/<?php echo $key; ?>.png" alt="" style="width: 50px;"> </td>
                                <td><br> <?php echo $equipo; ?> </td>
                                <td><br> <?php echo $listaJugadores[$key]; ?> </td>
                                <td><br> <?php echo $listaPrecios[$key]. '$'; ?> </td>
                                <td><br> <?php echo $listaInversiones[$key]. '$'; ?> </td>
                            </tr>
                            <?php
                            }  //INICIO DEL FOREACH PARA RECORRER TODOS LOS ARREGLOS
                            ?>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Suma Jugadores
                            </div>
                            <div class="card-body">
                                <?php
                                //INSTANCIA DE LA FUNCION SUMA
                                echo 'El total de jugadores en la tabla es el siguiente:'. '<br>'. totalSuma($listaJugadores);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Suma Precios
                            </div>
                            <div class="card-body">
                                <?php
                                //INSTANCIA DE LA FUNCION SUMA
                                echo 'La suma total de los precios en la tabla es la siguiente:'. '<br>'. totalSuma($listaPrecios). '$';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                            <div class="card-header">
                                Suma Inversion
                            </div>
                            <div class="card-body">
                                <?php
                                //INSTANCIA DE LA FUNCION SUMA
                                echo 'La suma total de la inversion de los equipos es la siguiente:'. '<br>'. totalSuma($listaInversiones). '$';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN TABLA DE INFORMACION EQUIPOS-->
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!--FIN CONTENIDO-->
    

    <!--INICIO DEL FOOTER-->
    <br><br><br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">&copy; created by Andres Juan Gutierrez Castro</div>
                <div class="col-4"></div>
            </div>
        </div>
        <br>
    </footer>
    <!--FIN DEL FOOTER-->

    <!--SCRIPTS DE JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>