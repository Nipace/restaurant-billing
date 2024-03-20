<?php

use App\Category;
use App\Food;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1=Category::create([
            'name' => 'Momo',
            'category_image'=>'category/momo.png'
        ]);
        $category2=Category::create([
            'name' => 'Icecream',
            'category_image'=>'category/icecream.png'
        ]);

        Food::create([
            'name' => 'Buff Momo',
            'price' => 200,
            'category_id'=>$category1->id,
            'food_image'=>'food/buff-momo.png'
        ]);
        Food::create([
            'name' => 'Veg Momo',
            'price' => 100,
            'category_id'=>$category2->id,
            'food_image'=>'food/veg-momo.png'
        ]);
        Food::create([
            'name' => 'Chicken Momo',
            'price' => 150,
            'category_id'=>$category2->id,
            'food_image'=>'food/chicken-momo.png'
        ]);
        Food::create([
            'name' => 'Strawberry Icecream',
            'price' => 100,
            'category_id'=>$category2->id,
            'food_image'=>'food/strawberry-icecream.png'
        ]);
        
    }
}
