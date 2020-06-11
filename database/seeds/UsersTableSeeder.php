<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@example.com';
        $user->is_admin = true;
        $user->save();

        $user2 = User::find(2);
        $user2->name = 'Switch';
        $user2->email = 'switch_zhou@163.com';
        $user2->password = bcrypt('111111');
        $user2->is_admin = true;
        $user2->save();
    }
}
