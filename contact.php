<?php 

  if(isset($_POST["submit"])) {
    
    $to = "colehenson@outlook.com";
    $from = $_POST["email"];
    $sender = $_POST["firstname"] . " " . $_POST["lastname"];

    $subject = "Mail from Potential Client";
    $phonenum = $_POST["phonenum"];    
    $message = $_POST["projdesc"];
    $mailBody = "Name: $sender\nEmail: $from\nPhone Number: $phonenum\n\n$message";

    mail($to, $subject, $mailBody, "From: $sender <$from>");

    $thankYou = "<p>Your message has been sent.</p>";
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Portfolio > Gallery - Cole Henson</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="mobinav_bar">
    <ul id="mobinav">
      <li class="mobinav_button first"><a href ="index.html"><img class="mobinav_button" src="img/mobile_bio_inactive.svg" alt="button" /><br /><span>bio</span></a></li>
      <li class="mobinav_button"><a href ="portfolio.html"><img src="img/mobile_gallery_inactive.svg" alt="button" /><span>gallery</span></a></li>
      <li class="mobinav_button last mobicurrent"><a href ="#"><img class="mobinav_button" src="img/mobile_contact_active.svg" alt="button" /><span>contact</span></a></li>
    </ul>
  </div>
  <div class="maingrid">
    <div class="navbar">
      <ul class="nav">
        <li><a href="index.html"><img src=img/bio_inactive.svg alt="gallery nav button active"/><span>bio</span></a></li>
        <li><a href="portfolio.html"><img src=img/gallery_inactive.svg alt="gallery nav button active"/><span>gallery</span></a></li>
        <li><a href="#"><img class="current" src=img/contact_active.svg alt="gallery nav button active"/><span>contact</span></a></li>
      </ul>
    </div>
    <div class="topnav">
      <h1>Contact</h1>
    </div>
    <div class="contactwrapper">
      <div class="mobitopnav">
        <h1>Contact</h1>
      </div>
      <div class="contactbox">
        <div class="contactboxheader">
          <h2>Drop me a line.</h2>
        </div>
        <form id="contactform" action="contact.php" method="post">

          <?= isset($thankYou) ? $thankYou : '' ?>

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Johnny" />

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Appleseed" />

            <label for="mail">Email</label>
            <input type="email" id="mail" name="email" placeholder="name@example.com" />

            <label for="phnum">Phone (optional)</label>
            <input type="tel" id="phnum" name="phonenum" placeholder="(555)-555-5555" />

            <label for="pdesc">Project Description</label>
            <textarea id="pdesc" name="projdesc" placeholder="Tell me about what you want to work on together."></textarea>

            <input id="sendbutton" type="submit" name="submit" value="Send" />


        </form>
      </div>
    </div>
  </div>
  <!-- <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("mobitopnav_links");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script> -->
</body>

</html>
