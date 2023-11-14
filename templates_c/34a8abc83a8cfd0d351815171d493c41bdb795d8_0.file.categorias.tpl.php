<?php
/* Smarty version 4.2.1, created on 2023-11-14 00:25:58
  from 'C:\xampp\htdocs\tp3\TPE_WEB2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6552b086a679c4_50541284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a8abc83a8cfd0d351815171d493c41bdb795d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp3\\TPE_WEB2\\templates\\categorias.tpl',
      1 => 1699917952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6552b086a679c4_50541284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="list-group-item">Categorias</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <li class="list-group-item">deporte:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->deporte;?>
</li>
        <li class="list-group-item">genero:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</li>
        <li class="list-group-item"></li>
        <button><a href="verCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">visualizacion</a></button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<div class="mb-3">

<form action="filtrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" method="post">
        <label class="form-label">Categoria</label>
        <select name="categoria">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">
                <?php echo (($_smarty_tpl->tpl_vars['categoria']->value->deporte).(" ")).($_smarty_tpl->tpl_vars['categoria']->value->genero);?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        
        <select action="<?php echo BASE_URL;?>
filtrarCategoriaPorOrden/" method="get" name="orden">
        <option value="asc">asc</option>
        <option value="desc">desc</option>
        </select>
    <button type="text" class="btn-filtrar">Submit</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
