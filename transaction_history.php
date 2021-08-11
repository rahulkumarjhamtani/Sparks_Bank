<?php
include('header.php');
?>

<?php

require('database/transactions.php');
$transaction_object = new Transaction;
$transaction_details = $transaction_object->get_all_transactions();


?>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="heading">
        <h1 style="color:rgb(205, 65, 35);">HISTORY</h1>
    </div>
    <table style="margin-top: 50px !important;">

        <thead>
            <tr>
                <th>Date</th>
                <th>Sender Account no.</th>
                <th>Receiver Account no.</th>
                <th>Amount</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($transaction_details as $key => $d) {
            ?>
                <tr>
                    <td><?php echo substr($d['created_on'],0,10); ?></td>
                    <td><?php echo $d['customer_id'] ?></td>
                    <td><?php echo $d['to_from'] ?></td>
                    <td><?php echo $d['amount']; ?></td>
                </tr>
        </tbody>

    <?php
            }
    ?>

    <tfoot></tfoot>
    </table>

    <?php include('footer.php') ?>
</body>

</html>