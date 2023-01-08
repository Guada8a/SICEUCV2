<!DOCTYPE html>
<html lang="en">
<?php
function remove_url_query_args($url,$keys=array()) {
        $url_parts = parse_url($url);
        if(empty($url_parts['query'])) return $url;
                
        parse_str($url_parts['query'], $result_array);
        foreach ( $keys as $key ) { unset($result_array[$key]); }
        $url_parts['query'] = http_build_query($result_array);
        $url = (isset($url_parts["scheme"])?$url_parts["scheme"]."://":"").
                (isset($url_parts["user"])?$url_parts["user"].":":"").
                (isset($url_parts["pass"])?$url_parts["pass"]."@":"").
                (isset($url_parts["host"])?$url_parts["host"]:"").
                (isset($url_parts["port"])?":".$url_parts["port"]:"").
                (isset($url_parts["path"])?$url_parts["path"]:"").
                (isset($url_parts["query"])?"?".$url_parts["query"]:"").
                (isset($url_parts["fragment"])?"#".$url_parts["fragment"]:"");
        return $url;
}

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$link = "http://" . $host . $url;
$keys = array("usuario","password");
?>
<script>
    function recargarLink(){
        history.pushState(null, "", '<?php echo remove_url_query_args($link,$keys); ?>');
        console.log('<?php echo $_POST['usuario']; ?>');

        document.getElementById("menuInicio").style.display = "none";
        document.getElementById("menuCierra").style.display = "block";
    }
</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="http://deveduc.ddns.net:88/img/logo/ucol_btn.png">
    <script	src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href='./css/homePage.css'>
    <link rel="stylesheet" href='./css/mainMenu.css'>
    <title>Men&uacute; Principal | SICEUC</title>
</head>
<script>
    $(document).ready(function(){
        $("#evaluaciones").click(function(){
            window.open('./src/evaluaciones.php', '_self');
            return false;
        });
    });
</script>
<body>
    <?php
        include 'src/header.php';
    ?>
    <div class="container">
        <?php
            include 'src/menu.php';
        ?>
        <div id="info" class="container-info">
            <?php
                include 'src/infoAlumno.php';
            ?>
            <!--Sección de formatos-->
            <section style="width:100%">
                <h3>Noticias</h3>
                <div class="container-row" style="flex-direction:column">
                    <div class="row" style="width:100%;margin-left:0.1rem">
                        <div class="card alert-info">
                            <ul class="list-group list-group-flush">
                                <p style="text-align:center"><a href="#">Consulta la oferta de Talleres Culturales dando click AQUI</a></p>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="width:100%;margin-left:0.1rem">
                        <div class="card alert-info">
                            <ul class="list-group list-group-flush">
                                <p style="text-align:center"><a href="#">Consulta la oferta deportiva como materia electiva o programa de acreditación 32 horas, según tu plan académico dando Click AQUI</a></p>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="width:100%;margin-left:0.1rem"><hr>
                        <p style="text-align:center"><a href="#">IMPRIME EL FORMATO DE REINSCRIPCIÓN</a></p><hr>
                        <p style="text-align:center">IMPRIME TU FORMATO DE INSCRIPCIÓN DE ACTIVIDADES DEPORTIVAS <a href="#">AQUÍ</a></p><hr>
                        <p style="text-align:center">CONSULTA EL DIRECTORIO DE GRUPOS DE LAS ACTIVIDADES DEPORTIVAS<a href="#">AQUÍ</a></p><hr>
                        <p style="text-align:center"><b>CONSULTA TUS CALIFICACIONES FINALES HACIENDO CLIC EN </b><a href="#">ANÁLISIS</a></p>
                    </div>
                </div>
            </section>
            <!-- Sección de acreditación deportiva -->
            <section>
                <h3>Situación Acreditación Deportiva</h3>
                <div class="container-row">
                    <table class="table">
                        <tr>
                            <td rowspan="3">
                                <p class="text-muted">Acreditación</p>
                                <span class="badge rounded-pill bg-light text-dark">
                                    <h6 style="margin-top:1.1rem"><i>Fisicoculturismo</i></h6>
                                </span>
                            </td>
                            <td>
                                <div class="row"><h6>1<sup>er</sup> Parcial</h6></div>
                            </td>
                            <td>
                                <div class="row"><h6>2<sup>da</sup> Parcial</h6></div>
                            </td>
                            <td>
                                <div class="row"><h6>3<sup>er</sup> Parcial</h6></div>
                            </td>
                            <td>
                                <div class="row"><h6>Total</h6></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="badge rounded-pill bg-success"><h4>10</h4></span>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-success"><h4>10</h4></span>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-success"><h4>12</h4></span>
                            </td>
                            <td>
                                <span class="badge rounded-pill bg-success"><h4>32</h4></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Ordinario</h6><h5> 0</h5>
                            </td>
                            <td>
                                <h6>Extra</h6><h5> 0</h5>
                            </td>
                            <td>
                                <h6>Extra</h6><h5> 0</h5>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <h6>Culturales</h6><h5> 0</h5>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <img src="https://siceuc.ucol.mx/img/imagendeportes.jpg">
                </div>
            </section>
        </div>
    </div>
</body>
<footer>
    <?php
        include 'src/footer.php';
    ?>
</footer>
</html>