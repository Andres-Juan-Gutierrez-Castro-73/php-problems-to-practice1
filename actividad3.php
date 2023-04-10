<!--ANDRES JUAN GUTIERREZ CASTRO-->
<!--SOLUCION ACTIVIDAD 3-->

<?php
//LISTA DE LOS TIPOS DE TARIFA
$listaTarifa = array(strtoupper('individual'), strtoupper('doble'), strtoupper('familiar'));

//LISTA DE LOS PRECIOS DE LAS TARIFAS
$listaPrecioTarifa = array(
    "INDIVIDUAL" => 2500,
    "DOBLE" => 4600,
    "FAMILIAR" => 5200,
);

//LISTA DE LOS DESCUENTOS DE CADA TARIFA
$listaDescuento = array(
    "INDIVIDUAL" => 5,
    "DOBLE" => 9,
    "FAMILIAR" => 15,
);

// VARIABLES QUE RECIBEN LOS VALORES DEL FORMULARIO
//DEBEMOS USAR UN IF PARA QUE ACCEDA A LAS VARIABLES SIEMPRE QUE HAYA UN POST PARA NO MOSTRAR ERROR
if ($_POST) {
    $cantidadHuespedes = $_POST["txtHuespedes"];
    $diasEstadia = $_POST["txtDias"];
}

//CREAR LA FUNCION QUE HAGA LAS OPERACIONES Y GENERE UNA FACTURA
function factura($personas, $dias, $arrayPrecios, $arrayDescuento){
    $operacionIva = 0;
    $operacionDias = 0;
    $resultadoDescuento = 0;
    if ($personas == 1) {
        if ($dias > 0) {
            //TARIFA INDIVIDUAL

            //OPERACION PARA OBTENER EL PRECIO CON EL IVA INCLUIDO
            $operacionIva = $arrayPrecios['INDIVIDUAL'] + ($arrayPrecios['INDIVIDUAL'] * 0.19);
            echo "El valor de la tarifa individual por el iva es igual a: ". $operacionIva. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL VALOR DEL COSTO DE LOS DIAS
            $operacionDias = $operacionIva * $dias;
            echo "El varlor con ". $dias. " dias es: ". $operacionDias. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL RESULTADO FINAL CON EL DESCUENTO
            $resultadoDescuento = $operacionDias - (($operacionDias * $arrayDescuento['INDIVIDUAL']) / 100);
            echo "El valor a pagar con el ". $arrayDescuento['INDIVIDUAL']. "%  de descuento es : ". $resultadoDescuento. "$". "<br>";
            echo "<br>"."<br>";
            echo "<center>-----GRACIAS-----</center>";
            echo "<br>"."<br>";
        }else{
            echo "Error al generar la factura". "<br>". "Por favor ingresar los datos correctamente";
        }

    } elseif ($personas == 2) {
        if ($dias > 0) {
            //TARIFA DOBLE

            //OPERACION PARA OBTENER EL PRECIO CON EL IVA INCLUIDO
            $operacionIva = $arrayPrecios['DOBLE'] + ($arrayPrecios['DOBLE'] * 0.19);
            echo "El varlor de la tarifa doble por el iva es igual a: ". $operacionIva. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL VALOR DEL COSTO DE LOS DIAS
            $operacionDias = $operacionIva * $dias;
            echo "El varlor con ". $dias. " dias es: ". $operacionDias. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL RESULTADO FINAL CON EL DESCUENTO
            $resultadoDescuento = $operacionDias - (($operacionDias * $arrayDescuento['DOBLE']) / 100);
            echo "El valor a pagar con el ". $arrayDescuento['DOBLE']. "%  de descuento es : ". $resultadoDescuento. "$". "<br>";
            echo "<br>"."<br>";
            echo "<center>-----GRACIAS-----</center>";
            echo "<br>"."<br>";
        }else{
            echo "Error al generar la factura". "<br>". "Por favor ingresar los datos correctamente";
        }
    } elseif ($personas >= 3) {
        if ($dias > 0) {
            //TARIFA FAMILIAR

            //OPERACION PARA OBTENER EL PRECIO CON EL IVA INCLUIDO
            $operacionIva = $arrayPrecios['FAMILIAR'] + ($arrayPrecios['FAMILIAR'] * 0.19);
            echo "El varlor de la tarifa familiar por el iva es igual a: ". $operacionIva. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL VALOR DEL COSTO DE LOS DIAS
            $operacionDias = $operacionIva * $dias;
            echo "El varlor con ". $dias. " dias es: ". $operacionDias. "$". "<br>";
            echo "-------------------------------------------------------------------------------------";
            echo "<br>"."<br>";

            //OPERACION PARA OBTENER EL RESULTADO FINAL CON EL DESCUENTO
            $resultadoDescuento = $operacionDias - (($operacionDias * $arrayDescuento['FAMILIAR']) / 100);
            echo "El valor a pagar con el ". $arrayDescuento['FAMILIAR']. "%  de descuento es : ". $resultadoDescuento. "$". "<br>";
            echo "<br>"."<br>";
            echo "<center>-----GRACIAS-----</center>";
            echo "<br>"."<br>";
        }else{
            echo "Error al generar la factura". "<br>". "Por favor ingresar los datos correctamente";
        }
    } else {
        echo "Error al generar la factura". "<br>". "Por favor ingresar los datos correctamente";
    }
}
?>

<!doctype html>
<html lang="es">
<head>
  <title>Actividad 3</title>
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
            <a class="nav-item nav-link active" href="actividad3.php">Actividad 3</a>
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
                <h1>Hotel AJGC</h1>
                <br>
                <!--INICIO DE LA TABLA CON LAS TARIFAS-->
                <h4>Las tarifas del hotel son las siguientes: </h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th scope="col">Tarifa</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descuento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //INICIO DEL CICLO FOREACH
                            foreach ($listaTarifa as $key => $tarifa) {
                            ?>
                            <tr class="">
                                <td> <?php echo $tarifa; ?> </td>
                                <td> <?php echo $listaPrecioTarifa[$tarifa]. '$'; ?> </td>
                                <td> <?php echo $listaDescuento[$tarifa]. '%'; ?> </td>
                            </tr>
                            <?php
                            }  //FIN DEL CICLO FOREACH
                            ?>
                        </tbody>
                    </table>
                </div>
                <!--FIN DE LA TABLA CON LAS TARIFAS-->

                <!--INICIO FORMULARIO HUESPEDES-->
                <br><br>
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                Formulario de Registro
                            </div>
                            <div class="card-body">
                                <br>
                                <form action="actividad3.php" method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Cantidad Huespedes</span>
                                    <input type="number" class="form-control" placeholder="# de personas" aria-label="Username" aria-describedby="basic-addon1" name="txtHuespedes">
                                </div>
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"># Dias de la Estadia</span>
                                    <input type="number" class="form-control" placeholder="# de dias" aria-label="Username" aria-describedby="basic-addon1" name="txtDias">
                                </div>
                                <br>
                                <center><input type="submit" value="Reservar" class="btn btn-success"></center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                Factura
                            </div>
                            <div class="card-body">
                                <?php
                                //CON EL IF NOS ASEGURAMOS QUE LA FACTURA SIMPRE SE GENERE CUANDO ESTEN TODOS LOS DATOS
                                if (isset($cantidadHuespedes) && isset($diasEstadia)) {
                                    //IMPLEMENTACION DE LA FUNCION FACTURA
                                    factura($cantidadHuespedes, $diasEstadia, $listaPrecioTarifa, $listaDescuento);
                                } else{ //EN CASO DE QUE NO ESTEN LOS DATOS 
                                    echo "Por favor llene el registro para generar la factura";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN FORMULARIO HUESPEDES-->
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