<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th colspan="1"><i class="fa fa-cogs" aria-hidden="true"></i></th>
    </tr>
    </thead>
    <tbody>
      @foreach($clientes as $cliente)
      
        @include('clientes.editarcliente')
      <tr id="{{$cliente}}">
        <td>{{$cliente['idCliente']}}</td>
        <td>{{$cliente['nombreCliente']}}</td>
        <td>{{$cliente['cedulaCliente']}}</td>
        <td>{{$cliente['telefonoCliente']}}</td>
        <td>{{$cliente['direccionCliente']}}</td>
        <!--data-target="#editarcliente{{ $cliente->idCliente }}"-->

       <td><a class="btn btn-warning open_modal" data-toggle="modal" value="{{$cliente->idCliente}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
         <form action="{{action('ClientesController@destroy', $cliente['idCliente'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>
        </td>
        
      </tr>

      @endforeach
    </tbody>
  </table>
  
  <center>{{$clientes->links()}}</center>