<?php
/* Smarty version 3.1.30, created on 2021-05-11 08:47:38
  from "C:\xampp\htdocs\projektkolejny\app\calckred\calckred_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_609a288a77c514_93278640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61638c7d497c8338ce072a8788a489dbc94fe1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\calckred\\calckred_view.html',
      1 => 1620715370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a288a77c514_93278640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652076178609a288a77c029_34097283', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.php"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'content'} */
class Block_652076178609a288a77c029_34097283 extends Smarty_Internal_Block
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
<!--    TODO: przycisk nie działa-->
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

</code></pre>

<?php
}
}
/* {/block 'content'} */
}
