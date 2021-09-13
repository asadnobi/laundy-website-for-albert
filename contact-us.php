<?php include('common/header.php') ?>
<?php include('common/topnav.php') ?>

<?php


if (isset($_POST["submit"])) {
  $to      = 'info@albertvaletservices.com';
  $name    = $_POST["first_name"] . " " . $_POST["last_name"];
  $subject = $_POST["subject"];
  $txt = $name . " , " . $_POST["message"];
  $from    = $_POST["email"];
  $headers = array(
    'From' => $from,
    'Reply-To' => $from,
    'X-Mailer' => 'PHP/' . phpversion()
  );

  $mail = mail($to,$subject,$txt,$headers);
  if( $mail ) {
    $msg = "Message sent successfully...";
  }else {
    $msg = "Message could not be sent...";
  }
}
?>

<!-- Main Page Section -->
<section class="page-content contact-page">
  <!---Start section-banner--->
  <div class="container">
    <div class="box">
      <div class="col-lg-5 col-12 left">
        <ul>
          <li>
            <span><i class="fas fa-map-marker-alt"></i></span>
            <div>
              <h5>Address</h5>
              <p>205 London Rd, Sevenoaks TN13 1DH,<br>United Kingdom</p>
            </div>
          </li>
          <li>
            <span><i class="fas fa-phone"></i></span>
            <div>
              <h5>Lets Talk</h5>
              <p><a href="tel: +441732458007">+44 1732 458007</a></p>
            </div>
          </li>
          <li>
            <span><i class="far fa-envelope"></i></span>
            <div>
              <h5>General Support</h5>
              <p><a href="mailto: info@albertvaletservices.com">info@albertvaletservices.com</a></p>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-7 col-12 right">
        <h1 class="title">Send Us A Message</h1>
        <?php if (!empty($msg)) { ?>
          <div class="alert alert-success" role="alert"><?php echo $msg;?></div>
        <?php } ?>
        <form class="" method="post" action="">
          <p class="b-head">Tell us your name *</p>
          <p class="b-body">
            <span><input type="text" class="form-control" name="first_name" placeholder="First name" required></span>
            <span><input type="text" class="form-control" name="last_name" placeholder="Last name" required></span>
          </p>
          <p class="b-head">Enter Your Email *</p>
          <p class="b-body">
            <span><input type="email" class="form-control" name="email" placeholder="Eg: example@email.com" required></span>
          </p>
          <p class="b-head">Enter Phone Number</p>
          <p class="b-body">
            <span><input type="text" class="form-control" name="tel" placeholder="Eg: +44 1234 012345"></span>
          </p>
          <p class="b-head">Message Subject *</p>
          <p class="b-body">
            <span><input type="text" class="form-control" name="subject" placeholder="Subject" required></span>
          </p>
          <p class="b-head">Message *</p>
          <p class="b-body">
            <span><textarea rows="4" class="form-control" name="message" placeholder="Write us a message" required></textarea></span>
          </p>
          <span class="btnGrp"><button class="btn btn-theme" type="submit" name="submit">Send Message</button></span>
        </form>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1247.9459181924408!2d0.18340143328573133!3d51.27631006170999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71bac21b6ff8e6c2!2sAlbert+Dry+Cleaners!5e0!3m2!1sen!2sbd!4v1552478529659" width="100%" height="500" frameborder="0" style="border:7px solid #fff;" allowfullscreen></iframe>
  </div>
</section>
<!-- End Main Page Section -->

<?php include('common/footer.php') ?>





    
