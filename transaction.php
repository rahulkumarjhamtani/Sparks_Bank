<?php
include('header.php');
?>

<body>
  <?php
  include('navbar.php');
  ?>

  <div class="heading">

    <?php

    require('database/transactions.php');
    $transaction_object = new Transaction;

    require('database/customers.php');
    $customers_object = new Customers;

    $message = "";
    $error = "";
    if (isset($_POST['submit'])) {
      $from = $_POST['from'];
      $to = $_POST['to'];
      $amount = $_POST['amount'];

      $customer_detail = $customers_object->get_customer_detail($from);

      if ($customer_detail) {
        if ($customers_object->get_customer_detail($to)) {
          $balance = $customers_object->getBalance($from);
          if ($amount > 0) {
            if ($balance >= $amount) {
              if ($customers_object->updateBalance($from, $to, $amount)) {
                if ($transaction_object->transfer($from, $to, $amount)) {
                  $message = "Transaction Done Successfully!!";
                } else {
                  $error = "Error";
                  $message = "Transaction Failed!!";
                }
              } else {
                $error = "Error";
                $message = "Transaction Failed!!";
              }
            } else {
              $error = "Error";
              $message = "Low Balance!!";
            }
          } else {
            $error = "amount";
            $message = "Invalid Amount!!";
          }
        } else {
          $message = "Invalid Account Number";
          $error = "to";
        }
      } else {
        $message = "Invalid Account Number";
        $error = "from";
      }
    }

    ?>

    <form id="myform" class="box" method="POST">
      <h1 class="is-size-3-mobile">Transfer Money</h1>
      <?php
      if ($error) {
      ?>
        <h2 style="color:rgb(255, 77, 77);text-align:center;font-size:20px;"><?php echo $message ?></h2>
        <?php
        if ($error == "Error") {
          $error = "";
        }
        $message = "";
      } else {
        ?>
        <h2 style="color:rgb(8, 221, 8);text-align:center;font-size:20px;"><?php echo $message ?></h2>
      <?php
        $message = "";
      }

      if ($error == "from") {
      ?>

        <input type="number" style="border:1px solid red;" required name="from" placeholder="FROM" id="from" value="<?php if (isset($_GET['account_number'])) echo $_GET['account_number'] ?>">


      <?php

        $error = "";
      } else {
      ?>

        <input type="number" required name="from" placeholder="FROM" id="from" value="<?php if (isset($_GET['account_number'])) echo $_GET['account_number'] ?>">

      <?php
      }

      if ($error == "to") {
      ?>

        <input style="border:1px solid red;" type="number" required name="to" placeholder="TO" id="to">


      <?php
        $error = "";
      } else {
      ?>

        <input type="number" required name="to" placeholder="TO" id="to">

      <?php
      }

      if ($error == "amount") {
      ?>
        <input type="number" style="border:1px solid red;" required name="amount" placeholder="AMOUNT" id="amount">


      <?php
        $error = "";
      } else {
      ?>

        <input type="number" required name="amount" placeholder="AMOUNT" id="amount">

      <?php
      }

      ?>



      <input type="submit" value="Send" name="submit" id="btn">
      <?php
      $error = "";
      $message = "";
      echo $error;
      echo $message;
      ?>
    </form>

  </div>

  <?php include('footer.php') ?>
</body>

</html>