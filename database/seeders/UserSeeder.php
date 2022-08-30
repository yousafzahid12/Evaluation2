<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [ 'name' => 'Imran Yousaf', 'email' => 'imran.yousaf@nxb.com.pk', 'password' => bcrypt('A12345678@@'),'user_id'=>1],
            [ 'name' => 'yousaf', 'email' => 'yousaf.zahid@nxb.com.pk','user_id'=>2, 'password' => bcrypt('yousaf@30')],
        ];

        foreach ($users as $user)
        User::create($user);
    }
}
