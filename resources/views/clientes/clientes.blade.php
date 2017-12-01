@extends('layouts.app')

@section('content')

<main>

	<div class="container">

		<div class="jumbotron">
			<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<form method="get" action="ClientesController::show('1','1')">
						<label>Clientes</label>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar clientes">
							
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtrar <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a>Nombre</a></li>
									<li><a>Cédula</a></li>
									<li><a>Teléfono</a></li>
								</ul>
							</div>
							
							<span class="input-group-btn">
								<input class="btn btn-default" type="button" value="Buscar">
							</span>

						</div><!-- /input-group -->
					</form>
				</div><!-- /.col-lg-12 -->
				</div>
			</div>
		</div>
		@include('clientes.buscarcliente')
	</div>
	<div class="container">
		@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
			@if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
	</div>
</main>

@endsection

<!--<script>
$('.editarCliente').on('click', function () {
    $('#modal-editarCliente').attr('action', $(this).data('delete-link'));
});
</script>-->