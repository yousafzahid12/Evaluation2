<?php

namespace Database\Seeders;

use App\Models\ShareAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShareAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('share_access')->delete();

        $access = [
                ['action'=>'full_access'],
                ['action'=>'read_only'],
                ['action'=>'Update'],
                ['action'=>'Delete'],
        ];

        foreach ($access as $access)
            ShareAccess::create($access);
    }

}
