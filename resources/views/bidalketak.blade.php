<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker({ dateFormat: "dd-mm-yy" });
    $( "#datepicker2" ).datepicker({ dateFormat: "dd-mm-yy" });
  } );
  </script>

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
              <li><a onclick="location.href='{{ url('/mek_get') }}'">Mekanizatua</a></li>
              <li class="active"><a onclick="location.href='{{ url('/alm_bidali') }}'">Bidalketak</a></li>
              <li><a onclick="location.href='{{ url('/kokapena') }}'">Kalitatea</a></li>
              <li><a onclick="location.href='{{ url('/almazen') }}'">Almazena</a></li>
              <li><a onclick="location.href='{{ url('/loteak') }}'">Loteak</a></li>
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
                    <h1>BIDALKETAK</h1>
                        <h2>Kokapen berria gorde</h3>
                        
                        
        <form action="/bid_berria" method="post">
          <div class="form-group">
            <label for="email">Lotea ID:</label>
            <select class="form-control" name="lote_id">
                <option value="">Aukeratu lotea...</option>
               @foreach($lotes as $lote)
                   <option value="{{ $lote->lote_id }}"> {{ $lote->lote_id }} </option>
                @endforeach
            </select>
          </div>
          <label for="email">Bezero ID:</label>
            <select class="form-control" name="bezero_id">
                <option value="">Aukeratu bezeroa...</option>
               @foreach($bezeros as $bezero)
                   <option value="{{ $bezero['bezero_id'] }}"> {{ $bezero['izena'] }} </option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="email">Data:</label>
            <input type="text" class="form-control" id="datepicker1" name="data">
          </div>
          <div class="form-group">
            <label for="pwd">Kopurua</label>
            <input type="text" class="form-control" name="kopurua">
          </div>
          <button type="submit" class="btn btn-default">Gorde</button>
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </form>
        <h2>Azken bidalketak</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Bidalketa ID</th>
                    <th>Lote ID</th>
                    <th>Bezeroa</th>
                    <th>Data</th>
                    <th>Kopurua</th>
                    <th>Arduraduna</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $result as $res )
            <tr>
                <td>{{ $res->id_bid }}</td>
                <td>{{ $res->lote_id }}</td>
                <td>{{ $res->bezero_id }}</td>
                <td>{{ $res->data }}</td>
                <td>{{ $res->kopurua }}</td>
                <td>{{ $res->arduraduna }}</td>
            </tr>
             @endforeach
             </tbody>
         </table> 
         
         </div>
         </div>    
         </div>
         </div>
    </body>
</html>
