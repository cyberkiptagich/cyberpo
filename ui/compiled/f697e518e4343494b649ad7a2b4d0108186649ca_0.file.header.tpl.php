<?php
/* Smarty version 3.1.39, created on 2022-10-11 04:33:45
  from 'F:\xampp\htdocs\ibilling\ui\theme\ibilling\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63452a692d6771_40471192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f697e518e4343494b649ad7a2b4d0108186649ca' => 
    array (
      0 => 'F:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1621336798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63452a692d6771_40471192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
