<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        Product::create([
            'name' => 'Baby222 Elephant Ring Holder ',
            'slug' => 'Baby Elephant Ring Holder-',
            'details' => 'Baby Elephant Ring Holder-',
            'price' => rand(149999, 249999),
            'description' => 'Elephant They say an elephant never forgets which makes this diminutive silver-plated version a logical partner for helping her remember where she put her rings. The artfully designed elephant makes a delightful addition to her bathroom sink or bedside table. Engraved up to 9 characters. Exclusively from RedEnvelope.
Made of polished silver plate.
Elephant\'s upturned trunk is also a symbol of good-luck.
Elephant\'s upturned trunk and tray base hold her rings safely and securely.
Upgrade to personalized and add a name up to 9 characters.
Item #30250735',
            'image' => 'products/dummy/laptop-.jpg',
            'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
        ])->categories()->attach(1);

        factory(Product::class)->times(30)->create();

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
//        $product = Product::find(1);
//        $product->categories()->attach(2);


    }
}
