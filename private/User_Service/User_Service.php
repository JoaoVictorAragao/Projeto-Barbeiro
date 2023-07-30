<?php

    class UserService{
        private $conn;
        private $user;

        public function __construct(Conexao $conexao, user $user){
            $this->conn = $conexao->conectar();
            $this->user = $user;
        }

        public function Valida_Login(){
            $query = 'SELECT ID, password FROM usersCad WHERE login = :login';
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':login', $this->user->getLogin());
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $senha_hash = password_hash($user['password'], PASSWORD_DEFAULT);
        
            if ($senha_hash && password_verify($this->user->getPassword(), $senha_hash)) {
                // login e senha corretos
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $this->user->getLogin();
                $this->user->setId($user['id']);
                return true;
            } else {
                // login ou senha incorretos
                return false;
            }
        }

    }

?>