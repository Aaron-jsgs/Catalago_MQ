<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="CSS/Contactenos.CSS">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <title>SoundStream</title>
</head>
<body>
<!--Menu-->
<header>
    <nav>
      <h1 class="titlelog">SOUNDSTREAM</h1>
      <div class="navbar">
        <ul id="list">
          <li><a href="Index.HTML"> Inicio </a></li>
          <li><a href="Productos.HTML"> Productos </a></li>
          <li><a href="Contactenos.PHP"> Contáctenos </a></li>
          <li><a href="Acerca_nosotros.HTML"> Acerca de Nosotros </a></li>
        </ul>
      </div>
    </nav>
  </header>
<!--Contenedor de texto-->
<div class="slogan">
  <h1>¿COMÓ PUEDO<br>CONTACTARME<br>CON SOUNSTREAM?</h1>
  <p>PARA QUEJAS O SUGERENCIAS DESLIZA <br>HACIA ABAJO Y LLENA NUESTRO <br>FORMULARIO</p>
</div>
<!--Contenedor de Formulario-->
<div class="Form">
  <div class="content">
    <h1 class="logo">Contactenos</h1>
      <div class="contact-wrapper">
        <div class="contact-form">
          <h3>Llene Los Siguientes Campos:</h3>
            <form method="post">
              <p>
                <label>Nombre</label>
                <input type="text" name="fullname">
              </p>
              <p>
                <label>Email</label>
                <input type="email" name="email">
              </p>
              <p>
                 <label>Número de Teléfono</label>
                 <input type="tel" name="phone">
              </p>
              <p>
                <label>Asunto</label>
                <input type="text" name="asunto">
              </p>
              <p class="block">
                 <label>Mensaje</label> 
                 <textarea name="message" rows="3"></textarea>
              </p>
              <p class="block">
                <button type="submit" name="Enviar">Enviar</button>
              </p>
            </form>
            </div>
       <div class="contact-info">
         <h4>Para Mayor Informacion Contactanos<br> En Nuestro Soporte Técnico</h4>
          <ul>
            <li><i class="fa-duotone fa-solid fa-phone"></i>+504 9767-8248</li>
            <li><i class="fa-solid fa-envelope"></i>SoundStream@gmail.com</li>
          </ul>
            <p>Evaluaremos tu solicitud y haremos todo lo posible para darte una respuesta inmedita y solucionar tú problema</p>
         </div>
     </div>
  </div>
</div>
<!--footer-->
<section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Inicio</h4>
          <ul class="links">
            <li><a href="Productos.HTML">Productos</a></li>
            <li><a href="American.HTML">American Performer</a></li>
            <li><a href="Japan.HTML">Japan Noir</a></li>
            <li><a href="PlayerII.HTML">Serie Player II</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Información</h4>
          <ul class="links">
            <li><a href="Contactenos.PHP">Contactenos</a></li>
            <li><a href="Acerca_nosotros.HTML">Acerca de Nosotros</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Nuestras Redes Sociales</h4>
          <div class="icons">
            <ul class="wrapper">
              <li class="icon facebook">
                <span class="tooltip">Facebook</span>
                <i class="fab fa-facebook-f"></i>
              </li>
              <li class="icon whatsapp">
                <span class="tooltip">Whatsapp</span>
                <i class="fab fa-whatsapp"></i>
              </li>
              <li class="icon instagram">
                <span class="tooltip">Instagram</span>
                <i class="fab fa-instagram"></i>
              </li>
              <li class="icon twitter">
                <span class="tooltip">Twitter</span>
                <i class="fab fa-twitter"></i>
              </li>
              </ul> 
          </div>
        </div>
      </div>
        <footer>
          <p>&copy; 2024 SoundStream. Todos los derechos reservados.</p>
        </footer>
    </section>
<?php
  include("registrar.php");
?>
</body>
</html>