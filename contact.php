<?php
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <enctype=multipart/form-data>
  <title>Faith Anne Art & Portraits</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="css/modules.css" rel="stylesheet">
  <link href="css/grid.css" rel="stylesheet">
  <link href="css/type.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/xss2ipw.css">
</head>
<body>

  <div id="top" class="grid">
    <div class="unit fixed xs-0 m-1-4 unit-content-center-vertical height-win-full">
      <nav role="navigation" class="text-upper milli island-1-2">
        <ul class="list-group">
          <li class="push-2 pad-t-2">
            <a href="index.html">
              <i class="icon i-128">
                <img class="img-flex" src="images/pastel-profile.png" alt="Circlular pastel blue logo">
              </i>
            </a>
          </li>
          <li class="push"><a class="nav-text" href="https://faithanneart.wixsite.com/faithanneportfolio" target="_blank">Portfolio</a></li>
          <li class="push"><a class="nav-text" href="pricing.html">Shop</a></li>
          <li class="push"><a class="nav-text" href="about.html">About</a></li>
          <li class="push-2"><a class="nav-text current" href="contact.html">Contact</a></li>
        </ul>

        <ul class="list-group">
          <li class="push-1-4">
            <a href="https://www.facebook.com/faithanneartist/?ref=bookmarks">
              <i class="icon i-32">
                <img class="img-flex" src="icons/facebook.png" alt="Facebook icon">
              </i>
            </a>
          </li>
          <li class="push-1-4">
            <a href="https://www.instagram.com/faithanneart/?hl=en">
              <i class="icon i-32">
                <img class="img-flex" src="icons/instagram.png" alt="Instagram icon">
              </i>
            </a>
          </li>
          <li class="push-1-4">
            <a href="mailto:faithanneart@gmail.com">
              <i class="icon i-32">
                <img class="img-flex" src="icons/email.png" alt="Email icon">
              </i>
            </a>
          </li>
          <li class="push-1-4">
            <a href="https://www.pinterest.ca/sparklytiger13/">
              <i class="icon i-32">
                <img class="img-flex" src="icons/pinterest.png" alt="Pinterest icon">
              </i>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="unit xs-1 m-0">
      <a class="text-center center-content" href="index.html">
        <img class="img-flex long-logo" src="images/long-logo.png" alt="Horizontal version of brand logo">
      </a>
      <nav class="mobile-nav" role="navigation">
        <ul class="list-group text-upper text-center">
          <li><a class="nav-text island-1-2" href="https://faithanneart.wixsite.com/faithanneportfolio" target="_blank">Portfolio</a></li>
          <li><a class="nav-text island-1-2" href="pricing.html">Shop</a></li>
          <li><a class="nav-text island-1-2" href="about.html">About</a></li>
          <li><a class="nav-text island-1-2 current" href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="unit unit-offset-m-1-4 xs-1 m-3-4 island grid unit-content-center-vertical form">
        <section class="unit width-full text-center">
          <h1 class="roboto gutter-1-2 tk-texas-hero not-bold nina">Get in Touch</h1>
          <p></p>
        </section>
        <form name="myemailform" role="search" class="unit" id="form" method="POST" action= "contact.php">
          <h2 class="visually-hidden">Form to contact Faith Anne of Faith Anne Art and Portraits</h2>
          <div class="grid milli">
            <div class="push unit xs-1 m-1-2 gutter-1-2">
              <label>Name</label>
              <input name="name">
            </div>
            <div class="push unit xs-1 m-1-2 gutter-1-2">
              <label>Email</label>
              <input name="email" type="email" required>
            </div>
            <div class="push unit xs-1 m-1-2 gutter-1-2 ">
              <label>Inquiry</label>
              <select name="inquiry">
                <option>Place an Order</option>
                <option>Ask a Question</option>
                <option>Other</option>
              </select>
            </div>
            <div class="push unit xs-1 m-1-2 gutter-1-2">
              <label>Upload Pet Photo</label>
              <input name="photo" type="file" accept="image/png, image/jpeg">
            </div>
            <div class="push unit xs-1 gutter-1-2">
              <label>Message</label>
              <textarea name="message" rows="8" cols="80" required></textarea>
            </div>
            <div class="center-content gutter-1-2">
              <button class="island-1-2 gutter-2 text-upper" type="submit">Submit</button>
            </div>
          </div>
        </form>
    </div>

</body>
</html>
