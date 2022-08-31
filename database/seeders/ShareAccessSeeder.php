<?php

namespace Database\Seeders;

use App\Models\LeadType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShareAccess extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lead_type')->delete();

        $leads = [
            [ 'name' => 'NextBridge'],
            [ 'name' => 'Vteams'],
        ];

        foreach ($leads as $lead)
            LeadType::create($lead);
    }
    }
}
