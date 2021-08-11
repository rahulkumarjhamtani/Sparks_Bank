<?php
include('header.php');
?>

<body>

    <?php
    include('navbar.php');
    ?>

    <div class="heading">
        <h1 style="color:rgb(205, 65, 35);">CUSTOMERS</h1>
    </div>

    <table>

        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Account No.</th>
                <th>Balance</th>
            </tr>
        </thead>

        <tbody>
            <?php

            require('database/customers.php');

            $customers_object = new Customers;
            $customers_details = $customers_object->get_customers_details();


            foreach ($customers_details as $key => $d) {
            ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><a href=<?php echo  "profile.php?account_number=" . $d['account_number'] ?>><?php echo $d['first_name'] . " " . $d['last_name']; ?></a></td>
                    <td><?php echo $d['account_number']; ?></td>
                    <td><?php echo $d['balance']; ?></td>
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