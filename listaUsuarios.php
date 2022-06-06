<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão de estoque</title>
    <link rel="stylesheet" href="relatorios.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome </th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Nome de Usuário</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
            
            <?php
                require './Conexao.php';
                require './funcoes.php';

                $listuser = new Usuario();
                $list_usuario = $listuser->listar();

                foreach ($list_usuario as $row_usuario)
                {
                    extract($row_usuario);
                
            ?>

            <th><?php echo "" . $Id . "<br>";?></th>
            <td><?php echo "" . $Nome . "<br>";?></td>
            <td><?php echo "" . $CPF . "<br>";?></td>
            <td><?php echo "" . $Telefone . "<br>";?></td>
            <td><?php echo "" . $NomeUsuario . "<br>";?></td>
            <td><?php echo "" . $Email . "<br>";?></td>
            
            </tr>
            <tr>
                <?php  }  ?>
            </tr>
        </tbody>
    </table>
</body>
</html>