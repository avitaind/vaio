<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'       => 'ASHPlan',
            'email'      => 'info@ashplan.media',
            'password'   => bcrypt('Ashplan@1234'),
            'created_at' => Carbon::now(),
        ]);
    }
}
