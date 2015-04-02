<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('soap.wsdl_cache_enabled',0); // Disable caching in PHP

/**
 * Description of Steden
 *
 * @author L. Rutten
 */

/**
 * @pw_complex intArray
 */

/**
 * @pw_complex stringArray
 */
class Steden 
{
    private $dbh;
    
    public function __construct() 
    {
      /*
        $dsn = "mysql:host=127.0.0.1;dbname=test";
        $this->db = new PDO($dsn, "admin", "paswoord");
       */
    }

    /**
     * 
     * @return stringArray alle namen van de steden
     */
    public function getSteden() 
    {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "admin", "paswoord");
        $stmt = $pdo->prepare("select * from steden");
        //$stmt = $this->db->prepare("select * from steden");
        $succes = $stmt->execute();
        
        $namen = array();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        while ($record = $stmt->fetch()) 
        {
           array_push($namen, $record->naam);
        }
        $stmt = null;
        return $namen;
    } 


    /**
     * 
     * @return int aantal steden
     */
    public function getAantal() 
    {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "admin", "paswoord");
        $stmt    = $pdo->prepare("select * from steden");
        $success = $stmt->execute();
        $aantal  = $stmt->rowCount();
        return $aantal;
    }

    /**
     * Maak een nieuwe stad.
     *
     * @param string $naam
     * @param string $postnummer
     * @return int
     */
    public function nieuweStad($naam, $postnummer) 
    {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=test", "admin", "paswoord");
        $stmt = $pdo->prepare("insert into steden(naam, postnummer) values(:naam, :postnummer)");
        $stmt->bindValue(":naam", $naam);
        $stmt->bindValue(":postnummer", $postnummer);
        $succes = $stmt->execute();
        if (!$success)
        {
            return -1;
        }
        else
        {
            return 0;
        }
    }

    public function __destruct() 
    {
      /*
        $this->db = null;
       */
    }
}
?>
