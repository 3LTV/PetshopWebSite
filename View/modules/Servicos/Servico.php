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
                <a href="/produto/cliente" class="social-links">Cliente</a>
            </div>
        </nav>
    </header>
    <div class="form">
        <form action="" class="sub-form">
            <h1>Serviços</h1><br>
                <div class="form-top">
                    <div class="control-group">
                        <input type="checkbox" name="banho" id="banho">
                        <label for="banho">Banho</label>
                    </div>
                    <div class="control-group">
                        <input type="checkbox" name="hidratacao" id="hidratacao">
                        <label for="hidratacao">Hidratação</label>
                    </div>
                    <div class="control-group">
                        <input type="checkbox" name="unha" id="unha">
                        <label for="unha">Corte de Unhas</label>
                    </div>
                    <div class="control-group">
                        <input type="checkbox" name="dentes" id="dentes">
                        <label for="dentes">Escovar os Dentes</label>
                    </div>
                    <div class="control-group">
                        <input type="checkbox" name="desembolo" id="desembolo">
                        <label for="desembolo">Desembolo</label>
                    </div>
                    <div class="control ">
                        <input type="text" disabled>
                    </div>
                </div>  
        </form>
    </div>
    <script src="../Servicos/script.js"></script>
</body>
</html>