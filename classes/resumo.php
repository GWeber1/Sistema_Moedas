<?
include ('../vendor/autoload.php');
use Opis\Database\Connection;
use Opis\Database\Database;

ini_set('default_charset', 'UTF-8');
class Moedas {
  public function mostraMoedas() {
    $connection = new Connection(
      'mysql:host=localhost;dbname=gabrielusina_bolsa',
      'gabrielusina_gabrielusina',
      'mdD=i0B{q-)c'
      );
      $db = new Database($connection);

      $result_moedas = $db->from('moedas')
        ->orderBy('id_moedas', 'asc')
        ->select(['id_moedas', 'sigla_moedas', 'nome_moedas'])
        ->all();

    $showMoedas = $result_moedas;
    return $showMoedas;
  }

  public function deleteMoedas($id_moeda) {
    $connection = new Connection(
      'mysql:host=localhost;dbname=gabrielusina_bolsa',
      'gabrielusina_gabrielusina',
      'mdD=i0B{q-)c'
      );
      $db = new Database($connection);

      $result_moedas = $db->from('moedas')
        ->where('id_moedas')->$id_moeda
        ->delete();
  }
}
