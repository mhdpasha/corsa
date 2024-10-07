<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Form;
use App\Models\User;
use App\Models\Message;
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

        // User Starter Account
        $user1 = User::create([
            'name' => 'Pasha',
            'email' => 'pasha@gmail.com',
            'department' => 'IT',
            'password' => 'pasha123',
            'view_password' => 'pasha123',
            'role' => 'admin',
        ]);
        $user2 = User::create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'department' => 'HK',
            'password' => 'john123',
            'view_password' => 'john123',
            'role' => 'admin',
        ]);
        $user3 = User::create([
            'name' => 'Kevin',
            'email' => 'kevin@gmail.com',
            'department' => 'FO',
            'password' => 'kevin123',
            'view_password' => 'kevin123',
            'role' => 'admin',
        ]);


        $request1 = IncomingRequest::create([
            'status' => 'cleared',
            'type' => 'Maintenance',
            'title' => 'Window Broken',
            'location' => 'Room 301',
            'description' => 'Window frame is broken',
            'picture' => null,
            'requestor_id' => $user1->id,
            'receiver_id' => $user2->id,
            'slug' =>  Str::orderedUuid()
        ]);
        $request2 = IncomingRequest::create([
            'status' => 'accepted',
            'type' => 'Housekeeping',
            'title' => 'Bedsheets',
            'location' => 'Room 303',
            'description' => 'Bedsheets Torn',
            'picture' => null,
            'requestor_id' => $user2->id,
            'receiver_id' => $user1->id,
            'slug' =>  Str::orderedUuid()
        ]);
        $request3 = IncomingRequest::create([
            'status' => 'new',
            'type' => 'Lost and Found',
            'title' => 'Locker',
            'location' => 'Room 307',
            'description' => 'Locker broken',
            'picture' => null,
            'requestor_id' => $user3->id,
            'receiver_id' => $user2->id,
            'slug' =>  Str::orderedUuid()
        ]);
        
        Message::create([
            'user_id' => $user2->id,
            'request_id' => $request3->id,
            'content' => 'Test Message'
        ]);
        Message::create([
            'user_id' => $user3->id,
            'request_id' => $request3->id,
            'content' => 'Test Message'
        ]);


        Form::create([
            'location' => 'Ballroom',
            'floor' => '1'
        ]);
        Form::create([
            'location' => 'Restaurant',
            'floor' => '2'
        ]);
        Form::create([
            'location' => 'Fitness Center',
            'floor' => '3'
        ]);
        Form::create([
            'location' => 'Spa',
            'floor' => '12'
        ]);
    }
}
