<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role_id' => 1,
                'password' => Hash::make('admin123456'),

            ],
            [
                'name' => 'reader',
                'email' => 'reader@reader.com',
                'role_id' => 2,
                'password' => Hash::make('reader123456'),

            ],
        ]);
    }
}
?>
