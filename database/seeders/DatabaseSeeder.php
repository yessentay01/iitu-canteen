<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Role;
use App\Models\University;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->getRoles();
        $this->getUniversities();
        $this->getCategories();

    }

    public function getRoles()
    {
        $RolesJson = file_get_contents(database_path() . '/roles.json');
        $roles = json_decode($RolesJson, true)['roles'];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    }

    public function getUniversities()
    {
        $UniversitiesJson = file_get_contents(database_path() . '/universities.json');
        $universities = json_decode($UniversitiesJson, true)['universities'];

        foreach ($universities as $university) {
            University::firstOrCreate($university);
        }
    }

    public function getCategories()
    {
        $CategoriesJson = file_get_contents(database_path() . '/categories.json');
        $categories = json_decode($CategoriesJson, true)['categories'];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }
}
