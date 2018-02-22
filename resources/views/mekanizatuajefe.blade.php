<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- CSRF Token -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>
    <body style="background-image: url('/images/fondo2.jpg');background-repeat: repeat;background-position: center center;background-attachment: fixed;">
        
        <!--------------------------------------------------------------------------------->
     <!----------------------------- MENU CABECERA ------------------------------------->
     <nav class="navbar navbar-inverse" role="navigation">
  
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Desplegar navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" onclick="location.href='{{ url('/home') }}'"><img class="img-responsive" src="/images/jka.png" title="JKA" style="width:100px; height:30px;"></a>
          </div>
         
          <!-- Agrupar los enlaces de navegación, los formularios y cualquier
               otro elemento que se pueda ocultar al minimizar la barra -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a onclick="location.href='{{ url('/mek_getjefe') }}'">Mekanizatua</a></li>
              <li><a onclick="location.href='{{ url('/alm_bidalijefe') }}'">Bidalketak</a></li>
              <li><a onclick="location.href='{{ url('/kokapenajefe') }}'">Kalitatea</a></li>
              <li><a onclick="location.href='{{ url('/almazenjefe') }}'">Almazena</a></li>
              <li><a onclick="location.href='{{ url('/loteak') }}'">Loteak</a></li>
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Menú #1 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Mekanizatua</a></li>
                  <li><a href="#">Bidalketak</a></li>
                  <li><a href="#">Kalitatea</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Acción #4</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Acción #5</a></li>
                </ul>
              </li>-->
            </ul>
         
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Bilatu...">
              </div>
              <button type="submit" class="btn btn-default">Bilatu</button>
            </form>
         
            <ul class="nav navbar-nav navbar-right">
                <form id="login">
                    <div class="form-group">
                      <input type="submit" class="btn btn-white" formaction="/login" value="Login">
                    <div class="form-group">
                </form> 
            </ul>
          </div>
        </nav>
        
        <!--------------------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------->
        
        <div class="contenedor" style="background: white; margin: 0 auto; width: 75%">
        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/header.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                        
        <h2>Azken lanak</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Lote ID</th>
                    <th>Lana</th>
                    <th>Makina</th>
                    <th>Langile</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $result as $res )
            <tr>
                <td>{{ $res->lote_id }}</td>
                <td>{{ $res->izena }}</td>
                <td>{{ $res->makina_id }}</td>
                <td>{{ $res->langile_id }}</td>
                <td>{{ $res->data }}</td>
            </tr>
             @endforeach
             </tbody>
         </table> 
         
         </div>
             
         </div>
         </div>
         </div>
         </div>
         
        <script>
          $( function() {
            $( "#datepicker1" ).datepicker({ dateFormat: "dd-mm-yy" });
            $( "#datepicker2" ).datepicker({ dateFormat: "dd-mm-yy" });
          } );
        </script>

    </body>
</html>
