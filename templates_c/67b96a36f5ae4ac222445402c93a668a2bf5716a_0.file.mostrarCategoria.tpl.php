<?php
/* Smarty version 4.2.1, created on 2023-11-13 21:59:50
  from 'C:\xampp\htdocs\tp3\TPE_WEB2\templates\mostrarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65528e46a78da3_71907358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b96a36f5ae4ac222445402c93a668a2bf5716a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp3\\TPE_WEB2\\templates\\mostrarCategoria.tpl',
      1 => 1699572816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65528e46a78da3_71907358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>Categoria</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->deporte;?>
 - <?php echo $_smarty_tpl->tpl_vars['categoria']->value->genero;?>
</li>
    </ul>
    <h2 class="list-group-item">jugador:</h2>
    <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <li class="list-group-item">nombre:<?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</li>
            <li class="list-group-item">nacionalidad:<?php echo $_smarty_tpl->tpl_vars['jugador']->value->nacionalidad;?>
</li>
            <li></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
