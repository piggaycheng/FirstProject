<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 4; $i++){
            DB::table('users')->insert([
                'name'=>'test'.$i,
                'password'=>Hash::make('123456'),
                'email'=>'test'.$i.'@yahoo.com.tw',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
