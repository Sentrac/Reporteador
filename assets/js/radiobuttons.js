$("input[type='radio']").change(function(){
   
    if($(this).val()=="SU")
    {
        $("#grupo_default").show();
        $("#grupo_todos").hide();
    }
    if($(this).val()=="AD")
    {
        $("#grupo_todos").show();
        $("#grupo_default").hide();
    }
    if($(this).val()=="CO")
    {
        $("#grupo_todos").show();
        $("#grupo_default").hide();
    }
   
});
/************************ALERTAS****************** */
$('#myAlert').on('closed.bs.alert', function () {
    // do something…
  })