<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Hendri Aswar Sitorus',
            'email' => '0702181091@gmail.com',
            'alamat' => 'Medan',
            'hp' => '08528583982',
            'pos' => '984593    ',
            'role' => 1,
            'aktif' => 1,
            'password' => Hash::make('password')
        ]);
    }
}
