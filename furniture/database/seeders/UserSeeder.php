<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> name       = "E-Commerce K-6";
        $user -> email      = "ecommercek6@gmail.com";
        $user -> password   = bcrypt("ecommercek6");
        $user -> phone      = "085810006042";
        $user -> alamat     = "Yogyakarta";
        $user -> role       = "admin";//kita akan membuat akun atau users in dengan role admin
        $user -> save();
    }

    public function down()
    {
        Schema::dropIfExist('users');
    }
}
