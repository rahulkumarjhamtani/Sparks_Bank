<?php

class Database_connection
{
    function connect()
    {   
        try{
        $connect = new PDO('mysql:host=remotemysql.com;dbname=wO6MRwHL7a', 'wO6MRwHL7a', 'CJA8iJqkom');
        return $connect;
        }
        catch (PDOException $error)
        {
            die("Could not connect to the database: ".$error->getMessage());
        }        
    }
}
?>

