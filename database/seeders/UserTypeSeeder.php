<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function Sodium\increment;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertypes')->delete();

        $usertypes = [
            [ 'users_type_id'=>1,'type'=>'admin'],
            [ 'users_type_id'=>2,'type'=>'user']
        ];
        foreach ($usertypes as $usertype)
            UserType::create($usertype);
    }

}
