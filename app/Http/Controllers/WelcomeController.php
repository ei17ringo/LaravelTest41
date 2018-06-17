<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// クラスの中には
// プロパティ（クラスの特徴を表す要素）変数に近い形で記述
// メソッド（クラスの特徴を使用して行う仕事（処理））関数の形で記述
// を作ることができる
class WelcomeController extends Controller
{
    //indexメソッドを追加
    public function index(){
        return view("welcome");
    }

    // contactメソッドを追加
    public function contact(){
        return view("contact");
    }
}
