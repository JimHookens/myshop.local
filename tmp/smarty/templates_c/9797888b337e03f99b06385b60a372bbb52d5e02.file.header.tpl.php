<?php /* Smarty version Smarty-3.1.6, created on 2018-09-25 22:15:10
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13241161505ba79c307208c0-51082630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1537902901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13241161505ba79c307208c0-51082630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ba79c307710b',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba79c307710b')) {function content_5ba79c307710b($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="header">
            <h1>My shop - интернет магазин</h1>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <div id="centerColumn">
       
        <?php }} ?>