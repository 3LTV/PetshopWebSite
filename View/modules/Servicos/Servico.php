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
            <h1 class="Title">Serviços</h1><br>
                <div class="form-top">
                    <label class="form-control">
                        <input type="checkbox" name="banho"/>
                        Banho   
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="hidatracao"/>
                        Hidratação   
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="unha"/>
                        Corte de Unhas   
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="dentes"/>
                        Escovar os Dentes   
                    </label>
                    
                    <label class="form-control">
                        <input type="checkbox" name="desembolo"/>
                        Desembolo
                    </label>
                    
                    <div class="control ">
                        <input type="text" disabled placeholder="R$"/>
                    </div>
                </div>  
                <br>
                <div class="line-1"></div>
                <br>
                <div class="form-top">
                    <label class="form-control">
                        <input type="checkbox" name="tosa"/>
                        Tosa 
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="tosahigienica"/>
                        Tosa Higiênica
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="tosapadrao"/>
                        Tosa Padrão
                    </label>

                    <label class="form-control">
                        <input type="checkbox" name="tosamaquina"/>
                        Tosa Máquina
                    </label>
                    
                    <label class="form-control">
                        <input type="checkbox" name="tosatesoura"/>
                        Tosa com Tesoura
                    </label>
                    
                    <div class="control ">
                        <input type="text" disabled placeholder="R$"/>
                    </div>
                </div>
                <br>
                <div class="form-mid">
                    <div class="control-group">
                        <label>Comprimento/Altura dos pelos:</label> <br>
                        <input type="text" name="altura_pelos" placeholder="CM"/>
                    </div>

                    <div class="control-group">
                        <label class="preco">Total:</label> <br>
                        <input type="text" name="preco_total" placeholder="R$" disabled/>
                    </div>
                </div>
                <br>
                <div class="line-1"></div>
                <h1 class="Title">Análise Visual</h1><br>
                <div class="form-bottom">
                    <div class="checks">
                        <label class="form-control">
                            <input type="checkbox" name=""/>
                            Carrapto/Pulga  
                        </label>

                        <label class="form-control">
                            <input type="checkbox" name=""/>
                            Verruga   
                        </label>

                        <label class="form-control">
                            <input type="checkbox" name=""/>
                            Secreção Genitais   
                        </label>

                        <label class="form-control">
                            <input type="checkbox" name=""/>
                            Olhos   
                        </label>
                        
                        <label class="form-control">
                            <input type="checkbox" name=""/>
                            Pele
                        </label>
                    </div>
                    <div class="inputs">
                        <div class="control-group">
                            <label class="lbl_doenca">Doenças Pré-existentes:</label> <br>
                            <input type="text" name="doenca"> <br>
                        </div>
                        <div class="control-group">
                            <label class="lbl_doenca">Doenças de Pele:</label> <br>
                            <input type="text" name="peledoenca"> <br>
                        </div>
                        <div class="control-group">
                            <label class="lbl_doenca">Doença Canal Auditivo/Otite:</label> <br>
                            <input type="text" name=""> <br>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <script src="../Servicos/script.js"></script>
</body>
</html>