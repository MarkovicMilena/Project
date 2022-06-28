<?php

class Connection {

    public function dbConnect(){
        return new PDO("mysql:host=localhost; dbname=demo", "root", "");    //PDO zaht5ava 3 parametra: tip baze sa kojom se povezujemo, username i password-to je povezivanje sa bazom
       
    }
    
    }
    
    class User{ 
        private $db;
        public $msgSuccess='';
    
        public function __construct()
        {
            $this->db = new Connection();
            $this->db = $this->db->dbConnect();
        }
      
        public function Login($name, $pass){  //pozivamo prilikom pokusaja korisnika da unese nesto u formu!
    
            if(!empty($name) && !empty($pass)){
    
                $st = $this->db->prepare("SELECT * FROM loginform WHERE user=? AND pass=?") ;     //prepare pise query koji zelimo da unesemo u sql!
                $st->bindParam(1, $name);
                $st->bindParam(2, $pass);
                $st->execute();
            }
             if($st->rowCount()==1){
                $this->msgSuccess = "You are loged in succesfully!";
                //  echo "You are loged in succesfully!";
             }
             else{
                $this->msgSuccess = "You need to register an account";
                //  echo "You need to register an account";
             }
        }
    }
    
    
    






























?>