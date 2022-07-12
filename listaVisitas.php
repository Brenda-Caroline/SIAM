<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar visitas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        require './menu.php';
    ?>
    <section id="secao">
        <div class="container">
            <div class="table">
                <div class="heading">
                    <h1>Lista de visitas</h1>
                </div>
            </div>
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
                    <form class='row' action='atualizaVisitas.php' method='post'>
                    <th><?php echo "" . $Id . "<br>";?></th>
                    <td><?php echo "" . $Nome . "<br>";?></td>
                    <td><?php echo "" . $DataVisita . "<br>";?></td>
                    <td><?php echo "" . $Circuito . "<br>";?></td>
                    <td><?php echo "" . $Horario . "<br>";?></td>
                    <td><?php echo "" . $NumeroPessoas . "<br>";?></td>
                    <td><input type="hidden" name="Id" value="<?php echo $row_visita['Id'] ;?>"/>
                    <button type='submit' name="SendCadvisita"><img src="img/update.png" height="35" width="35"/></td>
                        </form>
                    
                    </tr>
                    <tr>
                        <?php  }  ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>