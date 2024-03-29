<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inicio</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <nav class="nav-extended blue lighten-1 row">
    <div class="nav-wrapper col s12">
      <a href="index.php" class="brand-logo" style="height: 100%;"><img src="img/logo.svg" alt="Logo"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalLogin">Iniciar Sesión</a></li>
        <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalRegister">Registrarse</a></li>
      </ul>
    </div>
    <div class="nav-content col s12 m6 right">
      <ul id="nav-mobile" class="tabs tabs-transparent right ">
        <li class="tab"><a class="active" href="#test1">Inicio</a></li>
        <li class="tab"><a href="#test2">Preguntas</a></li>
        <li class="tab"><a href="#test3">Record de Notas</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Iniciar Sesión</a></li>
    <li><a href="badges.html">Registrarse</a></li>
  </ul>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center blue-text text-lighten-1">¡Juega!</h1>
        <div class="row center">
          <h5 class="header col s12">Responde las preguntas y gana puntos</h5>
        </div>
        <div class="row center">
          <a href="preguntas.php" class="btn-large waves-effect waves-light teal lighten-1">Empezar</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">send</i></h2>
            <h5 class="center">Responde las preguntas</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our
              custom components. Additionally, we refined animations and transitions to provide a smoother experience
              for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">add</i></h2>
            <h5 class="center">Acumula puntos</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework
              that incorporates components and animations that provide more feedback to users. Additionally, a single
              underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">android</i></h2>
            <h5 class="center">Mejora a tu mascota virtual</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users
              get started. We are also always open to feedback and can answer any questions a user may have about
              Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12">¡Compite y queda entre los primeros lugares!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id
            nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies
            eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et
            pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed.
            Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam
            eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12">¡Canjea tus puntos por premios!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


  <!-- Modal Login -->
  <div id="modalLogin" class="modal">
    <div class="modal-content">
      <h4>Iniciar Sesion</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="" id="dni" type="text" class="validate">
              <label for="dni">DNI</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="" id="password" type="password" class="validate">
              <label for="password">Contraseña</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Register -->
  <div id="modalRegister" class="modal">
    <div class="modal-content">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="" id="names" type="text" class="validate">
              <label for="names">Nombres</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="" id="last_names" type="text" class="validate">
              <label for="last_names">Apellidos</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <input placeholder="" id="dni" type="text" class="validate">
              <label for="dni">DNI</label>
            </div>
            <div class="input-field col s12 m6">
              <input placeholder="" id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);
    });
  </script>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our
            full time job. Any amount would help support and continue development on this project and is greatly
            appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>