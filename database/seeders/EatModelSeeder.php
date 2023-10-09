<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EatModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\EatModel::factory(1)->create([
            'artical_name' => 'Картошка фри',
            'artical_description' => 'Что там',
            'classification' => 'Фастфуд',
            'previu_img' => 'cola.png',
            'price' => '300',
            'discount' => '-10%',
            
        ]);
    }
}
