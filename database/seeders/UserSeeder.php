<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=10 ; $i++){
            User::create([
                'full_name' => 'Hardik',
                'organization_id'=> 1,
                'email' => Str::random(5).'@gmail.com',
                // 'date_of_birth' => mt_rand(1000,2021).'-0'.mt_rand(1,9).'-0'.mt_rand(1,9),
                'address' => 'Hardik',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
