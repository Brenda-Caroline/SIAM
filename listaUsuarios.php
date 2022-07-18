<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <?php
		require './menu.php';
	?>
<body>
    <?php
        require './menu.php'; 
    ?>
    <section id="secao">
        <div class="container">
            <div class="table">
                <div class="heading">
                    <h1>Lista de usuários</h1>
                </div>
            </div>
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

                    <th ><?php echo "" . $Id . "<br>";?></th>
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
        </div>
    </section>
</body>
</html>


