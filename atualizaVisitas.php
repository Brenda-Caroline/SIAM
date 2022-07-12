<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Visita</title>
    <link rel="stylesheet" href="paginaCadastro.css">
</head>
<body>
  <div class="box">
  
    <img src="img/SIAM3.png"/>
    <br>

    <?php
      require './Conexao.php';
      require './funcoes.php';

        $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($formDados['SendCadvisita2']))
        {
            $uovisit = new Visita();
            $uovisit->formDados = $formDados;
            $upp = $uovisit->upvisita();

            if($upp)
            {
                echo '<script language="javascript">alert("Visita atualizado com sucesso!");
                </script>';
               
            }else{
                echo '<script language="javascript">alert("Erro: Visita não atualizado!");</script>';
            }
        }
        $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $lisvisit = new Visita();
            $lisvisit->formDados = $formDados;
            $list_visita = $lisvisit->listar2();

           foreach ($list_visita as $row_visita)
          {
              extract($row_visita);
          }
    ?>
    
 
    <FORM action=""  METHOD="POST"> 
            <fieldset>
                <legend><b>Atualizar visitas</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" value="<?php echo $row_visita['Nome'] ;?>" >
                    <label for="Nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="DataVisita" id="DataVisita" class="inputUser" value="<?php echo $row_visita['DataVisita'] ;?>">
                    <label for="DataVisita" class="labelInput2">Data</label>
                </div>
                <br><br>
                <div class="inputBox">
                <select name="Circuito" id="Circuito" class="inputUser2" value="<?php echo $row_visita['Circuito'] ;?>">
                    <option selected ><?php echo $row_visita['Circuito'] ;?></option>
                    <option value="Circuito 1">Circuito 1</option>
                    <option value="Circuito 2">Circuito 2</option>
                     <option value="Circuito 3">Circuito 3</option>
                </select>
                <label for="Circuito" class="labelInput">Circuito</label>
                </div>
                <br><br>
                <div class="inputBox">
                <select name="Horario" id="Horario" class="inputUser2" value="<?php echo $row_visita['Horario'] ;?>">
                    <option value="Horario 1">06:00</option>
                    <option value="Horario 2">06:30</option>
                    <option value="Hoario 3">07:00</option>
                </select>
                <label for="Horario" class="labelInput">Horario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="int" name="NumeroPessoas" id="NumeroPessoas'" class="inputUser" value="<?php echo $row_visita['NumeroPessoas'] ;?>">
                    <label for="NumeroPessoas" class="labelInput">Número de pessoas</label>
                </div>
                <br><br>
                <input type="hidden" name="Id" value="<?php echo $row_visita['Id'] ;?>"/>
                <button type="submit" value="Cadastrar" name="SendCadvisita2" id="submit">Editar</button>
            </fieldset>
        </FORM>    
  </div>
</body>
</html>