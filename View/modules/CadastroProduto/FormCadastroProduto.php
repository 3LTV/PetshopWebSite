<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="View/modules/CadastroProduto/style.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="PetShop-Box">
                <h1 class="Logo">Petshop</h1>
            </div>
            <div class="parent-link">
                <a href="" class="social-links">Vendas Produto</a>
                <a href="" class="social-links">Cadastrar</a>
                <a href="" class="social-links">Serviços</a>
            </div>
        </nav>
    </header>
    <div class="form">
        <form action="" class="sub-form">
            <h2>Cadastrar Produto</h2>
            <div class="upper-form">
                <div class="control-group">
                    <label>Nome do Produto:</label> <br>
                    <input type="text" name="NomeProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Fornecedor:</label>
                    <input type="text" name="FornecedorProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Preço:</label> <br>
                    <input type="number" name="PrecoProduto"> <br>
                </div>
                <div class="control-group">
                    <label>Imagem:</label> <br>
                    <input type="image" name="ImagemProduto"> <br>
                </div>
                <div class="control-group">
                <label>Descrição:</label> <br>
                <input type="text"name="descricaoProduto"> <br>
                </div>
                
                <div class="btn">
                    <button type="submit">Cadastrar</button> <br>
                </div>
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="script.js">
</body>
</html>