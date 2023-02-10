<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\companies;
use App\Models\employees;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $company = companies::factory()->create([
            'name' => 'Jollibee',
            'email' => 'jabibabi@email.com',
            'website' => 'jolihatdog.com',
        ]);

        $company1 = companies::factory()->create([
            'name' => 'Mcdo',
            'email' => 'mcdodo@email.com',
            'website' => 'mcdowater.com',
        ]);

        employees::factory(25)->create([
            'company' => $company->id
        ]);

        employees::factory(25)->create([
            'company' => $company1->id
        ]);
    }
}
