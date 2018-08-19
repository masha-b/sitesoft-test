<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Message;

class UsersMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 4)->create()->each(function ($user) {
            $user->messages()->saveMany(factory(Message::class, rand(1, 2))->make());
        });
    }
}
