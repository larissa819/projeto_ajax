  
$(document).ready(function() {
    $('#uf').click(function() {

        var uf = $('#uf').val();

        $.post( 'auxilio.php', 
                {parametro: uf},
                function (dado, status) {
                    $('#resultado').html(dado);
        });
    });
});