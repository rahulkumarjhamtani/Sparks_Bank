<?php
include('header.php');
?>

<?php

require('database/customers.php');
$customers_object = new Customers;
$id = $_GET["account_number"];
$customer_details = $customers_object->get_customer_detail($id);

require('database/transactions.php');
$transaction_object = new Transaction;
$transaction_details = $transaction_object->get_transactions($id);


?>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="columns mr-0 is-multiline is-centered">
        <div class="column is-12">
        <?php
    foreach ($customer_details as $key => $d) {
    ?>
        <h1 class="accno" style="margin-top:1%;color:rgb(41, 2, 2);"><?php echo  $d['account_number'] ?></h1>
        </div>
        <div class="column has-text-centered">
        <div id="profile">
        <figure >
            <img src="<?php echo $d['image'] ?>" style="height:200px;width:250px;border-radius:10px;">
        </figure>
        <div class="data">
            <h1 class="title is-2"><?php echo "<br>" . $d['first_name'] . " " . $d['last_name'] ?></h1>
            <h2 class="title is-3 has-text-light has-text-centered"><?php echo "Gender : " . $d['gender'] . "<br> Email : " . $d['email'] ?></h2>
            <h2 id="balance" class="title has-text-light has-text-centered"><?php echo "Balance : Rs." . $d['balance'] ?></h2>
        </div>
        <div class="buttons mt-6" style="display: block;">
            <button class="button is-primary is-light" id="transaction_history" data-target="transaction_history_table">Transaction History</button>
            <a href="transaction.php?account_number=<?php echo $d['account_number'] ?>" class="button is-link is-light">Transfer Money</a>
        </div>
        </div>
    
        </div>
    </div>
   
    
    <?php
    }
    ?>

    <table id="transaction_history_table" style="display: none;">

        <thead>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Type</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($transaction_details as $key => $d) {
            ?>
                <tr style="<?php if($d['type']=='Credit'){echo 'color:rgb(255, 77, 77)'; }
                    else{
                        echo 'color:rgb(8, 221, 8)';
                    }
                ?>">
                <td><?php echo substr($d['created_on'],0,10); ?></td>
                    <td><?php
                        if($d['type']=='Credit'){
                            echo 'Transferred to '. $d['to_from'];
                        }
                        else{
                            echo 'Received from '. $d['to_from'];
                        } 
                     ?></td>
                    <td><?php echo $d['amount']; ?></td>
                    <td><?php echo $d['type']; ?></td>
                </tr>
        </tbody>

    <?php
            }
    ?>

    <tfoot></tfoot>
    </table>

    <?php include('footer.php') ?>
</body>
<script>
    var transaction_history = document.getElementById('transaction_history');
    transaction_history.addEventListener('click', (e) => {
        var transaction_history_table = document.getElementById(e.target.dataset.target)
        transaction_history_table.style.display = 'table';
    })
</script>

</html>