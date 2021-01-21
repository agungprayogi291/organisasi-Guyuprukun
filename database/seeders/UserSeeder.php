<?php

namespace Database\Seeders;
use App\models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'mulyadi',
            'level' => 'ketua',
            'phone' => "085800060633",
            'jkel' => "laki-laki",
            'email' => 'mulyadi233@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
