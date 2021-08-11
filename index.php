<?php
include('header.php');
?>

<body>
  <?php
  include('navbar.php');
  ?>

  <div class="columns is-centered mr-0">
    <div class="is-8-desktop is-12-touch">
      <div id="about">
        <h1>About</h1>
        <p>This is Sparks Bank founded by The Sparks Foundation. It provides some basic services such as Money Transactions, View User Details, View Individual User Details and many more. <br><br>
          Technologies used -> <br>
          HTML, CSS, JS, MySQL, PHP & BULMA
        </p>
      </div>
      <div id="services">
        <h1 class="mb-6">Services</h1>
        <div class="columns">
          <div class="column is-5 mx-2">
            <ul>
              <li>Payment Services</li>
              <li>View All Customers</li>
              <li>Currency Exchange</li>
              <li>Consultancy</li>
              <li>Individual Customer Profile</li>
              <li>Online Banking</li>
            </ul>
          </div>
          <div class="column is-5 mx-2">
            <ul>
              <li>Mobile Banking</li>
              <li>Private Banking</li>
              <li>Money Transfer</li>
              <li>Remittance Services</li>
              <li>Bank Guarantee</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="contact">
        <h1>Contact</h1>
        <div class="columns">
          <div class="column is-5 m-4 title">
            <h2 class="my-2" style="padding-bottom:10px;"><i class="fas fa-phone-alt"></i> (+91) XXXXX-12345</h2>
            <h2 class="my-2" style="padding-bottom:10px;"><i class="fas fa-envelope"></i> info@thesparksfoundation.sg</h2>
            <h2 class="my-2" style="padding-bottom:10px;"><i class="fas fa-map-marker-alt"></i> THE HANGAR, NUS ENTERPRISE
              21 HENG MUI KENG TERRACE, SINGAPORE, 119613</h2>
          </div>
          <div class="column is-5 m-4">
            <figure class="image is-4by3">
              <iframe class="has-ratio" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d510566.84086451854!2d103.775766!3d1.29234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff68dba930304ddb!2sWattah%20Pte%20Ltd!5e0!3m2!1sen!2ssg!4v1628332039567!5m2!1sen!2ssg" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </figure>
          </div>
        </div>
        <div class="social-icons">
          <a href="https://www.facebook.com/login/web/" target="blank"><span class="fab fa-facebook-f social"></span></a>
          <a href="https://twitter.com/?lang=en" target="blank"><span class="fab fa-twitter social"></span></a>
          <a href="https://www.google.com/account/about/" target="blank"><span class="fab fa-google social"></span></a>
          <a href="https://www.linkedin.com/login/" target="blank"><span class="fab fa-linkedin-in social"></span></a>
          <a href="https://www.instagram.com/accounts/login/" target="blank"><span class="fab fa-instagram social"></span></a>
          <a href="https://www.skype.com/en/" target="blank"><span class="fab fa-skype social"></span></a>
          <a href="https://www.reddit.com/" target="blank"><span class="fab fa-reddit social"></span></a>
          <a href="https://github.com/" target="blank"><span class="fab fa-github social"></span></a>
          <a href="https://www.xe.com/currencyconverter/" target="blank"><span class="fas fa-dollar-sign social"></span></a>
        </div>
      </div>

      <div id="issue">
        <h1>Issues</h1>
        <input type="text" class="entertext" placeholder="Enter your query" title="Write your issue">
        <button class="button btn" onclick="alert('\nIssue recorded successfully!!! \n\nThank You for your opinion')">Send</button>
      </div>
    </div>
    <div class="column is-2 is-hidden-touch">
      <a href="transaction.php">
      <figure class="image mt-6 mr-0" style="position: fixed;">
        <img src="assets/img/transaction.png" id="fix1">
      </figure>
      </a>
      <a href="customer.php">
      <figure class="image mt-6 mr-0" style="position: fixed;margin-top: 22% !important;">
        <img src="assets/img/customer.png" id="fix2">
      </figure>
      </a>
    </div>
  </div>


<?php include('footer.php') ?>

  
</body>

</html>