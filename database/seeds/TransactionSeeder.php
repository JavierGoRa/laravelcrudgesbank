<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'account_id' => '1',
            'fechaHora' => '2018-2-12',
            'tipo' => 'I',
            'cantidad' => '600'
        ]);
        DB::table('transactions')->insert([
            'account_id' => '1',
            'fechaHora' => '2018-2-15',
            'tipo' => 'R',
            'cantidad' => '200'
        ]);

        DB::table('transactions')->insert([
            'account_id' => '2',
            'fechaHora' => '2018-2-12',
            'tipo' => 'I',
            'cantidad' => '512'
        ]);
        DB::table('transactions')->insert([
            'account_id' => '2',
            'fechaHora' => '2018-2-15',
            'tipo' => 'R',
            'cantidad' => '251'
        ]);
    }
}
