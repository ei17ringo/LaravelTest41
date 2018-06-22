<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet; //使用したいモデルファイルを追加

class TweetsController extends Controller
{
    //追加
    public function index(){

      // 変数 = モデル名::Eloquent
      // tweetsテーブルのデータを全件取得
      // SELECT * FROM `tweets`;を実行して取得できた結果をオブジェクトで返す関数
      // 条件指定してデータ取得するときはfindを使用する
      $tweets = Tweet::all();
      // dd($tweets);
      return view('tweets.index',compact('tweets'));
    }

    //一データ表示用
    public function show($id){

      // SELECT * FROM `tweets` WHERE `id`=$id;を実行して取得できた結果をオブジェクトで返す関数
      $tweet = Tweet::findOrFail($id);
      // dd($tweets);
      return view('tweets.show',compact('tweet'));

    }


}
