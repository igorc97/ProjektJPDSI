<?php
/* Smarty version 3.1.30, created on 2021-05-17 12:09:14
  from "C:\xampp\htdocs\projektkolejny\app\views\calckred_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a240ca865b49_77412242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0186e999b5f02f3b3acb0b820c52687c6d3d8a56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\views\\calckred_view.html',
      1 => 1621244344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.php' => 1,
  ),
),false)) {
function content_60a240ca865b49_77412242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196668780060a240ca864e77_26454117', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_196668780060a240ca864e77_26454117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p id="idk">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
		<label for="id_y">Na ile lat?:  </label>
		<input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" />
        <label for="id_z">Oprocentowanie: </label>
        <input id="id_z" type="text" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" />
	</fieldset>
    <input type="submit" id="przycisk" value="Oblicz" class="pure-button pure-button-primary"/>
</form>
</p>

<pre><code id="kod">
Tu zostanie wyświetlony wynik :)
    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    Wystąpiły błędy:
    <?php echo $_smarty_tpl->tpl_vars['err']->value;?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    Informacje:
    <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>

    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    Wynik:
    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    <?php }?>
<!--TODO: Poprawić to! -->
</code></pre>

<?php
}
}
/* {/block 'content'} */
}
