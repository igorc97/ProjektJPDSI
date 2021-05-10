<?php
require_once dirname(__FILE__).'/config.php';
?>
<!DOCTYPE html>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>Kalkulator</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload landing">
<div id="page-wrapper">

  <!-- Header -->
  <header id="header">
    <h1 id="logo"><a href="index.php">Kalkulator</a></h1>
    <nav id="nav">
      <ul>
        <li><a href="index.php">Home</a></li>

        <li><a href="#idk">Elements</a></li>

      </ul>
    </nav>
  </header>

  <!-- Banner -->
  <section id="banner">
    <div class="content">
      <header>
        <h2>Witaj w kalkulatorze kredytowym</h2>
        <p>
          Powodzenia!</p>
      </header>
      <span class="image"><img src="assets/css/images/pic04.jpg" alt=""/></span>
    </div>
    <a href="#one" class="goto-next scrolly">Next</a>
  </section>
<!--  TODO: dalej nie działa wygląd strony, poniżej cały czas wyświetla /app/calckred.php...-->

  <?php
			include _root_path."/app/calckred.php";
  ?>

  <!-- Footer -->
  <footer id="footer">
    <ul class="icons">
      <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
      <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
      <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><br/><br/>
      <li>Przygotował: Igor Ceglarz</li>
    </ul>
  </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>