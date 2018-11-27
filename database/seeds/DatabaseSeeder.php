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
        factory(MyStock\TypeProduct::class, 5)->create()->each(function (MyStock\TypeProduct $type) {

            factory(MyStock\Product::class,100)->create([
                'type_id' => $type->id
            ]);
        });
    }
}
