<?php  
header('X-Frame-Options:SAMEORIGIN'); //click-jacking prevention
header('X-Content-Type-Options: nosniff');
//header("Content-Security-Policy: default-src 'self'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body>
    <div>
        <nav>
            <ul>
            <a href="index.php">INICIO</a> 
            <a href="galeria.html">GALERÍA</a>
            <a href="registroform.php">REGISTRARSE/INICIAR</a>
            <img src="./imagenes/logo-trans.png" class =logo>
            <div class="animation start-home"></div>
        </ul>
        </nav>
    </div>

    <div class="contenedor">

        <h1 class="titulo">
            Alain's Phone
        </h1>

        <img src="https://static.vecteezy.com/system/resources/previews/002/442/856/original/f-letter-logo-template-initials-sign-free-vector.jpg" alt="">
        <h1 class="subtitulo"> Descripción:</h1>
        <p>
            Descubre Alain's Phone, tu destino tecnológico definitivo para los amantes de los móviles.<br>
            En nuestra tienda, ofrecemos una amplia gama de smartphones de vanguardia de las marcas más reconocidas.<br>
            En Alain's Phone, no solo perseguimos la innovación, sino que también garantizamos precios competitivos y un servicio excepcional, para que puedas tener lo último en tecnología a tu alcance.<br>
            ¡Únete a nosotros y lleva la excelencia tecnológica a tu mano!
        </p>


        <h1 class="horario">
            Nuestro horario es &#x231A :
        </h1>
        <p>Lunes-Viernes 9:00-20:00</p>
        <p>Sábado 10:00-14:00</p>
        <br>

    
        <img src="./imagenes/localizacion.jpeg" alt="">
        <h1 class="subtituloloc"> ¿Dónde estamos?</h1>
        <p>
            Calle Amestoy,referencia: Entrada a Castro,la calle principal de comercios, 39700, Castro Urdiales, Cantabria
        </p>





        <h1 class="contacto">
            Contacto con nosotros
        </h1>
        <p>Teléfono: 922 312 456</p>
        <p>Email: alainphone@gmail.com</p>

        <h1 class="personal">
            <br><br><br> Nuestro personal esta formado por
        </h1>
        <p> Adrian Fernandez, Alain Pedrueza, Unai De Leon, Oscar Basaguren y Aitor Gonzalo.</p>
    </div>


   <div class=" botones">

    <p>¿Qué deseas hacer?</p>
    <input class="boton"type="button" value="Ver moviles" name="ver.moviles" onclick="location='listageneral.php'">
    <input class="boton" type="button" value="Añadir movil" name="añadirmovil" onclick="location.href='iniciosesion.php'">
    <input class="boton" type="button" value="Modificar datos de usuario" name="moddatos" onclick="location.href='iniciosesion.php'">
   </div>
    
</body>
</html>
