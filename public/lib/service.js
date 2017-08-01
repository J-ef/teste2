$(function(){

    $("#efetuarLogin").click(function(){

            var dados = $('#formLogin').serialize();

            $.ajax({
                url: "/auth/login",
                type:"POST",
                data: dados,
                contentType: "application/x-www-form-urlencoded;charset=UTF-8"
            }).done(function(result) {

                alert(result);

            }).fail(function(jqXHR,textStatus,errorThrown){
             console.log(errorThrown);
        })
    });

});

/**
 * Created by Jef on 04/05/2017.
 */
