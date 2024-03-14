<?php
class db_connection{

    public static $status = null;
 
    public static function load_db()
    {
       if (self::$status == null)
       {
        $db_server = "localhost";
        $db_username = "victor";
        $db_password = "sqlpass";
        $db_name = "marks";
 
          $conn = new mysqli($db_server, $db_username, $db_password, $db_name);
 
          if ($conn->connect_error){
             die("There is an error". $conn->connect_error);
          }else{
             db_connection::$status = $conn;
             return self::$status;
          }
       }else{
          return self::$status;
       }
    
    }
 
 }