<?php
    require_once("Rest.inc.php");
    class API extends REST{
        public $deta="";

        const DB_SERVER = "127.0.0.1";
        const DB_USER = "root";
        const DB_PASSWORD = "";
        const DB = "expensesdatabase";

        private $db = NULL;
        private $mysqli = NULL;

            public function _construct(){
                parent::__construct();
                $this->dbConnect();
            }
            public  function  DbConnect(){
                $this->mysqli = new mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
            }

        public function processApi(){
            $func = strtolower(trim(str_replace("/","",$_REQUEST['x'])));
            if((int)method_exists($this,$func) > 0)
                $this->$func();
            else
                $this->response('',404); // If the method not exist with in this class "Page not found".
        }
        public  function login(){

        }
        public function expenses(){

        }
        public  function insertExpense(){

        }
        public function updateExpense(){

        }

        public function deleteExpense()
        {
            
        }

        private function json($data)
        {
            if(is_array($data)){
                return json_encode($data);
            }
        }

    }
    $api = new API;
    $api->processApi();

?>