<?php
require_once('Gundam.php');

class Unicorn extends Gundam //継承
{
   
    public function equipment()
    {
        // オーバーライド
        parent::equipment();
        echo 'ハイパー・バズーカ' . '<br>';
        echo 'サイコフレーム';
    }
}
$unicorn = new Unicorn('ユニコーンガンダム');
echo  'モビルスーツ名は' . $unicorn->getName();
echo '<br>';


$unicorn->pilot = 'バナージ・リンクス';
echo 'パイロットは' . $unicorn->pilot;
echo '<br>';


$unicorn->number = 'RX-0';
echo '型式番号' . $unicorn->number;
echo'<br>';

echo'装備品は';
$unicorn->equipment();



echo '<br>' . '<br>' . '<br>';