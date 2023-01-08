<section>
                <h3>Información del estudiante</h3>
                <div class="container-row">
                    <div class="row">
                        <div class="col photo" id="sectionPhoto">
                            <div class="row">
                                <img style="border-radius:50% !important;" src="https://siceuc.ucol.mx/fotos/onsepvlhrp2nghpoeqhjk0jhcgyjocwm1vpqjyhkvhe8odmxtphbak6kjhbkxdfex9nblwkkrjrp4cnjgwkchdv7tqfgqrfijbcbnygvgomj.jpg" alt="Logo UCOL">
                            </div>
                            <div class="row" align="center">
                                <h6><b>Número de Cuenta:</b><br> 
                                <?php 
                                    if(isset($_POST['usuario'])){
                                        echo $_POST['usuario'];
                                    }else{
                                        echo "20186947";
                                    }
                                ?>
                            </h6>
                            </div>
                        </div>
                        <div class="col" id="sectionInfo">
                            <table id="infoAlumno">
                                <tr>
                                    <td><b>Nombre:</b> José Guadalupe Ochoa Carrillo</td>
                                </tr>
                                <tr>
                                    <td><b>CURP:</b> OOCG030528HCMCRDA4</td>
                                </tr>
                                <tr>
                                    <td><b>Correo:</b> jochoa10@ucol.mx</td>
                                </tr>
                                <tr>
                                    <td><b>Edad:</b> 19</td>
                                </tr>
                                <tr>
                                    <td><b>Saldo en monedero electr&oacute;nico:</b> &dollar;0.00</td>
                                </tr>
                                <tr>
                                    <td><b>NSS:</b>10170380744</td>
                                    <td><b>UMF:</b>19</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card alert-info" align="center">
                        <ul class="list-group list-group-flush">
                            <p>Puedes consultar tu resultado del examen de diagnóstico de inglés <a href="#">aquí</a></p>
                        </ul>
                    </div>
                    <div class="card alert" align="center">
                        <ul class="list-group list-group-flush">
                            <p>Si requieres factura sobre tus pagos referenciados debes solicitarla al secretario administrativo de tu plantel dentro del mismo mes en que realizaste el pago</p>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <h3>Información escolar</h3>
                <div class="row">
                    <div class="col" align="center" id="escuela">
                        </div>
                        <div class="table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <td rowspan="4" width="40%">
                                    <img src="https://lh3.googleusercontent.com/p/AF1QipM6OfEMmfiTUzTs33w0-q_Z_lMg8pVqJW3Slf91=s680-w680-h510" jsaction="load:trigger.aMp9Zb" class="m7eMIc aQg20b pFuEAd" alt="Foto" >
                                </td>
                                <td>
                                    <h6><p class="text-muted">Semestre:</p> 3</h6>
                                </td>
                                <td>
                                    <h6><p class="text-muted">Grupo:</p> G</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><p class="text-muted">Plan:</p> K802</h6>
                                </td>
                                <td>
                                    <h6><p class="text-muted">Área:</p> <p class="text-muted">SIN DATOS</p></h6>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <td>
                                    <h6><p class="text-muted">Escuela: </p>Facultad de Telemática</h6>
                                </td>
                                <td>
                                    <h6><p class="text-muted">Carrera:</p> Ingenier&iacute;a de Software</h6>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <style>
                h6{
                    font-size:0.8rem;
                }
            </style>