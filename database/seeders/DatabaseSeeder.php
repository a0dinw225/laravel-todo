<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Todo;
use App\Models\TodoDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        Todo::factory(3)->create(['user_id' => $user->id])
            ->each(function ($todo)  use ($user) {
                TodoDetail::factory(5)->create([
                    'user_id' => $user->id,
                    'todo_id' => $todo->id
                ]);
            });
    }
}
