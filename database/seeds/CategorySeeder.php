<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Spatie\Tags\Tag;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $baseTitle = [
            "Food","Litter","Toy","Accessories","Bag & Cage","Beauty & Grooming","Clothing","Training","Others"
        ];
        foreach ($baseTitle as $key => $value) {
            $category = new Category();
            $category->name = $value;
            $category->slug = strtolower($value);
            $category->type = 'product';
            $category->save();
        }

        Tag::findOrCreate('cats', 'product');
        Tag::findOrCreate('cute', 'product');
        Tag::findOrCreate('kitten', 'product');
        Tag::findOrCreate('toy', 'product');
        Tag::findOrCreate('funny', 'product');
        Tag::findOrCreate('funny', 'product');

    }
}
