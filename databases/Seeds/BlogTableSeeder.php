<?php

namespace ConfrariaWeb\Blog\Databases\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /*$domain = DB::table('posts')->where('url', 'confrariaimob.com.br')->doesntExist();
        if ($domain) {
            DB::table('domains')->insert([
                'url' => 'confrariaimob.com.br',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }*/
    }

}
