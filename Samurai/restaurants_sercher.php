<?php

function write_data_to_csv(){

    $restaurants = [];
    $response = "hogehoge";
    # isset変数に値が入っているか判別する
    if (isset($response["results"]["error"])){
        return print('エラーが発生しました');
    }

    #print_r 変数の中身を出力する。var_dumpも
    return print_r($restaurants);
}

write_data_to_csv();

?>