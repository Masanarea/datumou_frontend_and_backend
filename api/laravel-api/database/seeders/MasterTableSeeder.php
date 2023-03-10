<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_master')->insert([
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 1,
                'category_value' => '北海道',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 2,
                'category_value' => '青森県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 3,
                'category_value' => '岩手県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 4,
                'category_value' => '宮城県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 5,
                'category_value' => '秋田県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 6,
                'category_value' => '山形県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 7,
                'category_value' => '福島県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 8,
                'category_value' => '茨城県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 9,
                'category_value' => '栃木県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 10,
                'category_value' => '群馬県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 11,
                'category_value' => '埼玉県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 12,
                'category_value' => '千葉県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 13,
                'category_value' => '東京都',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 14,
                'category_value' => '神奈川県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 15,
                'category_value' => '新潟県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 16,
                'category_value' => '富山県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 17,
                'category_value' => '石川県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 18,
                'category_value' => '福井県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 19,
                'category_value' => '山梨県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 20,
                'category_value' => '長野県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 21,
                'category_value' => '岐阜県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 22,
                'category_value' => '静岡県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 23,
                'category_value' => '愛知県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 24,
                'category_value' => '三重県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 25,
                'category_value' => '滋賀県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 26,
                'category_value' => '京都府',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 27,
                'category_value' => '大阪府',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 28,
                'category_value' => '兵庫県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 29,
                'category_value' => '奈良県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 30,
                'category_value' => '和歌山県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 31,
                'category_value' => '鳥取県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 32,
                'category_value' => '島根県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 33,
                'category_value' => '岡山県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 34,
                'category_value' => '広島県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 35,
                'category_value' => '山口県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 36,
                'category_value' => '徳島県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 37,
                'category_value' => '香川県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 38,
                'category_value' => '愛媛県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 39,
                'category_value' => '高知県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 40,
                'category_value' => '福岡県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 41,
                'category_value' => '佐賀県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 42,
                'category_value' => '長崎県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 43,
                'category_value' => '熊本県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 44,
                'category_value' => '大分県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 45,
                'category_value' => '宮崎県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 46,
                'category_value' => '鹿児島県',
                'category_memo' => '都道府県のシード',
            ],
            [
                'created_at' => now(),
                'created_action' => 'シーディング処理での追加',
                'category_type' => 1,
                'category_key' => 47,
                'category_value' => '沖縄県',
                'category_memo' => '都道府県のシード',
            ],
        ]);
    }
}
