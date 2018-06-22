<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Tweet;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard(); //マスアサインメントをOFFにする

        // $this->call('UserTableSeeder');

        // tweetsテーブルにテストデータを作る処理を呼び出して実行
        $this->call('TweetsTableSeeder');

        Model::reguard(); //マスアサインメントをONにする
    }
}

//Seederを継承して、TweetsTableSeederを作成
class TweetsTableSeeder extends Seeder{

    // テストデータを１０件作成する
    public function run(){

        //フェイクの文章をランダムに作成する
        $faker = Faker::create('en_US');

        for ($i=0; $i < 10 ; $i++) { 
            Tweet::create([
                    'title' => $faker->sentence(),
                    'content' => $faker->paragraph()
                    // 'published_at' => Carbon::today()
                ]);
        }

    }

}
