<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'stor_name' => '仙人',
            'loc' => '東京都',
            'category' => '寿司',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '牛助',
            'loc' => '大阪府',
            'category' => '焼肉',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '戦慄',
            'loc' => '福岡県',
            'category' => '居酒屋',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => 'ルーク',
            'loc' => '東京都',
            'category' => 'イタリアン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '志摩屋',
            'loc' => '福岡県',
            'category' => 'ラーメン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '香',
            'loc' => '東京都',
            'category' => '焼肉',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => 'JJ',
            'loc' => '大阪府',
            'category' => 'イタリアン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => 'らーめん極み',
            'loc' => '東京都',
            'category' => 'ラーメン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '鳥雨',
            'loc' => '大阪府',
            'category' => '居酒屋',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '築地色合',
            'loc' => '東京都',
            'category' => '寿司',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '晴海',
            'loc' => '大阪府',
            'category' => '焼肉',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '三子',
            'loc' => '福岡県',
            'category' => '焼肉',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '八戒',
            'loc' => '東京都',
            'category' => '居酒屋',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '福助',
            'loc' => '大阪府',
            'category' => '寿司',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => 'ラー北',
            'loc' => '東京都',
            'category' => 'ラーメン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '翔',
            'loc' => '大阪府',
            'category' => '居酒屋',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '経緯',
            'loc' => '東京都',
            'category' => '寿司',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '漆',
            'loc' => '東京都',
            'category' => '焼肉',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => 'THE TOOL',
            'loc' => '福岡県',
            'category' => 'イタリアン',
        ];
        DB::table('shops')->insert($param);
        $param = [
            'stor_name' => '木船',
            'loc' => '大阪府',
            'category' => '寿司',
        ];
        DB::table('shops')->insert($param);
    }
}
