<?php
/* Smarty version 3.1.30, created on 2021-05-31 17:02:14
  from "C:\xampp\htdocs\projektkolejny\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b4fa76a79c46_91894961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2fcd0e8289a3d1213ee5e34f0c042561cffc2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\views\\LoginView.tpl',
      1 => 1622473330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60b4fa76a79c46_91894961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200979920860b4fa76a79858_82282968', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_200979920860b4fa76a79858_82282968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
        <legend>Logowanie do systemu</legend>
        <fieldset>
            <div>
                <label for="id_login">login: </label>
                <input id="id_login" type="text" name="login"/>
            </div>
            <div>
                <label for="id_pass">pass: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div>
                <input type="submit" value="zaloguj"/>
            </div>
        </fieldset>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
