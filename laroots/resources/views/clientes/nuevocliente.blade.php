<div id="nuevoCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

		<form method="post">
        {{csrf_field()}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Cliente</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
					<label for="nombreCliente">Nombre:</label>
					<input type="text" class="form-control" name="nombreCliente">
				</div>
				<div class="form-group">
					<label for="cedulaCliente">Cédula:</label>
					<input type="text" class="form-control" name="cedulaCliente">
				</div>
				<div class="form-group">
					<label for="telefonoCliente">Teléfono:</label>
					<input type="text" class="form-control" name="telefonoCliente">
				</div>
				<div class="form-group">
					<label for="direccionCliente">Dirección:</label>
					<input type="text" class="form-control" name="direccionCliente">
				</div>
				<div class="form-group">
					<label for="emailCliente">Email:</label>
					<input type="text" class="form-control" name="emailCliente">
				</div>
				
			</form>

      </div>
      <div class="modal-footer">
				<button type="submit" class="btn btn-default">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		
      </div>
    </div>
		</form>

  </div>
</div>