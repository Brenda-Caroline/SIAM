<div class="inputBox">
            <select name="Nome">
                <option value="">Selecione</option>
            
                <?php

                $listuser = new Usuario();
                $list_usuario = $listuser->listar();

                foreach ($list_usuario as $row_usuario)
                {
                    extract($row_usuario);
                    echo "<option value=". $Nome .">". $Nome ."</option>";
                }
                ?>
            
            </select>