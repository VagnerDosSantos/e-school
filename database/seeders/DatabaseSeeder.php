<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(1)->create();
        $this->call([
            Helpers\AdditionalActivitySeeder::class,
            Helpers\CitySeeder::class,
            Helpers\CountrySeeder::class,
            Helpers\CourseCatalogSeeder::class,
            Helpers\CourseSeeder::class,
            Helpers\DisciplineSeeder::class,
            Helpers\DistrictSeeder::class,
            Helpers\EducationalInstitutionSeeder::class,
            Helpers\IndigenousLanguageSeeder::class,
            Helpers\SchoolDependencySeeder::class,
            Helpers\StageSeeder::class,
            Helpers\StateSeeder::class,
            Helpers\ClassShiftSeeder::class,
            Helpers\ClassNameSeeder::class,
            Helpers\SpecializedEducationalServiceSeeder::class,
        ]);
    }
}
