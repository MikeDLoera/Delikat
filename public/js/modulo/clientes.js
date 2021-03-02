var idCliente = null;
var row = null;

$(document).ready(function () {
  $("#tabla").DataTable(getLenguage());

  $("#btnGuardarCambios").click(function (e) {
    e.preventDefault();
    setCliente();
  });

  $("#btnAgregar").click(function (e) {
    e.preventDefault();
    clear();
  });

  $("#btnEliminar").click(function (e) {
    e.preventDefault();
    deleteCliente();
  });
});

function setData(e, id) {
  row = $(e).parent().parent();
  idCliente = id;
}

function getCliente(e, id) {
  clear();
  setData(e, id);

  $.ajax({
    type: "GET",
    url: baseUrl("clientes/get/" + id),
    success: function (response) {
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
      correo: $("#correo").val()
    },
    success: function (response) {
      console.log(response);
      if (response.saved) {
        if (idCliente == null) {
          row = $("#tabla tbody tr").clone();
          $(row).find(".id").html(response.data.id);
          $(row).find(".nombre").html(response.data.Nombre);
          $(row).find(".celular").html(response.data.Celular);
          $(row).find(".correo").html(response.data.Correo_Electronico);
          $(row).find(".saldo").html(response.data.Saldo_Electronico);
          $(row).find(".btnEdit button").attr("onclick", "getCliente(this, " + response.data.id + ")");
          $(row).find(".btnDelete button").attr("onclick", "setData(this, " + response.data.id + ")");

          $("#tabla tbody").append("<tr>" + row.html() + "</tr>");
          alertify.message('Cliente creado');

        } else {
          $(row).find(".nombre").html(response.data.Nombre);
          $(row).find(".celular").html(response.data.Celular);
          $(row).find(".correo").html(response.data.Correo_Electronico);
          alertify.message('Cliente editado');
        }

        $("#exampleModal").modal('hide');
        clear();

      } else {
        isValid("#nombre, #celular, #correo");
        response.data.forEach(element => {
          isValid("#" + element.id, false);
        });
      }
    },
  });
}

function deleteCliente() {
  $.ajax({
    type: "POST",
    url: baseUrl("clientes/delete"),
    data: {
      id: idCliente,
    },
    success: function (response) {
      setData(null, null);
      alertify.message('Cliente eliminado');
    },
  });
}

function clear() {
  $("#nombre, #celular, #correo").val("");
  $("#nombre, #celular, #correo").removeClass("is-valid");
  $("#nombre, #celular, #correo").removeClass("is-invalid");
  setData(null, null);
}

function isValid(element, is = true) {
  $(element).removeClass(is ? "is-invalid" : "is-valid");
  $(element).addClass(is ? "is-valid" : "is-invalid");
}