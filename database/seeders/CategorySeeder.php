<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            [
                'title' => 'Фантастика',
                'slug'  => 'Fantastic',
                'description' => 'description 1'
            ],
            [
                'title' => 'История',
                'slug'  => 'History',
                'description' => 'description 2'
            ],
            [
                'title' => 'Детективы',
                'slug'  => 'Detectives',
                'description' => 'description 3'
            ],
            [
                'title' => 'Детские книги',
                'slug'  => "Childrens_books",
                'description' => 'description 4'
            ],
            [
                'title' => 'Приключения',
                'slug'  => 'Adventures',
                'description' => 'description 5'
            ],
        ]);
    }
}
?>
