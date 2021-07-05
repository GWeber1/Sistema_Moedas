<?php
include('../vendor/autoload.php');
use Opis\Database\Connection;
use Opis\Database\Database;

$connection = new Connection(
  'mysql:host=localhost;dbname=gabrielusina_bolsa',
  'gabrielusina_gabrielusina',
  'mdD=i0B{q-)c'
);
$db = new Database($connection) or die("Deu merda");

$sigla_moedas = isset($_POST["sigla_moedas"]) ? $_POST["sigla_moedas"]: "";
$nome_moedas = isset($_POST["nome_moedas"]) ? $_POST["nome_moedas"]: "";

if ($sigla_moedas != "" && $nome_moedas != "") {
  $result_moedas = $db->insert(array(
      'sigla_moedas' => $sigla_moedas,
      'nome_moedas' => $nome_moedas
  ))
  ->into('moedas');
}
