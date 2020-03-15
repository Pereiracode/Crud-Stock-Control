<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            #tamanhoContainer{
                width:500px;
            }
            #botao{
                background-color:#FF1168;
                color:#fff;
            }
        </style>
    

        <meta charset="utf-8"/>
        <title>Formulário de cadastro</title>
    </head>
    <body>
    <div class="container" id="tamanhoContainer" style="margin-top:40px">
            <h4>Formulário de Cadastro</h4>
        <form style="margin-top : 20px;" action="_inserir_produto.php" method="post">
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required>
                
                </div>
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
                
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade do Produto</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto"  required>
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>                    
                    </select>
                </div>
                <div style="text-align : right;">
                    <button id="botao" type="submit" class="btn btn-sm">Cadastrar</button>        
                </div>
                
        </form>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>