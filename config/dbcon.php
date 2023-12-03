<?php

class dbConnect {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'test1';

    public $conn;

    public function __construct() {
        // Create a new MySQLi connection
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname, 3307);
            if ($this->conn->connect_error) {
                die('Connection failed: ' . $this->conn->connect_error);
            }
            //echo 'Connection Successfully ';
        } catch (Exception $e) {
            // Handle any potential connection errors
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}

//$ob = new dbConnect();



// <?php  
//     class dbConnect {  
//         function __construct() {  
//             require_once('config.php');  
//             $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);  
//             mysql_select_db(DB_DATABSE, $conn);  
//             if(!$conn)// testing the connection  
//             {  
//                 die ("Cannot connect to the database");  
//             }   
//             return $conn;  
//         }  
//         public function Close(){  
//             mysql_close();  
//         }  
//     }  
// ?>  