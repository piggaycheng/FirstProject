<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'name'=>'test1',
            'password'=>Hash::make('123456'),
            'email'=>'piggaycheng123@yahoo.com.tw'
        ]);
    }
}
