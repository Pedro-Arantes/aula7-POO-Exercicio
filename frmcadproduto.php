
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produto</title>

</head>

<body>

    <?php

    require ('./inc/Config.inc.php');

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);



    if(!empty($dados['SendCadProduto'])):

        unset($dados['SendCadProduto']);



        $cadUsuario = new Usuario();

        $cadUsuario->exeCreate($dados);



        if(!$cadUsuario->getResultado()):

            echo $cadUsuario->getMsg();

        else:

            echo $cadUsuario->getMsg();

        endif;

    endif;

    ?>









    <h1>Cadastro de Produtos</h1>

    <form name ="Cadproduto" action="" method="post" enctype="multipart/form-data">

        <label>Produto</label>

        <input type="text" name="produto" placeholder="Digite um produto" required>

        <br>



        <label>Preço</label>

        <input type="text" name="preco" placeholder="Preço do produto" required>

        <br>



        <label>Quantidade em Estoque</label>

        <input type="text" name="qtdEstoque" placeholder="coloque numero sem virgula" required>

        <br>

        <label>Fornecedor</label>

        <input type="text" name="fornecedor" placeholder="Fornecedor do produto" required>

        <br>



        <input type="submit" value="Cadastrar" name="SendCadProduto">

    </form>





</body>

</html>