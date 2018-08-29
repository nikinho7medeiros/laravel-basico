<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	User::create([
		'name'=> 'Nikolas Medeiros',
		'email'=>'nikolas.medeiros@csktech.com.br',
		'password'=> bcrypt('1234567')
	]);
    }
}
