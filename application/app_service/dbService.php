<?php 
Class dbService {

    public $service;
    private $message = "";
    
    public function __construct() {
        // configure database connection parameters
        $dbhost = "localhost";
        $dbname = "pro_x";
        $dbuser = "root";
        $dbpass = "";
        try {
            $this->service = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $this->service->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            $this->message = "Connection failed";
        }
        return TRUE;
    }
    
}
