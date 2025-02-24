<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         
        $this->call([
            PermissionSeeder::class,
            ProductSeeder::class,
            categoryCategorySeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            ImageProductSeeder::class,
            SiteDataSeeder::class,
            TicketSeeder::class,
            MovingSeeder::class,
        ]);
        $a = Role::query()->create([
            "name"=> "superuser",
        ]);
        $a->permissions()->sync(Permission::all());

        User::factory(10)->create();
        User::insert([
            "name"=> "yacn",
            "username"=> "yacn",
            "email"=> "yacn@gmail.com",
            "password"=> bcrypt("123"),
            'email_verified_at' => now(),
            'phone'=> "09301741497",
            'balance'=> 1000,
            'role_id'=>Role::where('name','superuser')->first()->id,
            'remember_token' => "",
        ]);

    }
}
