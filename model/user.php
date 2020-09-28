<?php 
    class User {
        //Atributos, siempre en privado
        private $id_user;
        private $email;
        private $passwd;

        //Constructor
        public function __construct($email,$passwd){
            $this->email=$email;
            $this->passwd=$passwd;
        }

        //Metodos getters y setters
        public function getEmail() {
            return $this->email;
        }
        public function getPasswd() {
            return $this->passwd;
        }
        public function getId() {
            return $this->id_user;
        }

        public function setEmail($email){
            $this->email=$email;
        }
        public function setPasswd($passwd){
            $this->passwd=$passwd;
        }
        public function setId($id_user){
            $this->id_user=$id_user;
        }
    }
?>