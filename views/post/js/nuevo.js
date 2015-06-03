
    $(document).ready(function(){
        $('#form1').validate({
            rules:{
                titulo:{
                    required:true
                },
                cuerpo:{
                    required:true
                }
            },
            messages:{
                titulo:{
                    required:'debe introducir el titulo del post'
                },
                cuerpo:{
                    required:'debe introducir el cuerpo del post'
                }
            }
        });
    });
