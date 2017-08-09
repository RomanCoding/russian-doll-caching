<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Seed notes table.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Note::class, 10)->create();
    }
}
