<?
include('../vendor/autoload.php');
require("../classes/resumo.php");

ini_set('default_charset', 'UTF-8');
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir  = "templates_c";
$smarty->config_dir = "configs";
$moedas = new Moedas();
$showMoedas = $moedas->mostraMoedas();
$smarty->assign("moedas", $showMoedas);
$smarty->display('../views/resumodiario.html');
?>
