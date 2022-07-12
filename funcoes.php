<?php
    
    class Usuario extends Conexao
    {
        public array $formDados;
        public object $conexaoBD;

        public function listar(): array
        {
            $this->conexao = $this->connect();
            $query_usuario = "SELECT *
                FROM cadastroUser
                ORDER BY id ASC
                LIMIT 40";
            
            $result_v = $this->conexao->prepare($query_usuario);
            $result_v->execute();
            $retorno = $result_v->fetchAll();

            return $retorno;
        }

        public function cadastrar(){
          $this->conexao = $this->connect();
          $query_usuario = "INSERT INTO cadastroUser (Nome, CPF, Telefone, NomeUsuario, Email, Senha) VALUES (:Nome, :CPF, :Telefone, :Nomeusuario, :Email, :Senha)";
          $cad_user = $this->conexao->prepare($query_usuario);
  
          $cad_user->bindParam(':Nome', $this->formDados['Nome']);
          $cad_user->bindParam(':CPF', $this->formDados['CPF']);
          $cad_user->bindParam(':Telefone', $this->formDados['Telefone']);
          $cad_user->bindParam(':Nomeusuario', $this->formDados['NomeUsuario']);
          $cad_user->bindParam(':Email', $this->formDados['Email']);
          $cad_user->bindParam(':Senha', $this->formDados['Senha']);
  
          $cad_user->execute();
          if($cad_user->rowCount()){
              return true;
          }else{
              return false;
          }
        }

        public function username()
        {
            $this->conexao = $this->connect();
            $query_usuario = "SELECT Email
                FROM cadastroUser
                WHERE Email = :Email";
            $cad_user = $this->conexao->prepare($query_usuario);
            $cad_user->bindParam(':Email', $this->formDados['Email']);

            $cad_user->execute();
            if($cad_user->rowCount()){
                return true;
            }else{
                return false;
            }
        }
        public function upuser(): array {
            $this->conexao = $this->connect();
            $query_update = "UPDATE cadastroUser SET Nome = :Nome, CPF = :CPF, Telefone = :Telefone, NomeUsuario = :NomeUsuario, Email = :Email, Senha = :Senha  WHERE Id = :Id";

            $result_update = $this->conexao->prepare($query_update);
            $result_update->bindParam(':Id', $this->formDados['Id']);
            $result_update->bindParam(':Nome', $this->formDados['Nome']);
            $result_update->bindParam(':CPF', $this->formDados['CPF']);
            $result_update->bindParam(':Telefone', $this->formDados['Telefone']);
            $result_update->bindParam(':NomeUsuario', $this->formDados['NomeUsuario']);
            $result_update->bindParam(':Email', $this->formDados['Email']);
            $result_update->bindParam(':Senha', $this->formDados['Senha']);
            
            $result_update->execute();
           
            $retornoss = $result_update->fetchAll();
            return $retornoss; 
        }
    }


    class Login extends Conexao
    {
        public array $formDados;
        public object $conexaoBD;

        public function validar(): array
        {
            $this->conexao = $this->connect();
            $query_login = "SELECT *
                FROM cadastroUser
                WHERE Email = :Email AND Senha = :Senha";
            $result_login = $this->conexao->prepare($query_login);
            $result_login->bindParam(':Email', $this->formDados['Email']);
            $result_login->bindParam(':Senha', $this->formDados['Senha']);
            $result_login->execute();
            $retorno = $result_login->fetchAll();
            return $retorno;
        }
    }

    class Visita extends Conexao
    {
        public array $formDados;
        public object $conexaoBD;

            
         public function listar2(): array
        {
            $this->conexao = $this->connect();
            $query_visita = "SELECT *
            FROM visitas WHERE Id = :Id";
            $list_visita = $this->conexao->prepare($query_visita);
    
            $list_visita->bindParam(':Id', $this->formDados['Id']);
    
            $list_visita->execute();
            $retorno =  $list_visita->fetchAll();

            return $retorno;
          }
        
        public function listar(): array
        {
            $this->conexao = $this->connect();
            $query_visita = "SELECT *
                FROM visitas";
            
            $result_v = $this->conexao->prepare($query_visita);
            $result_v->execute();
            $retorno = $result_v->fetchAll();

            return $retorno;
        }

     
        public function cadastrar(){
          $this->conexao = $this->connect();
          $query_visita = "INSERT INTO visitas (Nome, DataVisita, Circuito, Horario, NumeroPessoas) VALUES (:Nome, :DataVisita, :Circuito, :Horario, :NumeroPessoas)";
          $cad_visita = $this->conexao->prepare($query_visita);
  
          $cad_visita->bindParam(':Nome', $this->formDados['Nome']);
          $cad_visita->bindParam(':DataVisita', $this->formDados['DataVisita']);
          $cad_visita->bindParam(':Circuito', $this->formDados['Circuito']);
          $cad_visita->bindParam(':Horario', $this->formDados['Horario']);
          $cad_visita->bindParam(':NumeroPessoas', $this->formDados['NumeroPessoas']);
  
          $cad_visita->execute();
          if($cad_visita->rowCount()){
              return true;
          }else{
              return false;
          }
        }

        public function upvisita() {
            $this->conexao = $this->connect();
            $query_update = "UPDATE visitas        
                    SET Nome = :Nome,
                    DataVisita = :DataVisita,
                    Circuito = :Circuito,
                    Horario = :Horario,
                    NumeroPessoas = :NumeroPessoas
                    WHERE Id = :Id";
            $result_update = $this->conexao->prepare($query_update);
            $result_update->bindParam(':Id', $this->formDados['Id']);
            $result_update->bindParam(':Nome', $this->formDados['Nome']);
            $result_update->bindParam(':DataVisita', $this->formDados['DataVisita']);
            $result_update->bindParam(':Circuito', $this->formDados['Circuito']);
            $result_update->bindParam(':Horario', $this->formDados['Horario']);
            $result_update->bindParam(':NumeroPessoas', $this->formDados['NumeroPessoas']);
            $result_update->execute();
            if($result_update->rowCount()){
                return true;
            }else{
                return false;
            }
            /* $retornoss = $result_update->fetchAll();
            return $retornoss; */
        }
    }
?>