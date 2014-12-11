<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/11/14
 * Time: 1:45 PM
 */




use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 5) as $index) {
            User::create([

                'email' => $faker->email,

                'password' => password_hash('testtest', PASSWORD_DEFAULT)

            ]);
        }
    }

}