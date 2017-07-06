<?php

use Illuminate\Database\Seeder;

class UsersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "chayawee chueapaya";
        $user->username = "kitkat08";
        $user->email = "chayawee_ch59@live.rmutl.ac.th";
        $user->password = bcrypt(value('80839'));
        $user->save();
    }
}
