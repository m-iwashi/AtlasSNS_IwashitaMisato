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
        DB::table('Users')->insert([
            ['username' => 'Atlas一郎',
            'mail' => 'hoge@test.mail',
            'password' => Hash::make($password)],
            ['name' => 'Atlas二郎',
            'mail' => 'hoge@test.mail',
            'password' => Hash::make($password)],
            ['name' => 'Atlas三郎',
            'mail' => 'hoge@test.mail',
            'password' => Hash::make($password)],
            ['name' => 'Atlas四郎',
            'mail' => 'hoge@test.mail',
            'password' => Hash::make($password)],
            ['name' => 'Atlas五郎',
            'mail' => 'hoge@test.mail',
            'password' => Hash::make($password)]
        ]);
    }
}
