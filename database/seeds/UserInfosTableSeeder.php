<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserInfosTableSeeder extends Seeder
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
            DB::table('user_infos')->insert([
                'img_path'=>'uploads\\'.$i.'\\profile\\'.$i.'.jpg',
                'name'=>'test'.$i,
                'user_id'=>$i,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
