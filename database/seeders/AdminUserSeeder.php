<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@gmail.com';
        $password = '12345';

        $user = User::where('email', $email)->first();

        if ($user) {
            $user->name = 'Admin';
            $user->password = bcrypt($password);
            $user->is_admin = true;
            $user->save();
            $this->command->info("Updated admin user: {$email}");
        } else {
            User::create([
                'name' => 'Admin',
                'email' => $email,
                'password' => bcrypt($password),
                'is_admin' => true,
            ]);
            $this->command->info("Created admin user: {$email}");
        }
    }
}
