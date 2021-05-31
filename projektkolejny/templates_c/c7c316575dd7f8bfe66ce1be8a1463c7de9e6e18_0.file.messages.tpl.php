<?php
/* Smarty version 3.1.30, created on 2021-05-31 16:03:39
  from "C:\xampp\htdocs\projektkolejny\app\views\templates\messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b4ecbbe67df4_81022250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c316575dd7f8bfe66ce1be8a1463c7de9e6e18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\views\\templates\\messages.tpl',
      1 => 1621288889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b4ecbbe67df4_81022250 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div class="messages err">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <div class="messages inf bottom-margin">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
    </div>
<?php }
}
}
