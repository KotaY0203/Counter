<?php
require_once('Unicorn.php');
require_once('Counter.php');

class Seed extends Gundam //継承
{
   
    public function equipment()
    {
        // オーバーライド
        parent::equipment();
        echo 'スーパードラグーン 機動兵装ウイング' . '<br>';
        echo 'レール砲';
    }
}
$seed = new Seed('ストライクフリーダム');
echo  'モビルスーツ名は' . $seed->getName();
echo '<br>';

$seed->number = 'ZGMF-X20A';
echo '型式番号' . $seed->number;
echo'<br>';


$seed->pilot = 'キラ・ヤマト';
echo 'パイロットは' . $seed->pilot;
echo '<br>';


echo'装備品は';
$seed->equipment();



echo '<br>' . '<br>';




// カウンタークラスをインスタンス化する
$counter = new Counter();
// カウンターを加算
$counter->increment();
// カウンター値取得
$cnt = $counter->get();

?>

<html>
<head>
<title>モビルスーツ紹介サイト</title>
</head>
<body>
<h1>カウンター</h1>
<p>あなたは<?php echo $cnt; ?>番目の訪問者です</p>

</body>
</html>