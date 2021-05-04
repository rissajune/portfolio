<?php

    // Class name and creation
    class DBConnection{
        
        private $DB_HOST = 'localhost:8889'; // db host variable
        private $DB_NAME = 'registration_db'; // db name variable
        private $DB_USERNAME = 'root'; // db username variable
        private $DB_PASSWORD = 'root'; // db password variable

        public $dbh;

        // Constructor Method: Will always be called at the moment the class/object is instantiated
        public function __construct(){
                try{
                    $dsn = 'mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME;
                    $this->dbh = new PDO($dsn, $this->DB_USERNAME, $this->DB_PASSWORD);
                    
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
        }

        public function getConnection(){
            return $this->dbh;
        }

    }
