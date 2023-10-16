<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php 
            require('style.css')
        ?>
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="PetShop-Box">
                <a href="/">
                    <h1 class="Logo">Petshop</h1>
                </a>
            </div>
            <div class="parent-link">
                <a href="/produto/cadastro" class="social-links">Cadastro Produto</a>
                <a href="/produto/venda" class="social-links">Vendas Produto</a>
                <a href="/produto/servico" class="social-links">Serviços</a>
            </div>
        </nav>
    </header>
    <div class="form">
        <form action="" class="sub-form">
            <h2>Cadastrar Proprietário</h2>
            <div class="upper-form">
                <div class="control-group">
                    <label>Nome:</label> <br>
                    <input type="text" name="NomeProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Bairro:</label>
                    <input type="text" name="FornecedorProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Rua:</label> <br>
                    <input type="text" name="PrecoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Nº:</label> <br>
                    <input type="Number"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>CEP:</label> <br>
                    <input type="number"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Celular:</label> <br>
                    <input type="number"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Id:</label> <br>
                    <input type="number"name="descricaoProduto" disabled> <br>
                </div>
                
                <div class="btn">
                    <button type="submit">Cadastrar</button> <br>
                </div>
            </div>
        </form>
    </div>
    <div class="form">
        <form action="" class="sub-form">
            <h2>Cadastrar Animal</h2>
            <div class="upper-form">
                <div class="control-group">
                    <label>Nome:</label> <br>
                    <input type="text" name="NomeProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Espécie:</label>
                    <input type="text" name="FornecedorProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Raça:</label> <br>
                    <input type="text" name="PrecoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Peso:</label> <br>
                    <input type="Number"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Idade:</label> <br>
                    <input type="number"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Sexo:</label> <br>
                    <input type="Text"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Pelagem:</label> <br>
                    <input type="Text"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Restrições:</label> <br>
                    <input type="Text"name="descricaoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Proprietário:</label> <br>
                    <input type="number"name="descricaoProduto" disabled> <br>
                </div>
                <div class="control-group">
                    <label>Id:</label> <br>
                    <input type="number"name="descricaoProduto" disabled> <br>
                </div>
                
                <div class="btn">
                    <button type="submit">Cadastrar</button> <br>
                </div>
            </div>
        </form>
    </div>
    <script src="../Cliente/script.js"></script>
</body>
</html>