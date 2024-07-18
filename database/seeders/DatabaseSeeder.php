<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\IncomingRequest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Pasha',
            'email' => 'pasha@gmail.com',
            'departement' => 'IT',
            'password' => 'pasha123',
            'view_password' => 'pasha123',
            'role' => 'admin',
        ]);
        $user2 = User::create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'departement' => 'HK',
            'password' => 'john123',
            'view_password' => 'john123',
            'role' => 'admin',
        ]);
        IncomingRequest::create([
            'status' => 'new',
            'type' => 'Maintenance',
            'title' => 'Window Broken',
            'location' => 'Room 301',
            'description' => 'Window frame is broken',
            'picture' => null,
            'requestor_id' => $user1->id,
            'receiver_id' => $user2->id,
            'slug' =>  Str::orderedUuid()
        ]);
        IncomingRequest::create([
            'status' => 'accepted',
            'type' => 'Housekeeping',
            'title' => 'Bedsheets',
            'location' => 'Room 303',
            'description' => 'Bedsheets Torn',
            'picture' => 'yes',
            'requestor_id' => $user2->id,
            'receiver_id' => $user1->id,
            'slug' =>  Str::orderedUuid()
        ]);
    }
}
