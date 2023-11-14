<?php
/* Smarty version 4.2.1, created on 2023-11-13 05:24:00
  from 'C:\xampp\htdocs\tp3\TPE_WEB2\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6551a4e01afc77_64034206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020b6b5f75e2d3727dddf9f33cc518da0d3ba55b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp3\\TPE_WEB2\\templates\\jugadores.tpl',
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
function content_6551a4e01afc77_64034206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="list-group-item">Jugadores</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nacionalidad;?>
</li>
        <li class="list-group-item">(categoria: <?php echo $_smarty_tpl->tpl_vars['categoriasNombres']->value[$_smarty_tpl->tpl_vars['jugador']->value->id_categoria];?>
)</li>
        <button><a href="verJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">visualizacion</a></button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
