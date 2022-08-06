<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User; //IMPORT MODEL APP/USER.PHP

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin')
        ]);
    }
}