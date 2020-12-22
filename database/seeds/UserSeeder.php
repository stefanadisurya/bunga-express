<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Rojali',
                'last_name' => 'Vishka',
                'role' => 'seller',
                'username' => 'rojalivish',
                'email' => 'rojali@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Jalan Gajahmada, nomor 1',
                'phone_number' => '0218465780',
                'gender' => 'Male',
                'image' => 'default.jpg',
                'remember_token' => Str::random(50)
            ],
            [
                'first_name' => 'Angeline',
                'last_name' => 'Wijayanti',
                'role' => 'seller',
                'username' => 'angelinew',
                'email' => 'angeline@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Jalan Adipatiukur, nomor 5, Jakarta Selatan',
                'phone_number' => '08587124709',
                'gender' => 'Female',
                'image' => 'default.jpg',
                'remember_token' => Str::random(50)
            ],
            [
                'first_name' => 'Stefan',
                'last_name' => 'Adisurya',
                'role' => 'member',
                'username' => 'stefanadisurya',
                'email' => 'stefan@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Jalan Anggrek, no. 2',
                'phone_number' => '081725192242',
                'gender' => 'Male',
                'image' => 'user2.jpg',
                'remember_token' => Str::random(50)
            ],
            [
                'first_name' => 'Nicholas',
                'last_name' => 'Owen',
                'role' => 'member',
                'username' => 'nicholasowen',
                'email' => 'nic.owen@hotmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Jalan Z, no. 10',
                'phone_number' => '0218459078',
                'gender' => 'Male',
                'image' => 'user4.jpg',
                'remember_token' => Str::random(50)
            ],
            [
                'first_name' => 'Kathryn',
                'last_name' => 'Kezia',
                'role' => 'member',
                'username' => 'kathrynkezia',
                'email' => 'keke@yahoo.com',
                'password' => bcrypt('123456'),
                'address' => 'Perum. Gading Asri, no. 10',
                'phone_number' => '089847685970',
                'gender' => 'Female',
                'image' => 'user3.jpg',
                'remember_token' => Str::random(50)
            ],
        ]);
    }
}
