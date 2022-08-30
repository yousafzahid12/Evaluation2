<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LeadType;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeadTypeSeeder extends Seeder
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
            [ 'name' => 'Imran Yousaf']
        ];

        foreach ($leads as $lead)
            LeadType::create($lead);
    }
}
