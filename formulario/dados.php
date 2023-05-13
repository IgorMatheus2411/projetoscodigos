<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="stylephp.css">
    <link rel="stylesheet" href="botao.css">
</head>
<body>

    <table>
        <?php 
        
            echo "<h2> OS DADOS INFORMADOS FORAM <br/><br/> </h2>" ;

            $vnome=$_POST["nome"];
            $vemail=$_POST["email"];
            $vtelefone=$_POST["telefone"];
            $vendereco=$_POST["endereco"];
            $valtura=$_POST["altura"];
            $vdata=$_POST["data"];
            $vescolha=$_POST["escolha"];
            $vperiodo=$_POST["periodo"];
            $vobservacao=$_POST["obs"];
            

            // echo "Nome: " .$vnome. "<br/> Email: " .$vemail. "<br/> Altura: " .$valtura."<br/> Data: " .$vdata.
            // "<br/> Escolha: " .$vescolha. "<br/> Periodo: " .$vperiodo. "<br/> Observação: " .$vobservacao. "<br/>";
            
            echo 
            
                '
        
                    
            
                <tr>
                    <td> NOME </td>
                    <td>' .$vnome. '</td>
                </tr>
                <tr>
                    <td> EMAIL </td>
                    <td>'.$vemail.'</td>
                </tr>
                <tr>
                <td> TELEFONE </td>
                <td>' .$vtelefone. '</td>
            
                </tr>
                <tr>
                <td> ENDEREÇO </td>
                <td>' .$vendereco. '</td>
        
                </tr>
                <tr>
                    <td> ALTURA </td>
                    <td>'.$valtura.'</td>
                
                </tr>
                <tr>
                    <td> DATA </td>
                    <td>'.$vdata.'</td>
                
                </tr>
                
                <tr>
                <td> ESCOLHA </td>
                <td>'.$vescolha.'</td>
            
                </tr>

                <tr>
                <td> PERIODO </td>
                <td>'.$vperiodo.'</td>
            
                </tr>

                <tr>
                <td> OBSERVAÇÃO </td>
                <td>'.$vobservacao.'</td>
        
                </tr>

                '


             
            ?>
    </table>

    <div class="mb-3">
        <button type="button" onclick="voltar()" class="btn btn-primary me-3">Voltar</button>
	</div>

    <script>
        function voltar(){
    //window.history.back();
        location.href="form.php";
}
    </script>
</body>
</html>