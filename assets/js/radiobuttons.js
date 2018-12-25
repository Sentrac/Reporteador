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
$("input:radio[name=fk_grupou]:checked").val(
    
);
/***************************LIMPIAR CAMPOS*********************** */
$("#clean_form").reset();

/************************ALERTAS****************** */
$('#myAlert').on('closed.bs.alert', function () {
    // do something…
  })