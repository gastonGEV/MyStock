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
        //$this->call(UsersTableSeeder::class);
        factory(MyStock\Combo::class, 2)->create()->each(function(MyStock\Combo $combo) {
            
            factory(MyStock\ProCombo::class,5)->create([
                'combo_id' => $combo->id,
                'product_id' => function () {
                    return factory(MyStock\Product::class)->create([
                        'type_id' => function () {
                            return factory(MyStock\TypeProduct::class)->create()->id;
                        }])->id;
                }
            ]);
        });

        factory(MyStock\TypeProduct::class, 10)->create()->each(function(MyStock\TypeProduct $type){
            
            factory(MyStock\Product::class,5)->create([
                'type_id' => $type->id
            ]);
        });

        
    }
}
