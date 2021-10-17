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
            Helpers\CountrySeeder::class,
            Helpers\StateSeeder::class,
            Helpers\CitySeeder::class,
            Helpers\DistrictSeeder::class,
            Helpers\EducationalInstitutionSeeder::class,
            Helpers\AdditionalActivitySeeder::class,
            Helpers\CertificateProgramSeeder::class,
            Helpers\DegreeSeeder::class,
            Helpers\SchoolSubjectSeeder::class,
            Helpers\IndigenousLanguageSeeder::class,
            Helpers\SchoolDependencySeeder::class,
            Helpers\GradeSeeder::class,
            Helpers\ClassShiftSeeder::class,
            Helpers\ClassNameSeeder::class,
            Helpers\SpecializedEducationalServiceSeeder::class,
        ]);
    }
}
