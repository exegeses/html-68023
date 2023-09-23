<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/logo.png" alt="Logo Summer Exploring">
            Summer Exploring
        </a>

        <!-- navegación -->        
        <nav>
            <a href="index.html">Inicio</a>
            <a href="">Promos</a>
            <a href="">Servicios</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </header>
    <main>

        <section id="contacto">
<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    //configuramos datos de email a enviar
    $destinatario = 'ACÁ VA TU EMAIL';
    $asunto = 'Email enviado desde Summer Exploring';
    $cuerpo = '<div style="background-color: #EC7D54;
                           color: #fff;
                           font-family: Tahoma;
                           font-size: 20px;
                           width: 500px;
                           margin: auto; 
                           padding: 24px;
                           border-radius: 12px
                           ">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta.'</div>';
    #encabezados adicionales
    $headers = 'From: contacto@summer-exploring.com.ar'. "\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    //enviamos el email
    mail( $destinatario, $asunto, $cuerpo, $headers );

    ### personalizamos mensaje en pantalla
    echo 'Gracias '.$nombre.' por contactarnos';
?>
        </section>
        <section id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.692662355023!2d-0.11866732250189256!3d51.50050717181172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b8be668bd9%3A0x803c1962e6448108!2s203%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207FP%2C%20Reino%20Unido!5e0!3m2!1ses!2sar!4v1695476106545!5m2!1ses!2sar"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>
    <footer>
        <!-- logo -->
        <a href="index.html">
            <img src="imgs/sunsea-wht.png" alt="Logo Summer Exploring">
            Summer Exploring
        </a>
        <nav>
            <a href="">
                <img src="imgs/instagram-w 1.png" alt="Instagram">
            </a>
            <a href="">
                <img src="imgs/facebook-w 1.png" alt="Facebook">
            </a>
            <a href="">
                <img src="imgs/twitter-w 1.png" alt="Twitter">
            </a>
            <a href="">
                <img src="imgs/linkedin-w.png" alt="LinkedIn">
            </a>
        </nav>
    </footer>


</body>
</html>