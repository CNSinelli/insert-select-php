<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/php1/contorle/pessoaControle.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pessoaController = new PessoaController();
                //pessoa recebe todos os registros do pessoaControle pelo método listar
                $pessoas = $pessoaController->listar();
                //foreach como um laço de repetição garante que pessoa vai receber todos os registros
                foreach($pessoas as $pessoa){
                //laço engloba os 3 echo pra que seja imprimida a informação sempre que ele receber outro registro
                ?>
                 <tr>
                    
                    <th><?php echo $pessoa['nome']; ?></th>
                    <th><?php echo $pessoa['telefone']; ?></th>
                    <th><?php echo $pessoa['celular']; ?></th>

                    <th><a href="editar.php?id=<?php echo $pessoa['id']; ?>">editar</th>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>                       