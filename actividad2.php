<!--ANDRES JUAN GUTIERREZ CASTRO-->
<!--SOLUCION ACTIVIDAD 2-->

<?php
//DEFINICION DE LOS PRECIOS POR PROYECTOS
$listaPreciosProyectos = array(
    "A" => 20000,
    "B" => 10000,
    "C" => 5000,
);

//CREACION DE FUNCION QUE RETORNE EL VALOR DIA
function valorSalario($valor, $arrays){
    $operacionDia = 0; //VARIABLE LOCAL PARA CONTENER EL VALOR DIARIO
    $operacionMes = 0; //VARIABLE LOCAL PARA CONTENER EL VALOR MENSUAL
    switch ($valor) { //CLAUSULA PARA EVALUAR LOS CASOS DIFERENTES, EN ESTE CASO LOS PROYECTOS
        case 'A':
            $operacionDia = $arrays['A'] * 8; //VALOR CONSTANTE DEL DIA
            $operacionMes = $operacionDia * 30; //VALOR CONSTANTE DEL MES

            //MENSAJES
            echo "El valor de la hora diaria del proyecto ". $valor. " es igual a: ". "<br>". $operacionDia. "$";
            echo "<br>". "<br>";
            echo "El valor mensual del proyecto ". $valor. " es igual a: ". "<br>". $operacionMes. "$";
            echo "<br>". "<br>";
        break;

        case 'B':
            $operacionDia = $arrays['B'] * 8; //VALOR CONSTANTE DEL DIA
            $operacionMes = $operacionDia * 30; //VALOR CONSTANTE DEL MES

            //MENSAJES
            echo "El valor de la hora diaria del proyecto ". $valor. " es igual a: ". "<br>". $operacionDia. "$";
            echo "<br>". "<br>";
            echo "El valor mensual del proyecto ". $valor. " es igual a: ". "<br>". $operacionMes. "$";
            echo "<br>". "<br>";
        break;

        case 'C':
            $operacionDia = $arrays['C'] * 8; //VALOR CONSTANTE DEL DIA
            $operacionMes = $operacionDia * 30; //VALOR CONSTANTE DEL MES

            //MENSAJES
            echo "El valor de la hora diaria del proyecto ". $valor. " es igual a: ". "<br>". $operacionDia. "$";
            echo "<br>". "<br>";
            echo "El valor mensual del proyecto ". $valor. " es igual a: ". "<br>". $operacionMes. "$";
            echo "<br>". "<br>";
        break;
        
        default:
            echo "Ha ocurrido un error con los datos";
        break;
    }

    //CLAUSULAS PARA LOS VALORES QUE RETORNA EL SWITCH
    if ($operacionMes > 1500000) {
        echo "El salario es mayor al tope máximo";
    } elseif ($operacionMes < 1500000) {
        //MENSAJE DE PARA EL VALOR MENOR A 1500000$
        echo "Como el salario es menor a 1500000$ se procede a dar un aumento en la hora diario de 6%". "<br>";
        
        //EN ESTE PUNTO SE NECESITA TRABAJAR CON LOS BALORES ORIGINALES QUE SON DE CERO
        $operacionDia = 0;
        $operacionMes = 0;

        //OPERACIONES PARA EL NUEVO VALOR DE 6% LA HORA
        $aumento = $arrays['C'] * 0.06; //CREACION DE UNA VARIABLE LOCAL PARA LA OPERACION DEL PORCENTAJE
        $operacionDia = ($arrays['C'] + $aumento) * 8;
        $operacionMes = $operacionDia * 30;

        //REUTILIZACION DE LOS MENSAJES DEL SWITCH CON LOS VALORES CAMBIADOS
        echo "<br>". "<br>";
        echo "Nuevos valores:". "<br>";
        echo "El valor de la hora diaria del proyecto ". $valor. " es igual a: ". "<br>". $operacionDia. "$";
        echo "<br>". "<br>";
        echo "El valor mensual del proyecto ". $valor. " es igual a: ". "<br>". $operacionMes. "$";
        echo "<br>". "<br>";
    }
} 
?>

<!doctype html>
<html lang="es">
<head>
  <title>Actividad 2</title>
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
            <a class="nav-item nav-link active" href="actividad2.php">Actividad 2</a>
            <a class="nav-item nav-link" href="actividad3.php">Actividad 3</a>
            <a class="nav-item nav-link" href="actividad4.php">Actividad 4</a>
        </div>
    </nav>
    <!--FIN DE LA BARRA DE NAVEGACION-->


    <!--INICIO CONTENIDO-->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!--INICIO VALOR DE LA HORA A DIA Y SUELDO MENSUAL POR PROYECTOS-->
                <h1>Valor diario y mensual</h1>
                <h3>Segun el tipo de proyecto:</h3>
                <br>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Proyecto A
                            </div>
                            <div class="card-body">
                                <?php
                                valorSalario('A', $listaPreciosProyectos);
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--================================================================-->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Proyecto B
                            </div>
                            <div class="card-body">
                                <?php
                                valorSalario('B', $listaPreciosProyectos);
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--================================================================-->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Otro
                            </div>
                            <div class="card-body">
                                <?php
                                valorSalario('C', $listaPreciosProyectos);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--INICIO VALOR DE LA HORA A DIA Y SUELDO MENSUAL POR PROYECTOS-->
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!--FIN CONTENIDO-->


    <!--INICIO DEL FOOTER-->
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