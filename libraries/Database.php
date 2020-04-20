<?php
  
class Database {

  private static $instance = null;
  /**
    *rettourne connexion avec la base de données
    *@return 
    */
    public static function getPdo() :PDO 
  {
    if(self::$instance === null)
    {
        self::$instance = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    }
     
  
      return self::$instance ;
  }
}

  

?>