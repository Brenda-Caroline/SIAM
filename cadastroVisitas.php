<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="paginaCadastro.css">
    <title>Cadastro de Visitas</title>
</head>
<body>
    <?php
        require './menu.php';
    ?>
    <section id="secao">
        <div class="box">
            <!-- <img src="img/SIAM3.png"/>
            <br> -->

            <?php
            require './Conexao.php';
            require './funcoes.php';
            
            $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
            
            if(!empty($formDados['SendCadVisit'])){                  
                $cadVisita = new Visita();
                $cadVisita->formDados = $formDados;
                $visit = $cadVisita->cadastrar();
                if($visit){
                    echo '<script language="javascript">alert("Visita cadastrada com sucesso!");</script>';
                    }else{
                    echo '<script language="javascript">alert("Erro: Visita não cadastrado!");</script>';
                                }
            }
            ?>

            <FORM action=""  METHOD="POST"> 
                <!-- <fieldset> -->
                    <legend><b>Agendamento de visitas</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="Nome" id="Nome" class="inputUser" required>
                        <label for="Nome" class="labelInput">Nome</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="date" name="DataVisita" id="DataVisita" class="inputUser" required>
                        <label for="DataVisita" class="labelInput2">Data</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                    <select name="Circuito" id="Circuito" class="inputUser2" >
                        <option value="Circuito 1">Circuito 1 - Cachoeira Serrado</option>
                        <option value="Circuito 2">Circuito 2 - Talhado</option>
                    </select>
                    <label for="Circuito" class="labelInput">Circuito</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                    <select name="Horario" id="Horario" class="inputUser2" >
                        <option value="06:00">06:00</option>
                        <option value="06:30">06:30</option>
                        <option value="07:00">07:00</option>
                    </select>
                    <label for="Horario" class="labelInput">Horario</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="int" name="NumeroPessoas" id="NumeroPessoas'" class="inputUser" required>
                        <label for="NumeroPessoas" class="labelInput">Número de pessoas</label>
                    </div>
                    <br><br>
                    <button type="submit" value="Cadastrar" name="SendCadVisit" id="submit">Cadastrar</button>
                <!-- </fieldset> -->
            </FORM>
        </div>
    </section>
</body>
</html>