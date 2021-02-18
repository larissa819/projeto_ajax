<?php
	include("inc/conexao.inc");
	
    $aux = $_POST['parametro'];
    
    $select =   "<div class=\"form-group\">
                    <label>Cidade:</label>
                        <select class=\"form-control\" name=\"cidade\" id=\"cidade\">
                            <option selected>Escolha sua cidade</option>";
	
	if($aux != "") {
		
		$SQL = "SELECT id, nome FROM cidades WHERE id_estado = '$aux%'";

        $resultado = mysqli_query($con, $SQL);			
	
		while(($salvo = mysqli_fetch_assoc($resultado)) != NULL) {
            $select .= '<option value="'.$salvo['id'].'">'.$salvo['nome'].'</option>';
		}
	}
    
    $select .= "    </select>
                </div>";
    echo $select;
	mysqli_close($con);
    
?>