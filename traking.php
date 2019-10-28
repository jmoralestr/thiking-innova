<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking Bus</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html"><img src="img/logoTI.png" alt="Logo tipo TI"></a>
                <nav class="navegacion">
                    <a href="index.html">Inicio</a>
                    <a href="modulo.html">Modulo</a>
                    <a href="pruebas.html">Pruebas</a>
                </nav>
            </div>   
        </div>
    </header>
    <section class="contenedor seccion">
        <h1 class="fw-400 centrar">Demo Tracking Bus</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, 
        voluptates ipsam explicabo eveniet enim dolores impedit molestiae provident eum nemo delectus, 
        sit laboriosam quam quia voluptas, minus ut. Laboriosam, accusantium.</p>
            <div class="iconos-nosotrosB">
                <div class="iconoB"> 
                    <h2>Camion No. 4</h2>
                    <i class="material-icons">directions_bus</i>
                    <?php
                        $host = 'nams-inventario.cegslsrzjwsq.us-west-2.rds.amazonaws.com';
                        $user = 'EduPer';
                        $pass = '20051998Adi.';
                        $db = 'inventario';
                        $cone = mysqli_connect($host,$user,$pass);
                        if ($cone){
                            $bd = mysqli_select_db($cone, $db);
                            $query = "SELECT COUNT(noCamion) AS cuenta FROM pruebaExpo WHERE noCamion=4;";
                            $consulta = mysqli_query($cone,$query);
                            $result = mysqli_fetch_assoc($consulta);
                            echo "<h2>Pasajeros: ".$result['cuenta']."<br> Capacidad: 60 pasajeros</h2>";
                        // echo (string) $result['cuenta']; 

                        }else{
                        echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
                        }
                    ?>
    
                </div>
                
                <div class="iconoB">
                    <h2>Camion No. 5</h2>
                    <i class="material-icons">directions_bus</i>
                    <?php
                        $host = 'nams-inventario.cegslsrzjwsq.us-west-2.rds.amazonaws.com';
                        $user = 'EduPer';
                        $pass = '20051998Adi.';
                        $db = 'inventario';
                        $cone = mysqli_connect($host,$user,$pass);
                        if ($cone){
                            $bd = mysqli_select_db($cone, $db);
                            $query = "SELECT COUNT(noCamion) AS cuenta FROM pruebaExpo WHERE noCamion=5;";
                            $consulta = mysqli_query($cone,$query);
                            $result = mysqli_fetch_assoc($consulta);
                            echo "<h2>Pasajeros: ".$result['cuenta']."<br> Capacidad: 60 pasajeros</h2>";
                        // echo (string) $result['cuenta']; 

                        }else{
                        echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
                        }
                    ?>               
                </div>
            </div>
    </section>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.html">Inicio</a>
                <a href="modulo.html">Modulo</a>
                <a href="pruebas.html">Pruebas</a>
        
            </nav>
            <p class="copyrigth">Contacto: thinkingInnova@gmail.com <br> 656 111-1111</p>
            <p class="copyrigth">Todos los derechos reservados &copy;</p>
        </div>
    </footer>   
</body>
</html>