<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- META DATA -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!--font-family-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

  <!-- TITLE OF SITE -->
  <title>Zombiz(project)</title>

  <!-- for title img -->
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png" />

  <!--font-awesome.min.css-->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

  <!--linear icon css-->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />

  <!--animate.css-->
  <link rel="stylesheet" href="assets/css/animate.css" />

  <!--hover.css-->
  <link rel="stylesheet" href="assets/css/hover-min.css" />

  <!--vedio player css-->
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />

  <!--owl.carousel.css-->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />

  <!--bootstrap.min.css-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- bootsnav -->
  <link href="assets/css/bootsnav.css" rel="stylesheet" />

  <!--style.css-->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!--responsive.css-->
  <link rel="stylesheet" href="assets/css/responsive.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!--header start-->
  <section class="header">
    <div class="container">
      <div class="header-left">
        <ul class="pull-left">
          <li>
            <a href="#">
              <i class="fa fa-phone" aria-hidden="true"></i> +992 563 542
            </a>
          </li>
          <!--/li-->
          <li>
            <a href="#">
              <i class="fa fa-envelope" aria-hidden="true"></i>infoLuanda@mail.com
            </a>
          </li>
          <!--/li-->
        </ul>
        <!--/ul-->
      </div>
      <!--/.header-left -->
      <div class="header-right pull-right">
        <ul>
          <li class="reg">
            <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
              UniSistema
            </a>

            <!-- small modal -->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">
                        <i class="fa fa-close"></i>
                      </span>
                    </button>
                    <h4 class="modal-title" id="mySmallModalLabel">
                      Sign In
                    </h4>
                  </div>
                </div>
              </div>
            </div>

            <!-- large modal -->
          </li>
          <!--/li -->
          <li>
            <div class="social-icon">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>

                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
              <!--/.ul -->
            </div>
            <!--/.social-icon -->
          </li>
          <!--/li -->
        </ul>
        <!--/ul -->
      </div>
      <!--/.header-right -->
    </div>
    <!--/.container -->
  </section>
  <!--/.header-->
  <!--header end-->

  <!--menu start-->
  <section id="menu">
    <div class="container">
      <div class="menubar">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              UNI<span>LUANDA</span>
            </a>
          </div>
          <!--/.navbar-header -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="sobre.html">Sobre a UniLuanda</a></li>
              <li><a href="falcudades.html">Falcudades</a></li>
              <li class="active"><a href="candidatura.php">Candidaturas</a></li>
              <li><a href="team.html">Team</a></li>

              <li><a href="contactos.html">Contatos</a></li>

            </ul>
            <!-- / ul -->
          </div>
          <!-- /.navbar-collapse -->
        </nav>
        <!--/nav -->
      </div>
      <!--/.menubar -->
    </div>
    <!-- /.container -->
  </section>
  <!--/#menu-->
  <!--menu end-->

  <div class="principal">
    <div class="form">
      <form method="POST" action="cadastroCandidato.php">
        <p>Cadastro de Candidatos</p>
        <span>Este formulario é destinado aos candidatos.</span>
        <div class="DadosObrigatorios input">
          <label>Nome Completo:</label><br />
          <input type="text" placeholder="Nome Completo" maxlength="30" minlength="10" required name="nome" />
          <br />
          <label>Nº do documento de identidade:</label><br /><input type="text" placeholder="BI" maxlength="14" minlength="10" required name="bi" />
          <br />
          <label>Email:</label><br /><input type="email" placeholder="uniluanda@gmail.com" maxlength="50" required name="email" />
          <br />
          <label>Telefone:</label><br /><input type="tel" placeholder="900-000-000" name="telefone" />
        </div>
        <!--Dados obrigatorios-->
        <label>Palavra Passe:</label><br /><input type="password" placeholder="*********" maxlength="50" required name="pass" />
        <!--Dados de acesso-->
        <br />
        <label>Repita a Palavra Passe:</label><br /><input type="password" placeholder="*********" maxlength="50" required name="pass" />

        <br />
        <input type="submit" value="Cadastrar" />
      </form>
    </div>
    <!--formulario-->

  </div>
  <!--principal-->


  <!--/.hm-footer-details-->
  <!--hm-footer end-->

  <!-- footer-copyright start -->
  <footer class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <div class="foot-copyright pull-left">
            <p>
              &copy; Todos os direitos reservados ao grupo de
              DesenvolvimentoUniProg
            </p>
          </div>
          <!--/.foot-copyright-->
        </div>
        <!--/.col-->
        <div class="col-sm-5">
          <div class="foot-menu pull-right">
            <ul>
              <li><a href="#">legal</a></li>
              <li><a href="#">sitemap</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <!-- /.foot-menu-->
        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
      <div id="scroll-Top">
        <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
      </div>
      <!--/.scroll-Top-->
    </div>
    <!-- /.container-->
  </footer>
  <!-- /.footer-copyright-->
  <!-- footer-copyright end -->

  <!-- jaquery link -->

  <script src="assets/js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <!--modernizr.min.js-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  <!--bootstrap.min.js-->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- bootsnav js -->
  <script src="assets/js/bootsnav.js"></script>

  <!-- for manu -->
  <script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

  <!-- vedio player js -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <!--owl.carousel.js-->
  <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

  <!-- counter js -->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>

  <!--Custom JS-->
  <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
  <script type="text/javascript" src="assets/js/custom.js"></script>
</body>

</html>