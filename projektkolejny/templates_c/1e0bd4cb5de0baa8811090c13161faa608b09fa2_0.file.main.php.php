<?php
/* Smarty version 3.1.30, created on 2021-05-10 23:21:33
  from "C:\xampp\htdocs\projektkolejny\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6099a3dd39c863_86769718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0bd4cb5de0baa8811090c13161faa608b09fa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\templates\\main.tpl',
      1 => 1620681693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6099a3dd39c863_86769718 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link rel="stylesheet" href="[$conf->app_url]/assets/css/main.css" />
  <noscript><link rel="stylesheet" href="[$conf->app_url]/assets/css/noscript.css" /></noscript>
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

  <?php echo '<?php
			';?>include $conf->root_path."/app/calckred.php";
  <?php echo '?>';?>

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
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
