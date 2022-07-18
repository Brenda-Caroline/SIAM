<?php
      require './Conexao.php';
      require './funcoes.php';

        $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $delvisit = new Visita();
            $delvisit->formDados = $formDados;
            $del = $delvisit->delvisita();

            if($del)
            {
                echo '<script language="javascript">alert("Visita deletado com sucesso!");
                window.location.href = "listaVisitas.php";
                </script>';
               
            }else{
                echo '<script language="javascript">alert("Erro: Visita não deletado!");
                window.location.href = "listaVisitas.php";</script>';
            }
        
        
?>