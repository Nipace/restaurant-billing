<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'app_name' => 'Tapari',
            'restaurant_name' => 'Tapari Restaurant',
            'restaurant_address' => 'Kathmandu , Nepal',
            'contact_number' => '0123456789',
            'restaurant_logo' => 'setting/healthy-eating.png',
        ]);
    }
}
