<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // 1
        Category::create([
            'name' => 'T-Shirts & Tops',
        ]);

        // 2
        Category::create([
            'name' => 'Hoodies & Sweatshirts',
        ]);

        // 3
        Category::create([
            'name' => 'Jackets & Coats',
        ]);

        // 4
        Category::create([
            'name' => 'Pants',
        ]);

        // 5
        Category::create([
            'name' => 'Shorts',
        ]);

        // 6
        Category::create([
            'name' => 'Accesories',
        ]);
    }
}
