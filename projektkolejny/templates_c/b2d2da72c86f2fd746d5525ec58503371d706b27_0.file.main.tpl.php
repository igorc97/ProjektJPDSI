<?php
/* Smarty version 3.1.30, created on 2021-05-31 18:41:58
  from "C:\xampp\htdocs\projektkolejny\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b511d6b89d34_09172554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d2da72c86f2fd746d5525ec58503371d706b27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\views\\templates\\main.tpl',
      1 => 1622477644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b511d6b89d34_09172554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<?php
';?>require_once dirname(__FILE__).'/config.php';
<?php echo '?>';?>
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

        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>

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
      <span class="image"><img src="assets/css/images/pic04.jpg" alt="tu powinnien być obrazek"/></span>
    </div>
    <a href="#idk" class="goto-next scrolly">Next</a>
  </section>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67577947760b511d6b89650_14443685', 'content');
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
/* {block 'content'} */
class Block_67577947760b511d6b89650_14443685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślne coś tam <?php
}
}
/* {/block 'content'} */
}
