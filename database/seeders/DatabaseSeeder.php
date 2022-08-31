<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ShareAccess;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserTypeSeeder::class]);
        $this->call([UserSeeder::class]);
//        $this->call([ShareAccessSeeder::class]);
        $this->call([LeadTypeSeeder::class]);

    }
}
