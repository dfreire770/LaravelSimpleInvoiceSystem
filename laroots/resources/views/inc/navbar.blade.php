<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">{{config('app.name','LaRoots')}}</a>-->
          
      <a><img src="{!! asset('/logo.png') !!}" href="index" height="52" width="112" style="margin-right: 40px"></a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="facuras"><i class='glyphicon glyphicon-list-alt'></i> Facturas</a></li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class='glyphicon glyphicon-list-alt'></i>Clientes
              <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="clientes" >Buscar Clientes</a></li>
                  <li><a data-toggle="modal" data-target="#nuevoCliente" >Nuevo Cliente</a></li> 
                </ul>
            </li>

            <li><a href="menu"><i class='glyphicon glyphicon-th-list'></i> Menu</a></li>
            <li><a href="mesas"><i class='fa fa-cutlery'></i> Mesas</a></li>
            <li><a href="productos"><i class='glyphicon glyphicon-barcode'></i> Productos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
