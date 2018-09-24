<?php /* Smarty version Smarty-3.1.6, created on 2018-09-24 23:49:49
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11012313435ba7a1b0668213-06239553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1537822186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11012313435ba7a1b0668213-06239553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ba7a1b06a916',
  'variables' => 
  array (
    'rsCategories' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba7a1b06a916')) {function content_5ba7a1b06a916($_smarty_tpl) {?>
        <div id="LeftColumn">
            <div id="LeftMenu">
                <div class="menuCaption">Меню:</div>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><br>
                 <?php } ?>   
            </div>
        </div><?php }} ?>