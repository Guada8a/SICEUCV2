<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="http://deveduc.ddns.net:88/img/logo/ucol_btn.png">
    <link rel="stylesheet" href='./css/homePage.css'>
    <title>SICEUC</title>
</head>
<body onload="menuInicio()">
    <?php
        include 'src/header.php';
    ?>
    <script>
        function menuInicio() {
            document.getElementById("menuInicio").style.display = "block";
            document.getElementById("menuCierra").style.display = "none";
        }
        function menuCierra() {
            document.getElementById("menuInicio").style.display = "none";
            document.getElementById("menuCierra").style.display = "block";
        }
    </script>
    <div class="container">
        <?php
            include 'src/menu.php';
        ?>
        <section>
            <h2 style="font-weight:900"><b>Iniciar Sesión</b></h2><p></p>
            <form action="/mainMenu.php" method="POST" align="center">
                <div class="group" align="center">
                    <input type="text" class="form_field" name="usuario" id="usuario" required maxlength="8"><span class="highlight"></span><span class="bar"></span>
                    <label>Número de Cuenta</label>
                </div>
                <div class="group" align="center">
                    <input type="password" class="form_field" name="password" id="password" required ><span class="highlight"></span><span class="bar"></span>
                    <label>Contraseña</label>
                    <script>
                        let password = document.getElementById('password');

                        password.addEventListener('keyup', function() {
                            if (password.value.length > 0) {
                                password.setAttribute('type', 'text');
                            } else {
                                password.setAttribute('type', 'password');
                            }
                        });
                        password.addEventListener('blur', function() {
                            password.setAttribute('type', 'password');
                        });
                        password.addEventListener('focus', function() {
                            password.setAttribute('type', 'text');
                        });


                    </script>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-ucol">Entrar</button>
                </div>
            </form>
            <p></p>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <p><b>Nota:</b> La contraseña para entrar es la misma que la de tu correo electrónico universitario; además diferencía entre mayúsculas y minúsculas.</p>
                </ul>
            </div>
            <a href="https://play.google.com/store/apps/details?id=mx.ucol.app.siceuc&amp;pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Disponible en Google Play" src="https://siceuc.ucol.mx/img/AppImage.jpeg"></a>
        </section>
        <aside id="avisos">
            <b>AVISOS</b>
            <p></p>
            <div class="card">
                <div class="card-header">
                    <b style="font-size:small">Información Actualizada</b>
                </div>
                <ul class="list-group list-group-flush">
                    <p>Actualizada la información para el Ciclo Escolar AGO-2022/ENE-2023</p>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <b style="font-size:small">Privacidad y Seguridad</b>
                </div>
                <ul class="list-group list-group-flush">
                    <p>Te recomendamos que al término de tu consulta hagas click en <i><b>'cerrar sesión'</b></i></p>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <b style="font-size:small">Correo electrónico universitario</b>
                </div>
                <ul class="list-group list-group-flush">
                    <p>Puedes tramitar una cuenta de correo universitario <a href="#">aquí</a></p>
                </ul>
            </div>
        </aside>
    </div>
    <footer>
        <?php
            include 'src/footer.php';
        ?>
    </footer>
</body>
</html>