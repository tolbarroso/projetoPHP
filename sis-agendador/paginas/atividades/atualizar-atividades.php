<header>
    <h3>Atualizar Atividades</h3>
    </header>
    
    <?php
    $idAtividades = mysqli_real_escape_string($conexao,$_POST["idAtividades"]);
    $nomeAtividades = mysqli_real_escape_string($conexao,$_POST["nomeAtividades"]);
    $descricaoAtividades = mysqli_real_escape_string($conexao,$_POST["descricaoAtividades"]);
    $statusAtividades = mysqli_real_escape_string($conexao,$_POST["statusAtividades"]);
    $dataAtividade = mysqli_real_escape_string($conexao,$_POST["dataAtividade"]);
    $horaInicio = mysqli_real_escape_string($conexao,$_POST["horaInicio"]);
    $horaFim = mysqli_real_escape_string($conexao,$_POST["horaFim"]);
    $sql = "UPDATE tbatividades SET
    nomeAtividades = '{$nomeAtividades}',
    descricaoAtividades = '{$descricaoAtividades}'
    statusAtividades = '{$statusAtividades}'
    dataAtividade = '{$dataAtividade}'
    horaInicio = '{$horaInicio}'
    horaFim = '{$horaFim}'
    WHERE idAtividades = '{$idAtividades}'
    ";

        $rs = mysqli_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA" . mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso!"

    ?>