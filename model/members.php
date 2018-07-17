<?php
    class members
    {   
        private $_id;
        private $_pw;

        function __construct()
        {
            $servername = "localhost";
            $username = "yuio1213";
            $password = "12131213";
            $dbname = "mem";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //??
                echo "Connected successfully"; //?? 이건 어디에 뜰까?
                return $conn;
                
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage(); // 얘는 어디에 뜰까?
                return 0;
                }
        }

        function __destruct() {
            $conn = null;                       
        }
        

        public function login($id, $passwd){
            if(isset($conn){
                
            }                

        }

        public function register($id, $passwd, $name, $email, $phone){
            $conn = db_connect()
            if(isset($conn){
                
            }                

            db_close();
        }


        // $conn = new mysqli('localhost', 'yuio1213', 1213, 'cont');
        // Using 'mysqli' and 'mysql' object to connect database is not secure anymore. so we don't use it
        // use PDO --> prepared statement 

        
    }
?>