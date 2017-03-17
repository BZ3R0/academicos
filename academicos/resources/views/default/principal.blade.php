<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Academicos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="logo">
                     <h1><a href="http://127.0.0.1:8000/"><i class="fa fa-square-o "></i>&nbsp;Acadêmicos</a></h1>
                  </div>
               </div>

               <div class="col-md-7">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil <b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
                              <li><a href="profile.html">Editar</a></li>
                              <li><a href="login.html">Sair</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class="page-content">
        <div class="row">
          <div class="col-md-3">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="http://127.0.0.1:8000/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li class="submenu">
                         <a href="http://127.0.0.1:8000/gestor">
                            <i class="glyphicon glyphicon-list"></i> Gestor
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="/cadastra">Cadastrar</a></li>
                            <li><a href="/lista">Listar</a></li>
                            <li><a href="signup.html">Configurações</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Aluno
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="aluno">Home</a></li>
                            <li><a href="disciplina">Disciplinas</a></li>
                            <li><a href="grade">Notas</a></li>
                            <li><a href="#">Frequência</a></li>
                            <li><a href="#">Ementas</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Responsável
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Notas</a></li>
                            <li><a href="signup.html">Frequência</a></li>
                            <li><a href="signup.html">Ementas</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
          </div>

          <div class="col-md-9">


              @yield('conteudo')

          </div>
        </div>
    </div>

    <div class="navbar navbar-default navbar-fixed-bottom">
       <div class="container">
         <p class="navbar-text pull-left">© 2017 - Academicos</p>
       </div>
    </div>
    <!-- <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2017 <a href='#'>Acadêmicos</a>
            </div>

         </div>
    </footer> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
  </body>
</html>
