<?php
/* Smarty version 4.2.1, created on 2023-11-10 00:59:27
  from 'C:\xampp\htdocs\tp3\TPE_WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_654d725f0c8c72_11417096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de5d7766f70ab704c056d3255b1f480107d11e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp3\\TPE_WEB2\\templates\\login.tpl',
      1 => 1699572816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_654d725f0c8c72_11417096 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>
  <form action="<?php echo BASE_URL;?>
iniciarSesion" method="post">
    <div class="mb-3">
      <label class="form-label">Mail</label>
      <input type="email" name="mail" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasenia" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">iniciarSesion</button>
  </form>
  <form action="<?php echo BASE_URL;?>
registrar" method="post">
  <h1>Registro</h1>
    <div class="mb-3">
      <label class="form-label">Mail</label>
      <input type="email" name="mail" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasenia" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">registrar</button>
  </form>
  <button type="submit"><a href="home">acceso publico</a></button>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
