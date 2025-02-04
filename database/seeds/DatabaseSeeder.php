<?php

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
        $this->call(PermissionTableSeeder::class);

        $this->call(CreateUserSeeder::class);
        $this->call(FoodCategorySeeder::class);
        $this->call(SettingSeeder::class);
    }
}
