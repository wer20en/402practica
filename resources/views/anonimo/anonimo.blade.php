@extends('layout.layout')

@section('title', 'Page Title')

@section('content')
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
      
            
             
             
          </body>
      </html>
@endsection