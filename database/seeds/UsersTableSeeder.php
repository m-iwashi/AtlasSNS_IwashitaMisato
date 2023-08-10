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
            ['username' => 'Atlas一郎',
            'mail' => 'hoge@test.mail',
            'password' => bcrypt(12345678)],
            ['name' => 'Atlas二郎',
            'mail' => 'hoge@test.mail',
            'password' => bcrypt(13579135)],
            ['name' => 'Atlas三郎',
            'mail' => 'hoge@test.mail',
            'password' => bcrypt(24682468)],
            ['name' => 'Atlas四郎',
            'mail' => 'hoge@test.mail',
            'password' => bcrypt(19283746)],
            ['name' => 'Atlas五郎',
            'mail' => 'hoge@test.mail',
            'password' => bcrypt(98765432)]
        ]);
    }
}
