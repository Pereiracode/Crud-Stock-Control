<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        #tamanho{
            -webkit-box-shadow: 10px 10px 5px -2px rgba(163,158,163,0.32);
            -moz-box-shadow: 10px 10px 5px -2px rgba(163,158,163,0.32);
            box-shadow: 10px 10px 5px -2px rgba(163,158,163,0.32);
        }
            
        
    </style>
</head>
<body>

<div class="container" id="tamanho" style="width:350px; margin-top:100px;border-radius:15px; border:2px solid #f3f3f3">
    <div style="padding:15px">
    <center>
        <img src="img/cadeado.png" width="125px" heigth="125px" alt="Logo_login">
    </center>

    <form action="" method="post">
        <div class="form-group">
            <label >Usuário:</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label >Senha:</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>
    </form>

    <div style="text-align:right">
        <button type="submit" class="btn btn-sm btn-success">Entrar</button>
    </div>

    </div>
</div>

<div style="margin-top:10px">
    <center>
            <small>Você não possui cadastro? <a href="cadastro_usuario_externo.php">Clique aqui</a></small>
    </center>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>