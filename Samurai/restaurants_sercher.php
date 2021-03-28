<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

#API初期設定
$KEYID = "79ff2e7984130f9d";
$COUNT = 100;
$PREF = "Z011";
$FREEWORD = "渋谷駅";
$FORMAT = 'json';
$PARAMS = array("key" => $KEYID, "count" => $COUNT, "pref" => $PREF,"keyword"=> $FREEWORD,"format" => $FORMAT);


function write_data_to_csv($params){

    $restaurants = [];
    $client = new Client();
    try{
        $json_res = $client->request("GET", "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/", ['query' => $params])->getBody();
    }catch(Exception $e){
        return print("エラーが発生しました。");
    }
    $response = json_decode($json_res,true);
    # isset変数に値が入っているか判別する
    if (isset($response["results"]["error"])){
        return print('エラーが発生しました');
    }

    var_dump($response);
    foreach ($response["results"]["shop"] as &$restaurant){
        $restaurant_name = $restaurant["name"];
        $restaurants[] = $restaurant_name;
    }

    $handle = fopen("restaurants_list.csv","wb");
    fputcsv($handle, $restaurants);
    fclose($handle);
    return print_r($restaurants);

    #print_r 変数の中身を出力する。var_dumpも
    // return print_r($restaurants);

    // if (isset($response["results"]["show"])){
    //     foreach($response["shop"] as &$i){
    //         $restaurant_name = $i["name"];
    //         $restaurants[] = $restaurant_name;
    //     }
    // }
}

write_data_to_csv($PARAMS);

?>