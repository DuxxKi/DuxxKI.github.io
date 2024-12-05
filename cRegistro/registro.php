<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Secion</title>
    <link rel="stylesheet" href="../Styles/singUp.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../multimedia/iconh.png" type="image/x-icon">
    <link rel="stylesheet" href="../Styles/style.css">
</head>
<body>
    <header class="header">
        <div class="logoDiv">
            <img src="../multimedia/iconh.png" alt="Logo de la página" >
            <div class="titleHeader">
                <h1>Segunda Oportunidad</h1>
            </div>
        </div>
        <div class="navegacion">
            <button onclick="window.location.href='https://duxxki.github.io/index.html'">Inicio</button>
            <button onclick="window.location.href='https://duxxki.github.io/cDarAdopcion/Adopcion.html'">Adopcion</button>
            <button onclick="window.location.href='https://duxxki.github.io/cConVeterinaria/registro2-1.html'">Consulta</button>
            <button onclick="window.location.href='https://duxxki.github.io/cDenuncias/denuncia.html'">Quejas</button>
            <button onclick="window.location.href='https://duxxki.github.io/cInformacion/info.html'">Informacion</button>
        </div>
        <div class="userDiv">
            <img src="../multimedia/user.png" alt="icon user">
            <div id="perfil"></div>
        </div>
    </header>

    <main class="main">
        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Secion</title>
    <link rel="stylesheet" href="../Styles/singUp.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../multimedia/iconh.png" type="image/x-icon">
    <link rel="stylesheet" href="../Styles/style.css">
</head>
<body>
    <header class="header">
        <div class="logoDiv">
            <img src="../multimedia/iconh.png" alt="Logo de la página" >
            <div class="titleHeader">
                <h1>Segunda Oportunidad</h1>
            </div>
        </div>
        <div class="navegacion">
            <button onclick="window.location.href='https://duxxki.github.io/index.html'">Inicio</button>
            <button onclick="window.location.href='https://duxxki.github.io/cDarAdopcion/Adopcion.html'">Adopcion</button>
            <button onclick="window.location.href='https://duxxki.github.io/cConVeterinaria/registro2-1.html'">Consulta</button>
            <button onclick="window.location.href='https://duxxki.github.io/cDenuncias/denuncia.html'">Quejas</button>
            <button onclick="window.location.href='https://duxxki.github.io/cInformacion/info.html'">Informacion</button>
        </div>
        <div class="userDiv">
            <img src="../multimedia/user.png" alt="icon user">
            <div id="perfil"></div>
        </div>
    </header>

    <main class="main">
        <div class="formContainer">
            <form action="" method="post" class="Formulario" id="registro">
                <div class="titleFrom">
                    <h1>Direccion</h1>
                </div>
                <div class="titleFrom" id="response"></div>
                <div class="divInputs">
                    <input type="text" placeholder="Calle" name="calletxt" required>
                </div>

                <div class="divInputs">
                    <input type="text" placeholder="Colonia" name="coloniatxt" required>
                </div>
                <div class="divInputs-nums">
                    <input type="text" placeholder="num Interior" name="numerotxt">
                    <input type="text" placeholder="num Exterior" name="numerotxt2">
                </div>

                <div class="divInputs">
                    <input type="text" placeholder="Codigo Postal" name="codPostlatxt">
                </div>
                <div class="divInputs">
                    <input type="text" placeholder="Municipio" name="municipiotxt">
                </div>
                <div class="divInputs">
                    <input type="text" placeholder="Estado" name="estadotxt">
                </div>

                <div class="buttoContainer">
                    <button onclick="makeIDDIReccion()" class="boton" type="button">Generar ID</button>
                    <input type="text" name="Direccion" id="Direccion" required >
                </div>
                <div class="titleFrom">
                    <h1>Datos personales</h1>
                </div>
                <div class="divInputs">
                    <input type="text" placeholder="Nombre" name="nombretxt" required>
                </div>
                <div class="divInputs">
                    <input type="text" placeholder="Ap. Paterno" name="apPatxt" required>
                </div>
                <div class="divInputs">
                    <input type="text" placeholder="Ap. Materno" name="apMatxt" required>
                </div>
                <div class="divInputs-nums">
                    <label for="">Fch. Nacimiento: </label>
                    <input type="date" name="fchNac" required placeholder="'Año-Mes-Dia'" id="fech">
                </div>
                <div class="buttoContainer">
                    <button onclick="makeIDPersona()" class="boton" type="button">Generar ID</button>
                    <input type="text" name="per" id="persona" required >
                </div>
                <div class="buttoContainer">
                    <button class="boton" type="submit">
                        Registrarte
                    </button>
                </div>
                <div class="infoContainer">
                    <samp class="info">
                        Ya tienes una cuneta. <a href="InicioSecion.html" class="enlasce">Inica Sesion</a>
                    </samp>
                </div>
            </form>
        </div>
    </main>
    
    <footer class="footer">
        <p>Este es el Footer</p>
    </footer>
    <script src="JavaScrip's/generar.js"></script>
    <script src="JavaScrip's/registro.js"></script>
    <script src="VrfLogin.js"></script>
</body>
</html>
<?php
                    $conexion = @mysqli_connect("localhost","root","");
                    if ($conexion) {
                        $base =  @mysqli_select_db($conexion, "segundaoportunidad");
                        if ($base) {
                            $idDireccion = $_POST['Direccion'];
                            $calle = $_POST['calletxt'];
                            $numero = $_POST['numerotxt'];
                            $numero = $_POST['numerotxt2'];
                            $colonia = $_POST['coloniatxt'];
                            $municipio = $_POST['municipiotxt'];
                            $estado = $_POST['estadotxt'];
                            $codigoPostal = $_POST['codPostlatxt'];
                            $SQL = "INSERT INTO direcciones VALUES ('$idDireccion','$calle','$colonia','$numExterior','$numInterior','$codigoPostal','$municipio', '$estado')";
                            $ejecuccion = @mysqli_query($conexion, $SQL);
                            if ($ejecuccion) {
                                echo "<blockquote class='informacion'>Se ha registrado tu direccion correctamente</blockquote>";
                                $idPersona = $_POST['idPersona'];
                                $nombre = $_POST['nombretxt'];
                                $apPaterno = $_POST['apPatxt'];
                                $apMaterno = $_POST['apMatxt'];
                                $fchNacimiento = $_POST['fchNac'];
                                $SQL = "INSERT INTO personas VALUES ('$idPersona','$nombre','$apPaterno','$apMaterno','$fchNacimiento')";
                                $ejecuccion = @mysqli_query($conexion, $SQL);
                                if ($ejecuccion) {
                                    echo "<blockquote class='informacion'>Felizidades te has registrado correctamente</blockquote>";
                                } else {
                                    echo "<blockquote class='informacion'>Falla en el registro de Persona</blockquote>";
                                }
                                
                            } else {
                                echo "<blockquote class='informacion'>Falla en el registro de Direccion</blockquote>";
                            }   
                        } else {
                            echo "<blockquote class='informacion'>Base de datos no encontrad</blockquote>";
                        }
                    } else {
                        echo "<blockquote class='informacion'>Falla en la conexion</blockquote>";
                    }
                    
                ?>
        </div>
    </main>
    
    <footer class="footer">
        <p>Este es el Footer</p>
    </footer>
    <script src="JavaScrip's/generar.js"></script>
    <script src="JavaScrip's/registro.js"></script>
    <script src="VrfLogin.js"></script>
</body>
</html>
