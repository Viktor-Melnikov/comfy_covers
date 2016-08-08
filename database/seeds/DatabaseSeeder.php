<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        DB::table ( 'users' )
            ->insert ( [
                           'name'     => 'Виктор',
                           'surname'  => 'Мельников',
                           'email'    => 'vik.melnikov@gmail.com',
                           'password' => Hash::make ( 'qweasdzxc' )
                       ] );

        // $this->call(UsersTableSeeder::class);
    }
}
