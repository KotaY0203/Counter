<?php

class Counter
{
    // カウント値保存ファイル名
    const COUNT_NUMBER = 'count.dat';//constはオブジェクト定数。
    
    // カウンター値取得
    public function get()
    {
        $cnt = 0;
        if (true == file_exists(self::COUNT_NUMBER)) {
            // データ保存ファイルからデータ取得
            $fileOpen = fopen(self::COUNT_NUMBER, 'r'); 
            //fopen ( 開くファイル名またはパス , 開くモード （ , include_path （省略可））); rは読み込みのみ
            $data = fgets($fileOpen);
            //fgets:ファイルポインタから 1 行取得する//trim(は削除
            fclose($fileOpen);
            
            // データが数値ならカウンター値として取得
            //is_numericは関数の引数に指定された変数に数字又数字を表す数値文字列が格納されているかどうかを確認
            if (true == is_numeric($data)) {
                $cnt = $data;
            }
        }
        return $cnt;
    }
    
    // カウンター加算処理
    public function increment()
    {
        // 現在のカウント値を取得
        $cnt = $this->get();
        // カウントを1増やす
        $cnt++;
        // データ保存ファイルに上書きする
        $fileOpen = fopen(self::COUNT_NUMBER, 'w'); //wは書き
        fputs($fileOpen, $cnt);
        fclose($fileOpen);
    }    
}

