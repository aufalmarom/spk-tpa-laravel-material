<?php

use Illuminate\Database\Seeder;
use App\Data;
use App\Atribut;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Query Builder

        $isiatribut=[
            ['username' => "aufal", 'password' => bcrypt("asikasikjos"), 'fullname' => "Aufal Marom", 'access_level' => "Admin"],
            ['username' => "yudi", 'password' => bcrypt("ekowindarto"), 'fullname' => "Yudi Eko", 'access_level' => "Manager"],
            ['username' => "cahyo", 'password' => bcrypt("dwinugroho"), 'fullname' => "Dwi Cahyo", 'access_level' => "User"]

        ];

        DB::table('actors')->insert($isiatribut);

        //Eloquent ORM

        // Atribut::created([
        //     'daerah' => "Gondang",
        //     'nilai' => 60
        // ]);

        // factory(App\Atribut::Class, 50)-> create();
    }
}
