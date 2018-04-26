$('.modal').modal();

function updateTable(){
  $.ajax({
    method: 'POST',
    url: '../app/lecturaVotantes.php',
    success: function(data, textStatus, jqXHR){
      $('#tableData').html(data)
    }
  })
}
updateTable();

/*
* Editar
*
*/
$(document).on('click', '.editarIcon', function () {

  $('#modal2').modal('open');

  $('#codigoLabel').addClass('active')
  $('#primernombreNuevoLabel').addClass('active')
  $('#segundonombreNuevoLabel').addClass('active')
  $('#primerapellidoNuevoLabel').addClass('active')
  $('#segundoapellidoNuevoLabel').addClass('active')
  $('#estadoNuevoLabel').addClass('active')

  /* closest = buscar  find = mas cercano */
  var pk7  = $(this).closest('tr').find('#codigos').html();
  var pk1 = $(this).closest('tr').find('#nombre1').html();
  var pk2 = $(this).closest('tr').find('#nombre2').html();
  var pk3 = $(this).closest('tr').find('#apellido1').html();
  var pk4 = $(this).closest('tr').find('#apellido2').html();
  var pk5 = $(this).closest('tr').find('#estado').html();
  var pk6 = $(this).closest('tr').find('#idColumn').html();

  
  $('input[name="codigoNuevo"]').val(pk7);
  $('input[name="primernombreNuevo"]').val(pk1);
  $('input[name="segundonombreNuevo"]').val(pk2);
  $('input[name="primerapellidoNuevo"]').val(pk3);
  $('input[name="segundoapellidoNuevo"]').val(pk4);
  $('input[name="estadoNuevo"]').val(pk5);
  $('input[name="idDB"]').val(pk6);
})

$(document).on('click', '#botonEditar', function () {

  var codigoNuevo = $('input[name="codigoNuevo"]').val();
  var primernombreNuevo = $('input[name="primernombreNuevo"]').val();
  var segundonombreNuevo = $('input[name="segundonombreNuevo"]').val();
  var primerapellidoNuevo = $('input[name="primerapellidoNuevo"]').val();
  var segundoapellidoNuevo = $('input[name="segundoapellidoNuevo"]').val();
  var estadoNuevo = $('input[name="estadoNuevo"]').val();
  var idDB =  $('input[name="idDB"]').val();

  var dataToSend = {

    codigoNuevo:codigoNuevo,
    primernombreNuevo:primernombreNuevo,
    segundonombreNuevo:segundonombreNuevo,
    primerapellidoNuevo:primerapellidoNuevo,
    segundoapellidoNuevo:segundoapellidoNuevo,
    estadoNuevo:estadoNuevo,
    idDB:idDB,
  }

  $.ajax({
    method: 'POST',
    url: '../app/actualizarVotante.php',
    data: dataToSend,
    success : function(){
      updateTable();
    }
  })

});

///////////////////////////////////////////////////////////////////////////////////////

/*
* 
* Eliminar
*
*/
$(document).on('click', '.borrarIcon', function () {
  var pk1 = $(this).closest('tr').find('#idColumn').html();

  swal({
    title: "Seguro que Desea Eliminar?",
    text: "",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        method: 'POST',
        url: '../app/eliminarVotante.php',
        data: {idEliminar: pk1},
        success : function(){
          updateTable();
        }
      })
      swal("Poof! Eliminado Con Exito", {
        icon: "success",
        
      });
    } else {
      swal("Ha Cancelado la Eliminacion");
    }
  });
})
//////////////////////////////////////////////////////
/*
* _insertar
*
*/

$(document).on('click','#insertIcon',function(){
  $('#modal3').modal('open');
})

$(document).on('click', '#InsertDato', function () {

  var codigo = $('input[name="codigo"]').val();
  var primerNom = $('input[name="primerNom"]').val();
  var segundoNom = $('input[name="segundoNom"]').val();
  var primerAPell = $('input[name="primerAPell"]').val();
  var segudoAPell = $('input[name="segudoAPell"]').val();
  var pass = $('input[name="pass"]').val();
  var estado =  $('input[name="estado"]').val();
  var Rol =  $('input[name="Rol"]').val();

  var dataToSend = {
    codigo:codigo,
    primerNom:primerNom,
    segundoNom:segundoNom,
    primerAPell:primerAPell,
    segudoAPell:segudoAPell,
    pass:pass,
    estado:estado,
    Rol: Rol,
  }

  $.ajax({
    method: 'POST',
    url: '../app/insertarVotante.php',
    data: dataToSend,
    success : function(){
      updateTable();
      
      var codigo = $('input[name="codigo"]').val("");
      var primerNom = $('input[name="primerNom"]').val("");
      var segundoNom = $('input[name="segundoNom"]').val("");
      var primerAPell = $('input[name="primerAPell"]').val("");
      var segudoAPell = $('input[name="segudoAPell"]').val("");
      var pass = $('input[name="pass"]').val("");
      var estado =  $('input[name="estado"]').val("");
      var Rol =  $('input[name="Rol"]').val("");
      swal("Guarado con exito", "", "success");
      
    }
  })
  
  



});



//
//**buscar */
//
//

function searchInput() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
      }
  }
}


  $('#myInput').keyup(function () {
    searchInput();
  })



