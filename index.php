<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simple One Page Website</title>
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
        <link href="stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>
  <header class="header-wrapper">
    <div class="header-content">
      <h1>Site Name</h1>
      <div>This image is a logo placeholder:</div>
      <img src="http://lorempixel.com/200/100" />
      <nav role="navigation" class="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="body">
    <section id="about">
      <h2>About Me</h2>
      <p>Talkin' about a revolution</p>
    </section>
    <section id="portfolio">
      <h2>Portfolio</h2>
      <p>You wanna see my piece(s of work), yo?</p>
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
      <img src="http://lorempixel.com/400/300" />
    </section>
    <section id="contact">
    <form name="contact-form" id="contact" method="post" action="contact.php">
    <h2>Send your request now</h2>
    <p>You're a person who knows what you want. Let us know your thoughts by filling out this short form and we'll get back to you asap. We promise.<br>
      A * means your must fill in that field.</p>
      <label>Name*:</label>
        <input type="text" placeholder="What is your name?" name="name" id="name" required>
      <label>Location*:</label>
        <input type="text" placeholder="What's your general location?" name="location" id="location" required>
      <label>Phone:</label>
        <input type="tel" placeholder="What is your phone number?" name="phone" id="phone">
      <label>Email*:</label>
        <input type="email" placeholder="youremail@email.com" name="email" id="email" required>
      <label>Message*</label>
        <textarea type="text" placeholder="So, what do you want to tell us?" name="message" id="message" required></textarea>
        <input class="submit" type="submit" name="Submit" value="Send">
    </form>
    </section>
  </section>
  <footer class="footer">
    <section class="1">
      <h2>Footer Section 1</h2>
    </section>
    <section class="2">
      <h2>Footer Section 2</h2>
    </section>
        <section>
      <h2>Footer Section 3</h2>
    <section class="3">
  </footer>
</body>
</html>
