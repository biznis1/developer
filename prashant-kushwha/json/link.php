 <?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=prashant", "root", "root");
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
