<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- CSRF Token -->




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
              <li><a onclick="location.href='{{ url('/alm_bidali') }}'">Bidalketak</a></li>
              <li><a onclick="location.href='{{ url('/kokapena') }}'">Kalitatea</a></li>
              <li><a onclick="location.href='{{ url('/almazen') }}'">Almazena</a></li>
              <li class="active"><a onclick="location.href='{{ url('/loteak') }}'">Loteak</a></li>
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
                    <h1>LOTEAK</h1>
                        <h2>Loteak bilatu</h3>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Lote ID:">
        
        
        <h2>LOTEAK</h3>
        

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>LoteID</th>
                    <th>Arduraduna</th>
                    <th>Hasiera data</th>
                    <th>Bukaera data</th>
                    <th>Emaitza</th>
                    <th>Alamzen kokapena</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach ( $result as $res )
            <tr>
                
                <td>{{ $res->lote_id }}</td>
                <td>{{ $res->arduraduna }}</td>
                <td>{{ $res->hasiera_data }}</td>
                <td>{{ $res->bukaera_data }}</td>
                <td>{{ $res->emaitza }}</td>
                <td>{{ $res->almazen_kokapena }}</td>
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
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
    </script>
    </body>
</html>
