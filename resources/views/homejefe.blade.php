<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          
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
              <li><a onclick="location.href='{{ url('/mek_getjefe') }}'">Mekanizatua</a></li>
              <li><a onclick="location.href='{{ url('/alm_bidalijefe') }}'">Bidalketak</a></li>
              <li><a onclick="location.href='{{ url('/kokapenajefe') }}'">Kalitatea</a></li>
              <li><a onclick="location.href='{{ url('/almazenjefe') }}'">Almazena</a></li>
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
                            <h2>Gure departamentuak</h3>
                    </div>
                    <!--<button onclick="location.href='{{ url('/zat_get') }}'"type="button" class="btn btn-success" style="height:245px;width:205px;font-size:30px">Zatiketa</button>-->
                    <button onclick="location.href='{{ url('/mek_get') }}'"type="button" class="btn btn-info" style="height:245px;width:205px;font-size:30px">Mekanizatua</button>
                    <button onclick="location.href='{{ url('/alm_bidali') }}'"type="button" class="btn btn-warning" style="height:245px;width:205px;font-size:30px;">Bidalketak</button>
                    <button onclick="location.href='{{ url('/kokapena') }}'"type="button" class="btn btn-danger" style="height:245px;width:205px;font-size:30px">Kalitatea</button>
                    <button onclick="location.href='{{ url('/almazen') }}'"type="button" class="btn btn-primary" style="height:245px;width:205px;font-size:30px">Almazena</button>
                    <button onclick="location.href='{{ url('/loteak') }}'"type="button" class="btn btn-success" style="height:245px;width:205px;font-size:30px">Loteak</button>
                </div>
                
         
            </div>
            <!--DPTO--->
            <!--Langileak-->
            <div class="wrapper">
                <div class="page-header clear-filter" filter-color="orange">
                    <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/header.jpg');">
                </div>
                <div class="container">
                    <div class="content-center brand">
                        <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                            <h2>Gure langileak</h3>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Izena</th>
                            <th>Abizena</th>
                            <th>Departamendua</th>
                            <th>Arduraduna</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $langiles as $res )
                        <tr>
                            <td>{{ $res->langile_id }}</td>
                            <td>{{ $res->izena }}</td>
                            <td>{{ $res->abizena }}</td>
                            <td>{{ $res->dpto }}</td>
                            <td>{{ $res->arduraduna }}</td>
                        </tr>
                         @endforeach
                         </tbody>
                     </table> 
                     
                     <br><br>
                     <div>
                         <form action="/langile_sortu" method="post">
                              <div class="form-group">
                                <label for="langile_id">Langile ID:</label>
                                <input type="text" class="form-control" name="langile_id">
                              </div>
                              <div class="form-group">
                                  <label for="izena">Izena:</label>
                                <input type="text" class="form-control" name="izena">
                              </div>
                              <div class="form-group">
                                <label for="abizena">Abizena:</label>
                                <input type="text" class="form-control" name="abizena">
                              </div>
                              <div class="form-group">
                                <label for="dpto">Departamentua</label>
                                <input type="text" class="form-control" name="dpto">
                              </div>
                              <div class="form-group">
                                <label for="arduraduna">Arduraduna</label>
                                <input type="text" class="form-control" name="arduraduna">
                              </div>
                              <button type="submit" class="btn btn-success">Langile Berria Sortu</button>
                              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        </form>
                     </div>
                </div>
                
                        
                </div>        
            </div>
            
        </div>
        </div>
        
    </body>
</html>