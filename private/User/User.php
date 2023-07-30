<?php

    class User{
        private $id;
        private $login;
        private $password;
        private $name;

        function setLogin($login){
            $this->login = $login;
        }
        
        function getLogin(){
            return $this->login;
        }

        function setPassword($password){
                    $this->password = $password;
        }

        function getPassword(){
                    return $this->password;
        }

        function setName($name){
                    $this->name = $name;
        }

        function getName(){
                    return $this->name;
        }

        function setId($id){
                    $this->id = $id;
        }

        function getId(){
                    return $this->id;
        }
        
    }

    
?>