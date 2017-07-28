$(function(){

        $("#efetuarLogin").click(function(){

            var dados = $('#formLogin').serialize();

            $.ajax({
                url: "/auth/login",
                type:"POST",
                data: dados,
                dataType: "JSON"
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
