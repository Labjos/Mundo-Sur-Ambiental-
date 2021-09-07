<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/stiloAmbiental.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c6ca3be74f.js" crossorigin="anonymous"></script>
  <header>
    <div id="navBar">
      <div id="espacio">
        <div id="zonaLogo"></div>
      </div>
      <nav id="menuPrincipal">
        <lu>
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="somos.html">Quienes Somos</a></li>
          <li><a href="servicios.html">Que Hacemos</a></li>
          <li><a href="clientes.html">Clientes y Proyectos</a></li>
          <li><a href="unitank.html">Unitank</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </lu>
      </nav>
    </div>
  </header>

<body>
  <section id="inicialContacto">
    <div id="fotoVero"></div>
    <div id="datosUno">
      <div id="datosVero">
        <p>CONTACTO COMERCIAL
          <hr>
        </p>
        <p><i class="fas fa-address-card"></i>&nbsp &nbsp Verónica Gonzalez</p>
        <p><a href="mailto:vgonzalez@mdsambiental.com"style="text-decoration: none;"><i class="fas fa-envelope-square"></i></a>&nbsp &nbsp vgonzalez@mdsambiental.com</p>
        <p><i class="fab fa-whatsapp-square"></i> &nbsp &nbsp +54 9 261 4999 437</p>
        <p><a href="https://www.linkedin.com/in/veronicagonzalez-b680b556" target="_blank"><i class="fab fa-linkedin"></i></a> &nbsp &nbsp PERFIL PROFESIONAL</p>
      </div>
    </div>
    <div id="fotoXavi"></div>
    <div id="datosDos">
      <div id="datosXavi">
        <p>CONTACTO TÉCNICO
          <hr>
        </p>
        <p><i class="fas fa-address-card"></i>&nbsp &nbsp Xaxier Jordana</p>
        <p><a href="mailto:xjordana@mdsambiental.com"style="text-decoration: none;"><i class="fas fa-envelope-square"></i></a> &nbsp &nbsp xjordana@mdsambiental.com</p>
        <p><i class="fab fa-whatsapp-square"></i> &nbsp &nbsp +54 9 261 4999 438</p>
        <p><a href="https://www.linkedin.com/in/xavier-jordana-56856726" target="_blank"><i class="fab fa-linkedin"></i></a> &nbsp &nbsp PERFIL PROFESIONAL</p>
      </div>
    </div>
    <div id="fondoFormulario">
      <div id="zonaRedes">
        <div id="direccion">Guardia Vieja 1849, Vistalba, Mendoza. Argentina</div>
        <div id="textoRedes">Para todo tipo de consultas, puede llamarnos, contactarnos por redes o completar el siguiente formulario:</div>

        <div id="respuesta">
          <?php
          if (isset($_GET['e'])) {

            echo "<p> Mensaje enviado. Gracias!<br/>
                      En breve nos estaremos comunicando.</p>";
          }
          ?>
        </div>
        <iv id="iconosRedes">
          <div id="iconoLink"><a href="https://www.linkedin.com/company/mundosur-ambiental/about/" target="_blank"><i class="fab fa-linkedin"></i></a></div>
          <div id="iconoWass"><i class="fab fa-whatsapp-square"></i></div>
      </div>
      <form id="formulario" action="/enviar_consulta.php" method="POST">
        <input class="celdas" type="text" name="nombre" placeholder="Nombre" required>
        <input class="celdas" type="text" name="apellido" placeholder="Apellido" required>
        <input class="celdas" type="text" name="organizacion" placeholder="Organización" required>
        <input class="celdas" type="number" name="telefono" placeholder="Teléfono" required>
        <input class="celdas" type="email" name="email" placeholder="E-mail" required>
        <textarea class="celdas" rows="1" name="mensaje" placeholder="Tu mensaje:" required></textarea>
        <input id="botonEnvio" class="celdas" type="submit" style="color: #fff;" value="Enviar">
      </form>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>