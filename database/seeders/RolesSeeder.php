<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;


class RolesSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            [
                'name' => 'admin',
            ],
            [
                'name' => 'reader',
            ],
        ]);
    }
}
?>
