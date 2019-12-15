<?php

use Illuminate\Database\Seeder;
use App\Acme\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TodoTableSeeder::class);
    }
}

/*
Todo Table Seeds / Data
*/
class TodoTableSeeder extends Seeder {

    public function run()
    {
        // $count = 5;
        // factory(Todo::class, $count)->create();

        $lists = json_decode(file_get_contents(database_path().'/seeds/json/todos.json'), true);
        foreach($lists as $list) {
        DB::table('todos')->insert([
            'list' => $list['list'],
        ]);
        }
    }
}

