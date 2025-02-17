<?php

namespace Database\Seeders;



use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            categoryCategorySeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            ImageProductSeeder::class,
            SiteDataSeeder::class,
            TicketSeeder::class,
            MovingSeeder::class,
        ]);

    }
}
