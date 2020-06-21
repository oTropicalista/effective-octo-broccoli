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
  <!-- Modal de criação de paciente-->
  <div class="modal" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalLongoExemplo">Cadastro de Paciente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="margin-left:25px; margin-right:-171px;">
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
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Salvar paciente</button>
        </div>
      </div>
    </div>
  </div>

    <?php include "header.php"; ?>
        <div class="container">
            <div class="form-row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Nova implantação</h2>
                    </div>
                    <h4>Dados implantação</h4>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Número</label>
                            <input type="text" name="nome" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleFormControlSelect1">Tipo de implantação</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Enfermagem 24h</option>
                            <option>Enfermagem 12h</option>
                            <option>Enfermagem 8h</option>
                            <option>Enfermagem 6h</option>
                            <option>Procedimento</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Cliente</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Bem Estar</option>
                              <option>Star Care</option>
                              <option>Saude em Casa</option>
                              <option>Home cuidados</option>
                              <option>Home Estar</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Paciente</label>
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option> </option>
                                <option>Star Care</option>
                                <option>Saude em Casa</option>
                                <option>Home cuidados</option>
                                <option>Home Estar</option>
                              </select>
                        </div>
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalExemplo">Novo</button>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Histórico de Solicitação</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>implantação em</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" style="width:61%;" placeholder="__/__/____">
                        </div>
                        <div class="form-group col-md-1">
                            <label>Horário</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" placeholder="__:__">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Data fim:</label>
                            <input type="text" name="regiao" class="form-control" value="" maxlength="12" required="" style="width:61%;" placeholder="__/__/____">
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Quadro Clínico</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Proposta Terapêutica</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <h4>Observações de fechamento</h4>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Observação</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <p><b>Sexo</b></p>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                          <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                          <label class="form-check-label" for="inlineRadio2">Feminino</label>
                        </div>
                        <br>
                        <div class="form-row">
                          <div class="form-group col-md-1">
                              <label>Idade de</label>
                              <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" placeholder="__/__/____">
                          </div>
                          <div class="form-group col-md-1">
                              <label>Até</label>
                              <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" placeholder="__:__">
                          </div>
                        </div>
                        <p><b>Restrição de dias:</b></p>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
                          <label class="form-check-label" for="inlineCheckbox1">Dom</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Seg</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Ter</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Qua</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Qui</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Sex</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                          <label class="form-check-label" for="inlineCheckbox2">Sab</label>
                        </div>
                        <div class="form-group ">
                            <label>Setor</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Bem Estar</option>
                              <option>Star Care</option>
                              <option>Saude em Casa</option>
                              <option>Home cuidados</option>
                              <option>Home Estar</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label>Monitorar paciente</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" style="width:35%;">
                        </div>
                        <div class="form-group ">
                            <label>Possui Liminar?</label>
                            <input type="text" name="bairro" class="form-control" value="" maxlength="30" required="" style="width:35%;">
                        </div>

                        <input type="submit" class="btn btn-primary" name="Salvar" value="submit">
                        <a href="pac_index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>

            </div>

        </div>

</body>
</html>
