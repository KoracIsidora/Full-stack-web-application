<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.html');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/reset.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Alpha by HTML5 UP</title>
</head>

<body>
  <div id="load">
    <div class="loader"></div>
  </div>
  <header>
    <nav class="flex-space">
      <h1><a href="#">Alpha</a> by HTML5 UP</h1>
      <ul class="flex-space">
        <li>
          <a href="#"><button class="nav-btn">Home</button></a>
        </li>
        <li>
          <a href="#"><button class="nav-btn">Layouts</button></a>
        </li>
        <li>
          <a href="logout.php"><button class="nav-btn">Log Out</button></a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="alpha-section flex-center">
    <h2 class="alpha-heading">Alpha</h2>
    <p class="alpha-par">
      Another fine responsive site template freebie by HTML5 UP.
    </p>
    <div class="alpha-holder">
      <a href="#" class="alpha-btns sign-up">Sign Up</a>
      <a href="#" class="alpha-btns learn-more">Learn More</a>
    </div>
  </section>
  <main>
    <section class="main-section">
      <div class="first-wrapper">
        <h2 class="first-heading">
          Introducing the ultimate mobile app for doing stuff with your phone
        </h2>
        <hr />
        <p class="first-paragraph">
          Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus
          nunc ornare adipiscing nunc adipiscing. Condimentum turpis massa.
        </p>
        <img src="./images/prva.jpg" alt="First image" class="first-image" />
      </div>
      <div class="second-wrapper">
        <div class="first-row flex-space">
          <div class="single-item border">
            <img src="./images/home.png" alt="Home image" class="home-img" />
            <h3 class="single-items-heading">Magna etiam</h3>
            <p>
              Integer volutpat ante et accumsan commophasellus sed aliquam
              feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
              dolore magna aliquam veroeros.
            </p>
          </div>
          <div class="single-item">
            <img src="./images/home.png" alt="Home image" class="home-img" />
            <h3 class="single-items-heading">Ipsum dolor</h3>
            <p>
              Integer volutpat ante et accumsan commophasellus sed aliquam
              feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
              dolore magna aliquam veroeros.
            </p>
          </div>
        </div>
        <div class="second-row flex-space">
          <div class="single-item border">
            <img src="./images/home.png" alt="Home image" class="home-img" />
            <h3 class="single-items-heading">Sed feugiat</h3>
            <p>
              Integer volutpat ante et accumsan commophasellus sed aliquam
              feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
              dolore magna aliquam veroeros.
            </p>
          </div>
          <div class="single-item last-single-item">
            <img src="./images/home.png" alt="Home image" class="home-img" />
            <h3 class="single-items-heading">Enim phasellus</h3>
            <p>
              Integer volutpat ante et accumsan commophasellus sed aliquam
              feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
              dolore magna aliquam veroeros.
            </p>
          </div>
        </div>
      </div>
      <div class="third-wrapper flex-space">
        <div class="learn-more-item">
          <img src="./images/druga.jpg" alt="Learn more image" class="learn-more-img" />
          <h3 class="single-items-heading">Sed lorem adipiscing</h3>
          <p class="first-paragraph learn-more-par">
            Integer volutpat ante et accumsan commophasellus sed aliquam
            feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
            dolore magna aliquam veroeros.
          </p>
          <a href="#/"><button class="learn-more-btn" id="first">Learn More</button></a>
        </div>
        <div class="learn-more-item">
          <img src="./images/treca.jpg" alt="Learn more image" class="learn-more-img" />
          <h3 class="single-items-heading">Accumsan integer</h3>
          <p class="first-paragraph learn-more-par">
            Integer volutpat ante et accumsan commophasellus sed aliquam
            feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
            dolore magna aliquam veroeros.
          </p>
          <a href="#/"><button class="learn-more-btn" id="second">Learn More</button></a>
        </div>
      </div>
      <div class="overlay">
        <a class="closebtn">&times;</a>
        <div class="overlay-content first">
          <img src="./images/druga.jpg" alt="Learn more image" class="learn-more-img" />
          <h3 class="single-items-heading">Sed lorem adipiscing</h3>
          <p class="first-paragraph learn-more-par">
            Integer volutpat ante et accumsan commophasellus sed aliquam
            feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
            dolore magna aliquam veroeros.
          </p>
        </div>
        <div class="overlay-content second">
          <img src="./images/treca.jpg" alt="Learn more image" class="learn-more-img" />
          <h3 class="single-items-heading">Accumsan integer</h3>
          <p class="first-paragraph learn-more-par">
            Integer volutpat ante et accumsan commophasellus sed aliquam
            feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan
            dolore magna aliquam veroeros.
          </p>
        </div>
      </div>
    </section>
  </main>
  <footer class="flex-center">
    <div class="footer-wrapper flex-space">
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
      <a href="#">
        <div class="single-item-footer"></div>
      </a>
    </div>
    <p>
      &copy; Untitled. All rights reserved. Design: <a href="#">HTML5 UP</a>
    </p>
  </footer>
  <script src="index.js"></script>
</body>

</html>