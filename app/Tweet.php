<?php

// app/Tweet.php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Modelクラスを継承してTweetクラスをつくる
class Tweet extends Model
{
    //ここで指定したカラムだけを挿入可能にする
    protected $fillable = ['title','content'];
}
