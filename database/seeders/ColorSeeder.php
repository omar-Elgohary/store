<?php
namespace Database\Seeders;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run(): void
    {
        $colors = [
            ['color' => 'red'],
            ['color' => 'blue'],
            ['color' => 'yellow'],
            ['color' => 'black'],
            ['color' => 'purple'],
            ['color' => 'green'],
            ['color' => 'orange'],
            ['color' => 'white'],
            ['color' => 'brown'],
            ['color' => 'gray'],
            ['color' => 'pink'],
            ['color' => 'silver'],
        ];

        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
