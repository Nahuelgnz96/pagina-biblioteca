
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Popular Coronda</title>
<<<<<<< HEAD
  <link rel="stylesheet" href="css/style.css?v1.1">
  <link rel="stylesheet" href="css/whatsapp.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
  <style>
    .header{
    background-image: linear-gradient(
        rgba(0,0,0,0.7),
        rgba(0,0,0,0.7)), url(img/menu2.jpg);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
}
  </style>
</head>
<body>
 
=======
  <link rel="stylesheet" href="css/style.css?v=1.0">
  <link rel="stylesheet" href="css/whatsapp.css">
  <script src="https://kit.fontawesome.com/8697250bf3.js" crossorigin="anonymous"></script>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
<a href="https://api.whatsapp.com/send?phone=3466400909&text=Hola!%20Quisiera%20m%C3%A1s%20informaci%C3%B3n!." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <header class="header" id="Inicio">
<<<<<<< HEAD
    <div class="menu container" id="menu1">
=======
    <div class="menu container">
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
      <a href="#" class="logo">logo</a>
      <input type="checkbox" id="menu">
      <label for="menu">
        <img src="img/menu.png" class="menu-icono" alt="">
      </label>
      <nav class="navbar">
        <ul>
<<<<<<< HEAD
          <li><a href="#Inicio">Inicio</a></li>
          <li><a href="#actividades">Actividades</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#blog">Sobre nosotros</a></li>
=======
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#actividades">actividades</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#blog">sobre nosotros</a></li>
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
          <li><a href="#pie-pagina">Contacto</a></li>
          <button class="btnlogin-popup" onclick="location.href='views/v_login.php'">Login</button>
        </ul>
      </nav>

    </div>
    <div class="header-content container">

<<<<<<< HEAD
      <h1>Biblioteca Popular <br> "Coronel José Rodríguez" <br> Coronda</h1>
=======
      <h1>Biblioteca Popular <hr> "Coronel José Rodríguez" Coronda</h1>
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Doloremque nulla debitis adipisci quaerat inventore omnis velit aspernatur possimus molestias?
          Vero, eius. Recusandae dignissimos nobis repellendus, quae rem voluptate! Vel, placeat.
      </p>
      <a href="#actividades" class="btn-1">Informacion</a>
    </div>
    
    
  </header>
  

  <section class="coffee" id="actividades">
    <!-- <img src="img/bg2.png" alt=""> -->

    <div class="coffee-content container">
<<<<<<< HEAD
      <h2>noticias y actividades de la institución</h2>
      <!-- <p class="txt-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequatur voluptate officia rerum nemo qui quia nostrum vero ullam sunt,
          perferendis omnis nam minima facilis neque accusamus obcaecati fugit provident incidunt.
      </p> -->
      <div class="row">
        <div class="col-6">
          <h3 class="text-center">Noticias de la biblioteca</h3>
          <div class="coffee-group">
            <?php include "controller/ultimasnoticias.php"?>
          </div>
          <a href="views/noticias.php" class="btn-1" id="services">Informacion</a>
        </div>
        <div class="col-6">
          <h3 class="text-center">Noticias de la biblioteca</h3>
          <div class="coffee-group">
            <?php include "controller/ultimasact.php"?>
          </div>
          <a href="views/actividades.php" class="btn-1" id="services">Informacion</a>
        </div>

      </div>
      
      
=======
      <h2>algunas actividades que se realizan en la institución</h2>
      <p class="txt-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequatur voluptate officia rerum nemo qui quia nostrum vero ullam sunt,
          perferendis omnis nam minima facilis neque accusamus obcaecati fugit provident incidunt.
      </p>

      <div class="coffee-group">
        <?php include "controller/ultimasnoticias.php"?>
      
      </div>
      <a href="views/noticias.php" class="btn-1" id="services">Informacion</a>
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e

    </div>
  </section>

<<<<<<< HEAD
  

  <main class="services">
  <h2 id="h2">servicios que ofrecemos</h2>

    <!-- <div class="services-content container">
=======
  <main class="services">

    <div class="services-content container">
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
      <h2>servicios que ofrecemos</h2>

      <div class="services-group">
        <div class="services-1">
          <img src="img/servicio1.png" alt="">
          <h3><a href="">servicio 1</a></h3>
        </div>
        <div class="services-1">
          <img src="img/servicio2.png" alt="">
          <h3><a href="">servicio 2</a></h3>
        </div>
        <div class="services-1">
<<<<<<< HEAD
          
=======
          <!-- <img src="img/servicio3.png" alt=""> -->
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
          <h3><a href=""><img src="img/servicio3.png" alt=""></a></h3>
        </div>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Obcaecati, perspiciatis soluta aliquam nam, rem maiores itaque minus facere officiis consectetur veniam ut blanditiis deleniti, 
        eveniet doloremque sapiente ipsum corporis sit?
      </p>
<<<<<<< HEAD
      <a href="noticias.php" class="btn-1">Informacion</a>
    </div> -->

    <div class="contenedor">
        <div class="slider-contenedor">
            <section class="contenido-slider">
                <div>
                    <h2>Préstamos de libros a domicilio. <br> Préstamo de material bibliográfico para consultas en sede. <br> Préstamos de CD y DVD. <br> Préstamos de Lectores Digitales, con cincuenta y siete libros cada uno.</h2>
                    <!-- <a href="#">Contact us</a> -->
                </div>
                <img src="animacion.svg" alt="">

            </section>
            <section class="contenido-slider">
                <div>
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                        sed. Quos cupiditate id delectus est.</h2>
                    <!-- <a href="#">Contact us</a> -->
                </div>
                <img src="animacion2.svg" alt="">

            </section>
        <section class="contenido-slider">
            <div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                    sed. Quos cupiditate id delectus est.</h2>
                <!-- <a href="#">Contact us</a> -->
            </div>
            <img src="animacion3.svg" alt="">

        </section>
        <section class="contenido-slider">
            <div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa ipsam aliquam natus quidem
                    sed. Quos cupiditate id delectus est.</h2>
                <!-- <a href="#">Contact us</a> -->
            </div>
            <img src="animacion.svg" alt="">

        </section>
    </div>
    </div>

=======
      <a href="#" class="btn-1">Informacion</a>
    </div>
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
  </main>

  <!-- <section class="general">
    <div class="general-1">
      <h2>total similique</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Minus iusto, exercitationem quam blanditiis obcaecati adipisci maiores nobis 
        voluptas sed voluptatibus recusandae distinctio assumenda similique ratione dolorem veniam hic incidunt esse.
      </p>
      <a href="#" class="btn-1">Informacion</a>
    </div>
    <div class="general-2"></div>

  </section>
  <section class="general">
    <div class="general-3"></div>
    <div class="general-1">
      <h2>total similique</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Minus iusto, exercitationem quam blanditiis obcaecati adipisci maiores nobis 
        voluptas sed voluptatibus recusandae distinctio assumenda similique ratione dolorem veniam hic incidunt esse.
      </p>
      <a href="#" class="btn-1">Informacion</a>
    </div>
  </section> -->

  <section class="blog container" id="blog">
    <h2>sobre nosotros</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

    <div class="blog-content">
      <div class="blog-1">
        <img src="img/blog1.jpg" alt="">
        <h3>Establecimiento</h3>
        <p>
          Historia de la Biblioteca Popular
          “CORONEL JOSE RODRIGUEZ”
          Reconocimiento Nº 0417

          -Bibliotecas Populares y la promoción de las artes, la cultura, las ciencias y otros-
          Fundación:  1º de octubre de 1912
          <!-- España 1815
          Teléfono y Fax 0342 4911197
          bibliocoronda@hotmail..com.ar

          Coronda
          Provincia de Santa Fe- República Argentina -->
          <!-- Fundador:   Sr. Eudocio Jiménez


          Inicio de actividades:  4 de diciembre de 1912 -->


          Estatutos:  1913; actualizados en 1946 y 1981


          Reconocida por la Comisión Nacional Protectora de Bibliotecas Populares:  1912
          Reconocimiento Nº 0417

          Personería Jurídica: Sup Gob de la provincia de Santa Fe: Nº 127-S-14 del 29-05-1914-Resolución 459/1981 Insp Gral.

          Edificio Propio:  1914  Donado por el Dr. Martín Rodríguez, en memoria de su padre el Coronel  José Rodríguez, hijo dilecto de Coronda

          Imposición del nombre: 1922

          Libro de Oro: Donado en 1938 por una delegación de la Escuela Industrial Nº1 de Santa Fe
          Jornadas Culturales: Celebración anual desde 1972.Declaradas de Interés Provincial en 1984
        </p>
      </div>
      <div class="blog-1">
        <img src="img/blog2.jpg" alt="">
        <h3>Fundador</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Praesentium quis nostrum ducimus, omnis nesciunt ipsa, quam incidunt atque dolore hic deleniti dolor facilis? 
          Eum, molestiae quo saepe dolores et perferendis?
        </p>
      </div>
      <div class="blog-1">
<<<<<<< HEAD
        <img src="img/menu2.jpg" alt="">
=======
        <img src="img/blog3.jpg" alt="">
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
        <h3>Miembros directivos</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Praesentium quis nostrum ducimus, omnis nesciunt ipsa, quam incidunt atque dolore hic deleniti dolor facilis? 
          Eum, molestiae quo saepe dolores et perferendis?
        </p>
      </div>
    </div>
<<<<<<< HEAD
    <!-- <a href="#" class="btn-1">Informacion</a> -->
=======
    <a href="#" class="btn-1">Informacion</a>
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
  </section>

  <!-- <footer class="footer" id="footer">
    <div class="footer-content container">
      <div class="link">
        <h3>Contactos</h3>
        <ul>
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-instagram"></a></li>
          <li><a href="#" class="">loren</a></li>
          <li><a href="#" class="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
      <div class="link">
        <h3>loren</h3>
        <ul>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
          <li><a href="">loren</a></li>
        </ul>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2023 <b>biblioteca popular</b> - todos los derechos reservados.</small>

    </div>
  </footer> -->
  <footer class="pie-pagina" id="pie-pagina">
    <div class="grupo-1">
        <div class="ubicacion">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.5085431707503!2d-60.918017224421995!3d-31.97422697400944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5bfa3856182f3%3A0x7c1f93e82e18a195!2sBiblioteca%20Popular%20Cnel.%20Jos%C3%A9%20Rodr%C3%ADguez!5e0!3m2!1ses!2sar!4v1686785853961!5m2!1ses!2sar" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="box">
            <h2>UBICACIÓN - Horarios de atención</h2>
            <p>España 1815, Coronda, Argentina</p>
            <p>Lunes a viernes 9:00-12:00
              14:30-17:30</p>
              <p></p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/bibliotecacoronda" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/bibliocoronda/" class="fa fa-instagram"></a>
                <a href="https://www.youtube.com/@bibliotecapopularcoroneljo3821" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Biblioteca Popular</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>
<<<<<<< HEAD
  <script>
    window.addEventListener("scroll", function(){
      var menu1 = document.getElementById("menu1");
      menu1.classList.toggle("sticky", window.scrollY > 0)
    })
  </script>
  <script>
    let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);



function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },1500)
      }
}
  </script>
=======
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>