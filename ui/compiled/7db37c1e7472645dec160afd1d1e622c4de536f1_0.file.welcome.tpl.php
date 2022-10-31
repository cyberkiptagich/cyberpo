<?php
/* Smarty version 3.1.39, created on 2022-10-11 02:47:48
  from 'F:\xampp\htdocs\ibilling\ui\theme\ibilling\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63451194a412c9_15823909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db37c1e7472645dec160afd1d1e622c4de536f1' => 
    array (
      0 => 'F:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\welcome.tpl',
      1 => 1621336798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63451194a412c9_15823909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75852545563451194a3d220_29951999', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_75852545563451194a3d220_29951999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_75852545563451194a3d220_29951999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
