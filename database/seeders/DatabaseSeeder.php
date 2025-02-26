<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Settings;
use App\Models\Shelter;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    public function run(): void {

        Slider::unguard();
        $tablePath = public_path('db/slider.sql');
        DB::unprepared(file_get_contents($tablePath));

        User::unguard();
        $tablePath = public_path('db/users.sql');
        DB::unprepared(file_get_contents($tablePath));

        About::unguard();
        $tablePath = public_path('db/about.sql');
        DB::unprepared(file_get_contents($tablePath));

        Settings::unguard();
        $tablePath = public_path('db/settings.sql');
        DB::unprepared(file_get_contents($tablePath));

        Shelter::unguard();
        $tablePath = public_path('db/shelters.sql');
        DB::unprepared(file_get_contents($tablePath));

    }
}
