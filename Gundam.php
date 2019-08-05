<?php


class Gundam
{
    // プロパティ
    public $number;
    private $name;
    public $pilot;
    // インスタンス化した時に自動で呼ばれるメソッド
    public function __construct($name)
    {
        // $this === このクラスのインスタンス。Gundamクラスのインスタンスのnameプロパティに、変数$nameを代入
        $this->name = $name;
    }

    public function equipment()
    {

        $equipments = ['ビームサーベル', 'ビームライフル', 'シールド'];
        foreach ($equipments as $equipment){
            echo $equipment . '<br>';
        }
    }


    public function getName()
    {
        return $this->name;
    }

    }


$gundam = new Gundam('ファーストガンダム');
echo  'モビルスーツ名は' . $gundam->getName();
echo '<br>';

$gundam->pilot = 'アムロ・レイ';
echo 'パイロットは' . $gundam->pilot;
echo '<br>';


$gundam->number = 'RX-78-2';
echo '型式番号' . $gundam->number;
echo'<br>';

echo'装備品は';
$gundam->equipment();





echo '<br>' . '<br>';