<?php
require_once "connection.php";

if(isset($_POST['save']))
{

     $nome = $_POST['nome'];
     $bairro = $_POST['bairro'];
     $regiao = $_POST['regiao'];
     $sql = "INSERT INTO pacientes (nome,bairro,regiao)
     VALUES ('$nome','$bairro','$regiao')";
     if (mysqli_query($conn, $sql)) {
        header("location: pac_index.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Paciente</title>
    <?php include "head.php"; ?>
</head>
<body>
    <?php include "header.php"; ?>
        <div class="container">
            <div class="form-row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Novo paciente</h2>
                    </div>
                    <!--<div class="modal-body" style="margin-left:8mm; margin-right:-54mm;">-->
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <h4>Dados Pessoais</h4>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input type="nome" class="form-control" id="inputEmail4" placeholder="Nome">
                          </div>
                          <div class="form-group col-md-6">
                            <p><b>Sexo</b></p>
                            <!--<div class="form-check form-radio-inline">
                              <input class="form-check-input" type="radio" id="inlineRadioMasc" value="opMasc">
                              <label class="form-check-label" for="inlineRadioMasc">Masculino</label>
                            </div>
                            <div class="form-check form-radio-inline">
                              <input class="form-check-input" type="radio" id="inlineRadioFem" value="opFem">
                              <label class="form-check-label" for="inlineRadioFem">Feminino</label>
                            </div>-->
                            <label class="radio-inline"><input type="radio" name="opRadioMasc" checked>Masculino</label>
                            <label class="radio-inline"><input type="radio" name="opRadioFem">Feminino</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="inputCity">RG</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputEstado">CPF</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputCEP">Data Nasc</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" placeholder="__/__/____">
                          </div>
                          <div class="form-group col-md-3">

                          </div>
                        </div>
                        <h4>Endereço</h4>
                        <div class="form-row">
                          <div class="form-group col-md-3">
                            <label for="inputCity">CEP</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputCity">UF</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputBairro">Bairro</label>
                            <input type="text" class="form-control" id="inputBairro">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputBairro">Região</label>
                            <input type="text" class="form-control" id="inputRegiao">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputBairro">Logradouro</label>
                            <input type="text" class="form-control" id="inputLogradouro">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputBairro">Complemento</label>
                            <input type="text" class="form-control" id="inputComplemento">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-9">
                            <label for="exampleFormControlTextarea1">Referência de Acesso</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>
                        <h4>Internação</h4>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputBairro">Convênio</label>
                            <input type="text" class="form-control" id="inputLogradouro">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="inputBairro">Plano</label>
                            <input type="text" class="form-control" id="inputLogradouro">
                          </div>
                          <div class="form-group col-md-2">
                            <label for="inputBairro">Matrícula</label>
                            <input type="text" class="form-control" id="inputLogradouro">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-2">
                            <label for="inputCEP">Validade</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" placeholder="__/__/____">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputBairro">Nome da mãe</label>
                            <input type="text" class="form-control" id="inputLogradouro">
                          </div>
                          <div class="form-group col-md-6">
                            <p><b>Possui liminar?</b></p>
                            <label class="radio-inline"><input type="radio" name="opRadioMasc">Sim</label>
                            <label class="radio-inline"><input type="radio" name="opRadioFem">Não</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputNome">Cuidador</label>
                            <input type="nome" class="form-control" id="inputEmail4">
                          </div>
                          <div class="form-group col-md-6">
                            <p><b>Monitorar paciente?</b></p>
                            <label class="radio-inline"><input type="radio" name="opRadioMasc">Sim</label>
                            <label class="radio-inline"><input type="radio" name="opRadioFem">Não</label>
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="Salvar" value="submit">
                        <a href="pac_index.php" class="btn btn-default">Cancelar</a>
                      </form>
                      <br><br><br><br>
                </div>

            </div>

        </div>

</body>
</html>
