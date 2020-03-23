<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/362ff39427.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Listagem de produtos</title>
</head>
<body>

<div class="container" style="margin-top:40px; width:500px;">
    <div class="container" style="text-align:right;">
        <a href="index.php" class="btn btn-primary btn-sm">Voltar</a>
    </div>
<h3>Lista de Fornecedores</h3>
<br/>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  
    
        <?php
            include 'conexao.php';
            $sql = "select * from fornecedor";
            $busca = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($busca)){
                $id_forn = $array['id_forn'];
                $nomeforn = $array['nome_forn'];
                
        ?>

    <tr>

        <td><?php echo $nomeforn ?></td>


        <td><a class="btn btn-warning btn-sm" style="color:#fff;" href="editar_fornecedor.php?id=<?php echo $id_forn?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:#fff;" href="deletar_fornecedor.php?id=<?php echo $id_forn?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
        <?php } ?>

    </tr> 
    
  </tbody>
</table>



</div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>