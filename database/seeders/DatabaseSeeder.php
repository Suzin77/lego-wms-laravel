<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $testUser = User::where('name','test1234')->firstOrFail();
        if(! $testUser) {
            User::factory()->create([
                'name'=> 'test1234',
                'email'=> 'test@wp.pl',
            ]);
        } else {
            dd('juz jest');
        }
    }
}
