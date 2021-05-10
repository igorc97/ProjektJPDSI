<?php
/* Smarty version 3.1.30, created on 2021-05-11 00:19:35
  from "C:\xampp\htdocs\projektkolejny\app\calckred_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6099b17707b738_10551588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '364b5e21b954fe8210dc6fce9d35251eca4ab287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektkolejny\\app\\calckred_view.html',
      1 => 1620685174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6099b17707b738_10551588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<p id="idk">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/calckred.php" method="post" class="pure-form pure-form-stacked">
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



    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
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
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
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
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <h4>Wynik</h4>
    <p class="res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

    </p>
    <?php }?>





<pre><code id="kod">
Tu zostanie wyświetlony wynik :)

{
    <?php echo '<?php ';?>if (isset($result)) {
    echo 'Miesięczny koszt kredytu to(powiedzmy, że): '.$result;
} <?php echo '?>';?>
}

</code></pre>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.php"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
}
