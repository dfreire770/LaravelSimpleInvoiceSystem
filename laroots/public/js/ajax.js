$(document).on('click','.open_modal',function(){

    var url = "http://localhost/laroots/public/clientes";
    

    
    var idcliente = $(this).val();

    console.log(idcliente);

    
    
    /*$.get(url + '/' + idcliente, function (data) {
        //success data
        console.log(data);
        $('#idcliente').val(data.id);
        $('#nombreCliente').val(data.nombreCliente);
        $('#cedulaCliente').val(data.cedulaCliente);
        $('#telefonoCliente').val(data.telefonoCliente);
        $('#direccionCliente').val(data.direccionCliente);
        $('#estadoCliente').val(data.estadoCliente);
        $('#btn-save').val("update");
        $('#editarCliente').modal('show');
    }) */
});