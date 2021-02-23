var idCliente = null;

$(document).ready(function () {
  $("#btnGuardarCambios").click(function (e) {
    e.preventDefault();
    setCliente();
  });

  $("#btnAgregar").click(function (e) {
    e.preventDefault();
    clear();
    idCliente = null;
  });

  $("#btnEliminar").click(function (e) { 
      e.preventDefault();
      deleteCliente();
  });
});

function setId(id){
    idCliente = id;
}

function getCliente(id) {
  idCliente = id;
  clear();
  $.ajax({
    type: "GET",
    url: baseUrl("clientes/get/" + id),
    success: function (response) {
      console.log(response);
      if (response != false) {
        $("#nombre").val(response.Nombre);
        $("#celular").val(response.Celular);
        $("#correo").val(response.Correo_Electronico);
      }
    },
  });
}

function setCliente() {
  $.ajax({
    type: "POST",
    url: baseUrl("clientes/set"),
    data: {
      id: idCliente,
      nombre: $("#nombre").val(),
      celular: $("#celular").val(),
      correo: $("#correo").val(),
    },
    success: function (response) {
      console.log(response);
    },
  });
}

function deleteCliente() {
    $.ajax({
        type: "POST",
        url: baseUrl('cliente/delete'),
        data: {
            'id': idCliente
        },
        success: function (response) {
            console.log(response);
        }
    });
}

function clear(){
    $("#nombre").val('');
    $("#celular").val('');
    $("#correo").val('');
}
