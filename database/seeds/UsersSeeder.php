<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        User::create(array(
            'name'     => 'Admin User',
            'user_name' => 'admin',
            'email'    => 'admin@fakemail.com',
            'password' => bcrypt('admin!!!'),
            'status'   => '1',
            'type'     => 'A'
        ));
    }
}
