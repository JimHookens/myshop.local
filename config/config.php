<?php
/**
 * Файл настроек
 */

//>константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//>Используемый шаблон

$template = 'default';

//пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TempletePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

//>Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../Library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<


