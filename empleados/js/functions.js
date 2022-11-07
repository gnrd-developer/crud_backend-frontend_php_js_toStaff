$(document).ready(function() {

    if( $('#btnSearch').length )
    {
        $('#btnSearch').click(function(){

            const id= $('#txtSearch').val();
            const action = 'searchContact';
            var dataContact = "";
            $.ajax({
                url : 'ajaxData.php',
                type: "POST",
                async : true,
                data: {
                    action:action,
                    id:id
                },
                beforeSend: function(){

                },
                success: function(response)
                {
                    console.log(response)//antes de convertir a un obgeto el response, validaré de la siguiente forma:

                    if(response == 'notData'){
                        dataContact = "No hay Datos";//notese como la variable dataContact esta declara en la parte superior.
                    }else{
                        var info = JSON.parse(response);//creo que aqui se convierte a un obgeto el response.
                        $('#id').html(info.id);
                        $('#rut').html(info.rut);
                        $('#nombre').html(info.nombre);
                        $('#cargo').html(info.cargo);
                        $('#pais_nacimiento').html(info.pais_nacimiento);
                        $('#hrs_inasistencia').html(info.hrs_inasistencia);
                        $('#sueldo_base').html(info.sueldo_base);
                        $('#tipo_cuenta_banco').html(info.tipo_cuenta_banco);
                        $('#num_depos_cuenta').html(info.num_depos_cuenta);
                        $('#nom_banco').html(info.nom_banco);
                        $('#valor_afp').html(info.valor_afp);
                        $('#valor_fonasa').html(info.valor_fonasa);
                        $('#calle_avenida').html(info.calle_avenida);
                        $('#num_casa_dep').html(info.num_casa_dep);
                        $('#comuna').html(info.comuna);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        });
    }

    if( $('#txtSearch').length ){

        $('#txtSearch').keyup(function(){
            const dataSearch = $('#txtSearch').val();
            const action = 'searchContactKey';
            console.log(dataSearch);
            var dataContact = '';
            $.ajax({
                url : 'ajaxData.php',
                type: "POST",
                async : true,
                data: {
                    action:action,
                    dataSearch:dataSearch
                },
                //data: $('#formRegister').serialize().
                beforeSend: function(){  
                },
                success: function(response)
                {
                    console.log(response);
                    if(response == 'notData'){
                        dataContact = "No hay Datos";
                    }else{
                        var info = JSON.parse(response);
                        dataContact = info;
                    }
                    $('#rowsContact').html(dataContact);
                },
                error: function(error){
                }
            });
        });
    }

    if($('#tblContact').length)
    {
        fntContactos();
    }

});//al momento que se cargue todo el index.php se cargara esta funcion

function fntContactos(){
    const action = 'listContact';
    const data = '';
    $.ajax({
        url : 'ajaxData.php',
        type: "POST",
        async : true,
        data: {
            action:action
        },
        beforeSend: function(){
        },
        success: function(response)
        {
            if(response == 'notData')
            {
                data = "No hay datos para mostrar";
            }else{
                var data = JSON.parse(response);
            }
            $('#rowsContact').html(data);
        },
        error: function(error){
        }
    });
}
