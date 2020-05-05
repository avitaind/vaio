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
            'name'       => 'Support',
            'email'      => 'support@onepagehk.com',
            'password'   => bcrypt('root'),
            'created_at' => Carbon::now(),
        ]);
    }
}
