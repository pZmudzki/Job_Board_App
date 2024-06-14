<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Employer;
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
        User::factory()->create([
            'name' => 'Piotr Żmudzki',
            'email' => 'piotr.zmudzki47@gmail.com'
        ]);
        User::factory(300)->create();

        $users = User::all()->shuffle();

        for ($i = 0; $i <= 20; $i++) {
            Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = Employer::all();

        for ($i = 0; $i <= 100; $i++) {
            Job::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }
    }
}
