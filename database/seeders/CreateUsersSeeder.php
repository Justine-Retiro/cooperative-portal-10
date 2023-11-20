<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'account_number'=>'123456',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'account_number'=>'123123',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'account_number'=>'01123456',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}