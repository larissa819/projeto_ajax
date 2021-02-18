<?php
    include("conexao.inc");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto ajax/title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.js"></script>
    </head>
    <body>        
                <?php
                    include "inc/cabecalho.inc";
                    include "inc/conexao.inc";

                    $SQL = "SELECT * FROM estados";

                    $resultado = mysqli_query($con, $SQL);

                    if(mysqli_num_rows($resultado) > 0){
                        echo'<select class="form-control" name="uf" id="uf">
                                <option selected>Estado:</option>';
                            
                        while( ($salvo = mysqli_fetch_assoc($resultado)) != null) {
                                
                            echo '<option value="'.$salvo['id'].'">'.$salvo['nome'].'</option>';
                        }
                            echo '</select>';
                    }

                    mysqli_close($con);
                    include "inc/rodape.inc";       
                ?>
        <script src="js/arquivo.js"></script>
    </body>
</html>