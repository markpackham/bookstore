<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // we're only using Author once so we may as well write the path
        // in here rather than use a "use" statement at the top
        \App\Models\Author::factory(5)->create();
    }
}
