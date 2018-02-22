<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
    </head>
    <body style="background:#E4FFFF;">
        
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
            <a class="navbar-brand" onclick="location.href='{{ url('/home') }}'">Logotipo</a>
          </div>
         
          <!-- Agrupar los enlaces de navegación, los formularios y cualquier
               otro elemento que se pueda ocultar al minimizar la barra -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a onclick="location.href='{{ url('/mek_get') }}'">Mekanizatua</a></li>
              <li><a onclick="location.href='{{ url('/alm_bidali') }}'">Bidalketak</a></li>
              <li><a onclick="location.href='{{ url('/kokapena') }}'">Kalitatea</a></li>
              <li><a onclick="location.href='{{ url('/almazen') }}'">Almazena</a></li>
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
                <input type="text" class="form-control" placeholder="Buscar">
              </div>
              <button type="submit" class="btn btn-default">Enviar</button>
            </form>
         
            <ul class="nav navbar-nav navbar-right">
                <form id="login">
                    <div class="form-group">
                      <input type="submit" class="btn btn-success" formaction="/login" value="Login">
                    <div class="form-group">
                </form> 
            </ul>
          </div>
        </nav>
        
        <!--------------------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------->
        
        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/header.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                        <h2>Lana gorde</h3>
                        
                        
        <form action="/zat_berria" method="post">
          <div class="form-group">
            <label for="email">langilea:</label>
            <input type="text" class="form-control" name="lote_id">
          </div>
          <div class="form-group">
            <label for="email">Lana:</label>
            <input type="text" class="form-control" name="izena">
          </div>
          <div class="form-group">
            <label for="pwd">Makina</label>
            <input type="text" class="form-control" name="makina_id">
          </div>
          <button type="submit" class="btn btn-default">Gorde</button>
        </form>
        <h2>Azken lanak</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Langile</th>
                    <th>Lana</th>
                    <th>Makina</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $result as $res )
            <tr>
                <td>{{ $res->langile_id }}</td>
                <td>{{ $res->lana_id }}</td>
                <td>{{ $res->makina_id }}</td>
                <td><a href="/zatiketa" >borratu</a></td>
                <td><a href="/langileBerria/" >eguneratu</a></td>
            </tr>
             @endforeach
             </tbody>
         </table> 
         
         </<div>
             
         </div>
    </body>
</html>

