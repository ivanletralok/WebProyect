if (window.localStorage.getItem('user') == undefined) {
  window.location.href = './login/login.php';
}


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


  $('#estadoNuevoLabel').addClass('active')

  /* closest = buscar  find = mas cercano */

  var pk5 = $(this).closest('tr').find('#estado').html();
  var pk6 = $(this).closest('tr').find('#idColumn').html();


  $('input[name="estadoNuevo"]').val(pk5);
  $('input[name="idDB"]').val(pk6);
})

$(document).on('click', '#botonEditar', function () {


  var estadoNuevo = $('input[name="estadoNuevo"]').val();
  var idDB =  $('input[name="idDB"]').val();

  var dataToSend = {

    estadoNuevo:estadoNuevo,
    idDB:idDB,
  }
console.log(dataToSend)
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
  var TipoUsuario= $('input[name="TipoUsuario"]').val();
  var id_programa = $('input[name="id_programa"]').val();
  var id_Mesa = $('input[name="id_Mesa"]').val();

  var dataToSend = {
    codigo:codigo,
    primerNom:primerNom,
    segundoNom:segundoNom,
    primerAPell:primerAPell,
    segudoAPell:segudoAPell,
    pass:pass,
    estado:estado,
    Rol: Rol,
    TipoUsuario:TipoUsuario,
    id_programa:id_programa,
    id_Mesa:id_Mesa,
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
      var candidato = $('input[name="candidato"]').val("");
      var TipoUsuario = $('input[name="TipoUsuario"]').val("");
      var id_programa = $('input[name="id_programa"]').val("");
      var id_Mesa = $('input[name="id_Mesa"]').val("");
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
  table = document.getElementById("tabless");
  console.log(table)
  tr = table.getElementsByTagName("tr");
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


  $('#myInput').keyup(function () {
    searchInput();
  })



  //CERRAR sessionStorage

  $(document).on('click','.cerrarS',function(){
    window.localStorage.removeItem('user');
    window.location.href= "../app/login/login.php";
  })


  // $(document).on('click','#estado5',function(){

  //   let suma = 0;
  //   console.log(suma)

  //   $.ajax({
  //    method: 'POST',
  //    url: '../app/actualizarVotante.php',
  //    data: {suma:suma},
  //    success : function(){
  //      updateTable();
  //    }
  //  })

  // })


  $(document).on('click', '.imprimir', function (e) {
    e.preventDefault();
    var esta = $(this).closest('tr').find('#estado').html();
    $('input[name="estado"]').val(esta);
    console.log(esta)
    if(esta == 4){
      window.location.href = '/WebProject/app/certificado_jurado.php'
    }
  });
