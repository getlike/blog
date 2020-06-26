<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'Автор не изввестен',
                'email'     => 'author_unknown@g.g',
                'password'  => bcrypt(str_random(16)),
            ],
            [
                'name'      => 'Автор',
                'email'     => 'autho',
                'password'  => bcrypt(123123),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
