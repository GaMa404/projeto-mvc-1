<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produtos</legend>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao">

            <br>

            <label for="preco">Preço: </label>
            <input type="number" name="preco" id="preco" step="1" min="0">

            <br>           
            <select name="id_categoria">
                <?php foreach($model->lista_categorias as $categoria):?>
                    <option value="<?= $categoria->id ?>">
                        <?= $categoria->descricao?>
                    </option>
                <?php endforeach?>
            </select>
            
            <br><br>
            
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>