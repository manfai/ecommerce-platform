<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建 10 个商品
        $tags = factory(\App\Models\Tag::class, 10)->create();
        foreach ($tags as $tag) {
            $products = Product::inRandomOrder()->limit(3)->get();
            foreach ($products as $product) {
                factory(\App\Models\ProductTag::class, 1)->create(['tag_id' => $tag->id, 'product_id' => $product->id]);
            }
        }
    }
}
