<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();

        DB::table('users')->insert(array(
                array(
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'username' => 'admin',
                    'password' => Hash::make('admin')
                ),
            )
        );
    }
}
