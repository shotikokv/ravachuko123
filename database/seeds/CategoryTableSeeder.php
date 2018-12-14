<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'ბიჭი', 'slug' => 'ბიჭი', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'გოგო', 'slug' => 'გოგო', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ქალი', 'slug' => 'ქალი', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'კაცი', 'slug' => 'კაცი', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'საშობაო', 'slug' => 'საშობაო', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'For Birthday', 'slug' => 'For Birthday', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'სპორტული', 'slug' => 'სპორტული', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
