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
                <th>Data</th>
                <th>Circuito</th>
                <th>Horário</th>
                <th>Número de Pessoas</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
            
            <?php
                require './Conexao.php';
                require './funcoes.php';

                $listvisit = new Visita();
                $list_visita = $listvisit->listar();

                foreach ($list_visita as $row_visita)
                {
                    extract($row_visita);
                
            ?>

            <th><?php echo "" . $Id . "<br>";?></th>
            <td><?php echo "" . $Nome . "<br>";?></td>
            <td><?php echo "" . $DataVisita . "<br>";?></td>
            <td><?php echo "" . $Circuito . "<br>";?></td>
            <td><?php echo "" . $Horario . "<br>";?></td>
            <td><?php echo "" . $NumeroPessoas . "<br>";?></td>
            
            </tr>
            <tr>
                <?php  }  ?>
            </tr>
        </tbody>
    </table>
</body>
</html>