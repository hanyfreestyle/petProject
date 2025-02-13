<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    public function run(): void {
        User::unguard();
        $tablePath = public_path('db/users.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
