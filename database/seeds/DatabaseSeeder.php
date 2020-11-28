<?php

use Illuminate\Database\Seeder;
use App\Models\Admins\Admin;
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
        $admin = Admin::create([
            'name' => 'admin',
            'email' => config('access.admin.email'),
            'password' => bcrypt(config('access.admin.password')),
            'role'  => 1,
            'status' => 1,
        ]);
    }
}
