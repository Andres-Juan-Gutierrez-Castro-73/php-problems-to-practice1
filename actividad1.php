<!--ANDRES JUAN GUTIERREZ CASTRO-->
<!--SOLUCION ACTIVIDAD 1-->

<?php
$aritulos = array('zapatos', 'tenis', 'camisas', 'jeans');
$precios = array(350000, 280000, 175000, 200000);
?>

<!doctype html>
<html lang="es">
<head>
  <title>Actividad 1</title>
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
            <a class="nav-item nav-link active" href="actividad1.php">Actividad 1</a>
            <a class="nav-item nav-link" href="actividad2.php">Actividad 2</a>
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
                <h1>Solucion Actividad 1.</h1>
                <br>
                <p>1. Muestra los artículos y precios actuales:</p>
                <br>
                <!--INICIO TABLA DE LOS PRECIOS-->
                <div class="table-responsive">
                    <table class="table table-default">
                        <thead>
                            <tr>
                                <th scope="col">Artículo</th>
                                <th scope="col">Precio $</th>
                                <th scope="col">Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        //INICIO DEL RECORRIDO DEL ARREGO
                        foreach($aritulos as $key => $articulo){ 
                        ?>
                        <tr class="">
                            <td><br> <?php echo $articulo; //MUESTRA LSO ELEMENTOS DE $aritulos?> </td>
                            <td><br> <?php echo $precios[$key]; //MUESTRA LSO ELEMENTOS DE $precio?> </td>
                            <td>
                                <img src="./img/<?php echo $key; //COINCIDE EL CONTADOR DEL CICLO CON EL NOMBRE LA IMAGEN?>.png" class="img-fluid rounded-top" style="width: 100px;">
                            </td>
                        </tr>
                        <?php 
                        } //FIN DEL RECORRIDO DEL ARREGO
                        ?>
                        </tbody>
                    </table>
                </div>
                <!--FIN TABLA DE LOS PRECIOS-->

                <!--=========================================================================================================-->

                <br><br>
                <p>2. Mostrar el costo total de los cuatro articulos:</p>
                <br>
                <?php
                /*SE CREA UNA FUNCIONA PARA HACER EL PROGRAMA DINAMICO Y SIMPRE TENER ACTUALIZADA LA SUMA SIN IMOPORTAR LA DIMENSION DEL ARRAY DE PRECIOS*/
                function totalSuma($arrays){ //RECIBE UN ARRAY COMO PARA METRO
                    $suma = 0; //VARIABLE LOCAL PARA GUARDAR LOS VALORES DE LA SUMA
                    foreach ($arrays as $key => $array) { //CICLO PARA RECORRER EL ARREGLO MANTENIEDO LA SUMA
                        $suma += $array;
                    }
                    return $suma; //RETORNO DEL VALOR
                }
                ?>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3>Suma Precios Artículos</h3> 
                            </div>
                            <div class="card-body">
                                <?php
                                foreach ($aritulos as $key => $articulo) {
                                    echo $articulo . ": " . $precios[$key] . "$" . "<br>";
                                }
                                ?>
                            </div>
                            <div class="card-footer text-muted">
                                <p><?php echo "El valor de la suma del total de articulos es: " . totalSuma($precios) . "$";   ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>

                <!--=========================================================================================================-->
                <br><br>
                <h2>Operaciones: </h2>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    3. Promedio de los articulos:
                                </div>
                                <div class="card-body">
                                    <?php
                                    /*CREACION DE UNA FUNCION PROMEDIO PARA CUALQUIER CANTIDAD DE ARTICULOS*/
                                    function promTotal($array){ //RECIBE UN ARREGLO COMO PARAMETRO
                                        $operacion = (totalSuma($array)) / count($array); //USA LA FUNCION DE TOTAL SUMA Y DIVIDE EL VALOR POR EL TOTAL DE ELEMENTOS DEL ARREGLO
                                        return $operacion;
                                    }

                                    echo "el promedio con el total de articulos es: ". promTotal($precios). "<br>";
                                    ?> 
                                </div>
                            </div> <br><br>
                        </div>
                    </div>
                </div>

                <!--=========================================================================================================-->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                4. Precio Jeans +(6.2%):
                            </div>
                            <div class="card-body">
                                <?php
                                function porcenAumento($valor, $porcentaje){ //RECIBE UN VALOR Y EL PORCENTAJE
                                    $resultado = 0; 
                                    $operacion = ($valor * $porcentaje) / 100;
                                    $resultado = $valor + $operacion;

                                    return $resultado;
                                }
                                echo "el nuevo valor de los jeans es igual a: ". porcenAumento($precios[3], 6.2). "$";
                                ?>
                            </div>
                        </div>
                    </div>

                    <!--=========================================================================================================-->

                    <div class="col-6">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    5. Precio Zapatos -(0.8%):
                                </div>
                                <div class="card-body">
                                    <?php
                                    function porcenDisminuir($valor, $porcentaje){
                                        $resultado = 0; 
                                        $operacion = ($valor * $porcentaje) / 100;
                                        $resultado = $valor - $operacion;

                                        return $resultado;
                                    }
                                    echo "el nuevo valor de los zapatos es igual a: ". porcenDisminuir($precios[0], 0.8). "$";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br><br><br>
    <!--FIN CONTENIDO-->
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
    <!--INICIO DEL FOOTER-->

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
