//scrip para los tarejtones
$(document).ready(function () {
  var seleccionados = [];
  var cantidad = 0;
  $('.modal').modal();

  var mesa = 100;
  var seleccionar = false;
  var selecc;

  $(document).on('click', '.candidat', function (e) {
    selecc = $(this).find('p')[0].textContent;
    $('.candidat').removeClass('candidatoSeleccionado');
    $(this).addClass('candidatoSeleccionado');
  });

  $(document).on('click', '#seleccionar', function () {
    seleccionados.push(selecc);
    console.log("seleccionado" + " cantidad->" + cantidad)
    console.log(seleccionados);
    $('#modal10').modal('close');
    $('#modal11').modal('close');
    $('#modal12').modal('close');
    $('#modal13').modal('close');
  })

  $(document).on('click', '#votar', function (e) {

    swal({
      title: "Seguro Que Desea Votar?",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
          console.log(seleccionados);
          if (cantidad == 4) {
            $.post('setVotos.php', { datos: [seleccionados, mesa] }, function (datos) {
              console.log(datos);
            });
          }
          swal("Poof! Voto Exitoso!", {
            icon: "success",
          });

          $('.modal').modal('close');
        } else {
          swal("Votacion Cancelada!");
        }
      });
  });

  $('#consejoS').on('click', function () {
    seleccionar = true;
    cantidad++;

    let divs = $("#modal10 .candidat");
    let x = 0;
    $.post('getCandidatos.php', { organo: 1 }, function (datos) {
      datos = $.parseJSON(datos);
      for (let div of divs) {
        $(div).html('');
        $(div).append(`
            <img src="${datos[x].foto}">
            <p id="nombre">${datos[x].id_candidato}</p>
          `);
        x++;
      }
      $('#modal10').modal('open');
    });

  })



  $(document).on('click', '#consejoA', function () {
    seleccionar = true;
    cantidad++;
    let divs = $("#modal11 .candidat");
    let x = 0;
    $.post('getCandidatos.php', { organo: 2 }, function (datos) {
      datos = $.parseJSON(datos);
      for (let div of divs) {
        $(div).html('');
        $(div).append(`
            <img src="${datos[x].foto}">
            <p id="nombre">${datos[x].id_candidato}</p>
          `);
        x++;
      }
      $('#modal11').modal('open');
    });
  })

  $('#consejoP').on('click', function () {
    seleccionar = true;
    cantidad++;
    $('#modal12').modal('open');

    let divs = $("#modal12 .candidat");
    let x = 0;
    $.post('getCandidatos.php', { organo: 3 }, function (datos) {
      datos = $.parseJSON(datos);
      for (let div of divs) {
        $(div).html('');
        $(div).append(`
            <img src="${datos[x].foto}">
            <p id="nombre">${datos[x].id_candidato}</p>
          `);
        x++;
      }
      $('#modal12').modal('open');
    });

  })

  $(document).on('click', '#consejoF', function () {
    seleccionar = true;
    cantidad++;
    $('#modal13').modal('open');

    let divs = $("#modal13 .candidat");
    let x = 0;
    $.post('getCandidatos.php', { organo: 4 }, function (datos) {
      datos = $.parseJSON(datos);
      for (let div of divs) {
        $(div).html('');
        $(div).append(`
            <img src="${datos[x].foto}">
            <p id="nombre">${datos[x].id_candidato}</p>
          `);
        x++;
      }
      $('#modal13').modal('open');
    });

  })

  $(document).on('click', '#btnImprimir', function (e) {
    e.preventDefault();
    imprimir();
  });

  $(document).on('click', '#btnCorreo', function (e) {
    e.preventDefault();
    correo();
  });

  // document.addEventListener('keydown', function (e) {
  //   e.preventDefault();
  //   if (e.ctrlKey && e.key === 'p') {
  //     imprimir();
  //   }
  // });

})

function correo() {
  emailjs.init("user_M1Hieqo8Ks2Ybkqaz0Ned");
  let usuario = $.parseJSON(window.localStorage.getItem('user'));
  let idServicio = 'gmail';
  let idTemplate = 'certificado';
  let fecha = new Date();
  let anio = fecha.getFullYear();
  let mes = fecha.getMonth() + 1;
  let dia = fecha.getDate();
  fecha = anio + "/" + mes + "/" + dia;
  emailjs.send(idServicio, idTemplate, 
    {
      cedula:usuario.codigo,
      nombre:usuario.nombre1 + " " + usuario.nombre2,
      apellido:usuario.apellido1 + " " + usuario.apellido2,
      mesa:usuario.id_mesa,
      fecha:fecha
    })
    .then(function (response) {
      console.log("Correo enviado");
    }, function (err) {
      console.log("Error al enviar correo");
    });
}

function imprimir() {
  let contenido = document.getElementById('certificado').innerHTML;
  let original = document.body.innerHTML;
  document.body.innerHTML = contenido;
  window.print();
  document.body.innerHTML = original;
}

function certificado() {
  let usuario = $.parseJSON(window.localStorage.getItem('user'));
  let cedula = $("#cedula");
  let nombre = $("#nombre");
  let apellido = $("#apellido");
  let mesa = $("#mesa");
  cedula.text(usuario.codigo);
  nombre.text(usuario.nombre1 + " " + usuario.nombre2);
  apellido.text(usuario.apellido1 + " " + usuario.apellido2);
  mesa.text(usuario.id_mesa);
}

