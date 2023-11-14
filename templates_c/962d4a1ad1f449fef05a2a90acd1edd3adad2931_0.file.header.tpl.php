<?php
/* Smarty version 4.2.1, created on 2023-11-13 05:23:52
  from 'C:\xampp\htdocs\tp3\TPE_WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6551a4d8a3f4d1_97620474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962d4a1ad1f449fef05a2a90acd1edd3adad2931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp3\\TPE_WEB2\\templates\\header.tpl',
      1 => 1699572816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551a4d8a3f4d1_97620474 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
    <base href="<?php echo BASE_URL;?>
">
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="imagen\sport.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Sports Channel
    </a>
    <ul class="navbar-nav">
        <li>
          <a class="nav-link active" aria-current="page" href="categorias">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jugadores">Jugadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cerrarSesion">Cerrar Sesion</a>
        </li>
    </ul>
  </div>
</nav><?php }
}
