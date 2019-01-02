$("input[type='radio']").change(function(){
    console.log("LEIDO"); 
    var variable=document.getElementById('todos').value;
    var g=document.getElementById('grupos').value;

    if($(this).val()=="SU")
    {
        $("#grupo_default").show();
        $("#grupo_todos").hide();
        console.log(variable);
    }
    
    if($(this).val()=="AD")
    {
        $("#grupo_todos").show();
        $("#grupo_default").hide();
        console.log(g);
    }
    if($(this).val()=="CO")
    {
        $("#grupo_todos").show();
        $("#grupo_default").hide();
        console.log(g);
    }
});


/*********************EDITAR USUARIOS RADIO BUTTONS*************** */
/***************************LIMPIAR CAMPOS*********************** */

$(document).ready(function(){
    $('form[name=form]').on('submit', function() {
          //other code
          $('input[name=nombre]').val("")
          $('input[name=apellidos]').val("")
          $('input[name=telefono]').val("")
          $('input[name=email]').val("")
          $('input[name=usuario]').val("")
          $('input[name=tipo_usuario]').val("")
          $('input[name=pass]').val("")
          $('input[name=repeat_pswd]').val("")
        });
});

/************************ALERTAS****************** */
$('#myAlert').on('closed.bs.alert', function () {
    // do something…
  })
/*****************MODALES************************* */
$('#btn-modal').on('shown.bs.modal', function () {
    $('#modal').trigger('focus')
  })