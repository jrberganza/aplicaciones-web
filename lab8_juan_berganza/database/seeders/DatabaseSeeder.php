<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Teacher;
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
        $this->call([
            StudentSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
        ]);

        $courses = Course::all();

        Teacher::all()->each(function ($teacher) use ($courses) {
            $teacher->courses()->attach(
                $courses->random(2)->pluck('id')->toArray()
            );
        });
    }
}
