<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>proyecto U3 @yield('title')</title>
    </head>
    <body>
        @section('barra lateral')
            <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-rgb flex-md-nowrap p-0 shadow">

  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">TNTSystem Electronic</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>
  <input class="form-control mr-sm-2" id="texto" type="search" placeholder="Buscar" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/login">Iniciar sesion</a>
    </li>
  </ul>
</nav>
      <link href="../css/gestion20.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard/dashboard.js"></script></body>
</html>
          
        <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel3.css" rel="stylesheet">
<!-- Bootstrap -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Fonts -->
    
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
     

    <!-- Styles -->
    <link href="../public/css/gestion20.css" rel="stylesheet">
  </head>
         
  
  
 
<div class="page-section cta" style="color: rgba(255, 255, 255, 0.85);" >
  <div class="container">
    <h1 class="display-3">BIENVENIDO <img src="../img/diag.png"> </h1> 
   <p>Trabajamos para mejorar la vida de tus dispositivos.</p>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="base.html">Gestión de Pedidos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav mx-auto">
      <ul class="navbar-nav mx-auto">
        
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="base.html">TNTSystem</a>  
     </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="contacto.html">Contacto</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="https://www.facebook.com/PC-Diagnostic-478224408893552/">FACEBOOK</a>
            </ul>
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded">Categorias</a>
          <ul>
            <li><a href="mantenimiento.html">Dispositivos Moviles</a>
              <li><a href="computo.html">Equipos de computo</a></li>
              <li><a href="redes.html">Equipos de Redes</a></li>
            </ul>
          
        </li>
        </li>
      </ul>
      </ul>
      
    </div>
  </div>
</nav>
<div class="jumbotron" style="margin-top: 3rem;">
 <div class="container">
  <!-- Example row of columns -->
  <div class="row">
    
    <div class="col-md-4" style="color: black">
      <h2>Dispositivos moviles</h2>
      <p>Contamos con servicios a dispositivos moviles, abarcando variedad de modelos y sistemas operativos tales como Android y iOS, ademas de brindar garantias en nuestros servicios. </p>
      <p><a class="btn btn-primary" href="mantenimiento.html" role="button">Ver detalles &raquo;</a></p>
    
  </div>
    <div class="col-md-4" style="color: black">
      <h2>Equipos de computo</h2>
      <p>Ofrecemos, reparaciones,matenimientos, recuperacion de informacion, formateo, instalacion de softwares, paqueterias, driver, antivirus con licencias, instalacion de equipos, al igual que armados de PC personalizados. </p>
      <p><a class="btn btn-primary" href="computo.html" role="button">Ver detalles &raquo;</a></p>
    </div>
    <div class="col-md-4" style="color:black">
      <h2>Equipos de Redes</h2>
      <p>Brindamos mantenimiento a : servidores, routers, gabinetes etc. tambien realizamos cableados de red, diseñamos topologias en simuladores, instalaciones de equipo de red, e identificacion y correciones de errores.</p>
      <p><a class="btn btn-primary" href="redes.html" role="button">Ver detalles &raquo;</a></p>
    </div>
  </div>
  </div>

  

</div> <!-- /container -->
      

<body>
 <section class="page-section cta">
     <div class="container" >
       <div class="row">
         <div class="col-xl-9 mx-auto">
           <div class="cta-inner text-center rounded">
             <h2 class="section-heading mb-4">
               <span class="section-heading-upper">Compromiso total</span>
               <span class="section-heading-lower">Garantizado</span>
             </h2>
             <p class="mb-0">Con más de 25 años de experiencia a nuestras espaldas, conocimiento y herramientas necesarias para solucionar problemas.</p>
           </div>
         </div>
       </div>
     </div>
   </section>
   

    <!-- Footer -->
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0">
            <a href="#" class="link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
            <a href="#" class="link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
            <a href="#" class="link">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>
        </p>
        <p class="m-0 mbt">
            <a href="sample.html" class="link">Política de privacidad</a> ·
            <a href="sample.html" class="link">Aviso legal</a> ·
            <a href="sample.html" class="link">Cookies</a>
        </p>
        <p class="m-0 mbt1">&copy; Gestión de Pedidos 2020</p>
      </div>
    </footer>

    <!-- Bootstrap -->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        @show

        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
