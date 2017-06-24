<?php
 
 
class DB_Functions {
 
    private $conn;
 
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    /**
     * Storing new user
     * returns user detailsd
     */
    public function storeUser($text, $textarea) {
       
        
 
        $stmt = $this->conn->prepare("INSERT INTO data( text, textarea, created_at) VALUES(?, ?, NOW())");
        $stmt->bind_param("ss",$text, $textarea);
        $result = $stmt->execute();
        $stmt->close();
 
        // check for successful store
        if ($result) {
            $stmt = $this->conn->prepare("SELECT * FROM data WHERE text = ?");
            $stmt->bind_param("s", $text);
            $stmt->execute();
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
 
            return $user;
        } else {
            return false;
        }
    }
 
 

}
 
?>
