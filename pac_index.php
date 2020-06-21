<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Escala - Pacientes</title>
<?php include "head.php"; ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
  <?php include "header.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <!--<h2 class="pull-left">Pacientes</h2>
                        <a href="pac_create.php" class="btn btn-success pull-right">Novo paciente</a> -->
                        <form class="form-inline">
                          <div class="form-group col-md-8">
                            <h2>Pacientes</h2>
                          </div>
                          <div class="form-group col-md-3">
                            <input type="nome" class="form-control" id="inputEmail4" placeholder="Pesquisar" align="left">
                          </div>
                          <div class="form-group col-md-1">
                            <a href="pac_create.php" class="btn btn-success pull-right">Novo paciente</a>
                          </div>
                        </form>
                    </div>
                   <?php
                    include_once 'connection.php';
                    $result = mysqli_query($conn,"SELECT * FROM pacientes");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>

                      <tr>
                        <td>Nome</td>
                        <td>Bairro</td>
                        <td>Região</td>
                        <td>Ações</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["nome"]; ?></td>
                        <td><?php echo $row["bairro"]; ?></td>
                        <td><?php echo ($row["regiao"])?($row["regiao"]):('N/A'); ?></td>
                        <td><a href="pac_update.php?id=<?php echo $row["id"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href="pac_delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "Nenhum paciente encontrado";
                    }
                    ?>

                </div>
            </div>
        </div>

</body>
</html>
