<?php 

class Transaction {

    private $connect;


    public function __construct()
    {
        require_once('database_connection.php');

        $database_object = new Database_connection;
        $this->connect = $database_object->connect();
    }

    function get_transactions($id) {
        $query = "SELECT * from transactions_details where customer_id = '".$id."' order by created_on desc";
        $statement = $this->connect->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $data;
    }

    function transfer($from, $to, $amount) {
        
      $query = "INSERT INTO transactions_details(customer_id, to_from, amount, type) VALUES(" . $from . ", " . $to . ", " . $amount . ", 'Credit');
      INSERT INTO transactions_details(customer_id, to_from, amount, type) VALUES(" . $to . ", " . $from . ", " . $amount . ", 'Debit');";
      $statement = $this->connect->prepare($query);

      if($statement->execute()){
        return true;
      }
      else{
          return false;
      }
    }

    function get_all_transactions(){
      $query = "SELECT * from transactions_details where type='Credit' order by created_on desc";
        $statement = $this->connect->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $data;
    }

}

?>