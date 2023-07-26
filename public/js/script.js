$(document).ready(function(){  
    setTimeout(() => {
        $('.alert').alert('close');
    }, 3000);  

    $('#criar_jogos #valor').maskMoney({
        decimal: ",",
        thousands: "."
    });

    $('#contato #contato_celular').mask('(00) 00000-0000');

    $('#editar_perfil .pass_edit').hide();
    $('#editar_perfil .pass_edit').first().show();    

    $('#editar_perfil .pass_edit').click(function(){
        if($('#editar_perfil #password').attr('type') == 'password'){
            $('#editar_perfil #password').attr('type', 'text');
            $('#editar_perfil #pass_show').hide();
            $('#editar_perfil #pass_hide').show();
        }else {
            $('#editar_perfil #password').attr('type', 'password');
            $('#editar_perfil #pass_show').show();
            $('#editar_perfil #pass_hide').hide();
        }
    });  
    
    $('.ver_senha').hide();
    $('.ver_senha').first().show();

    $('.ver_senha').click(function(){   
        if($('#login_view input[name=password]').attr('type') == 'password'){
            $('#login_view input[name=password]').attr('type', 'text');
            $('#senha_nao').show();
            $('#senha_sim').hide();
        }else{
            $('#login_view input[name=password]').attr('type', 'password');
            $('#senha_nao').hide();
            $('#senha_sim').show();
        }
    });
});