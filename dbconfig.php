<?php
class Database
{
    private static $hostname = 'localhost'; 
    private static $username = 'root';
    private static $password = 'root123';
    private static $db_name="school"; 

    private static $cont  = null;

  public static function connect(){
    $dsn = "mysql:host=".self::$hostname.";dbname=".self::$db_name;
    self::$cont = new PDO($dsn, self::$username, self::$password);
    return self::$cont;
  }
  public static function disconnect(){
    self::$cont = null;
  }
}
?>
