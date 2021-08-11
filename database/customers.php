<?php 

class Customers {

    private $balance;
    private $connect;


    public function __construct()
    {
        require_once('database_connection.php');

        $database_object = new Database_connection;
        $this->connect = $database_object->connect();
    }

    function get_customers_details()
    {
        $query = "select * from customers";
        $statement = $this->connect->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $data;
    }

    function get_customer_detail($id){
        $query = "select * from customers where account_number = '".$id."'";
        $statement = $this->connect->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $data;
    }

    function getBalance($id) {

        $query ="select balance from customers where account_number = '".$id."'";
        $statement = $this->connect->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $data[0]['balance'];
    }

    function updateBalance($from, $to, $amount) {
        $query = "UPDATE customers SET balance = balance - '".$amount."' WHERE account_number = '".$from."'; 
        UPDATE customers SET balance = balance + '".$amount."' WHERE account_number = '".$to."' ;";
        $statement = $this->connect->prepare($query);

        if($statement->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>