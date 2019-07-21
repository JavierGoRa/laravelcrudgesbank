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
            'numMovimiento' =>'2542',
            'account_id' => '1',
            'fechaHora' => '2018-2-12',
            'tipo' => 'I',
            'concepto' => 'Integro',
            'cantidad' => '100',
            'saldo' => '500'
        ]);
        DB::table('transactions')->insert([
            'numMovimiento' =>'5847',
            'account_id' => '1',
            'fechaHora' => '2018-2-15',
            'tipo' => 'R',
            'concepto' => 'Reitegro',
            'cantidad' => '200',
            'saldo' => '300'
        ]);

        DB::table('transactions')->insert([
            'numMovimiento' =>'9632',
            'account_id' => '1',
            'fechaHora' => '2018-2-17',
            'tipo' => 'I',
            'concepto' => 'Integro',
            'cantidad' => '600',
            'saldo' => '900'        ]);
        DB::table('transactions')->insert([
            'numMovimiento' =>'8475',
            'account_id' => '1',
            'fechaHora' => '2018-2-21',
            'tipo' => 'R',
            'concepto' => 'Reitegro',
            'cantidad' => '100',
            'saldo' => '800'        ]);
        //factory(Transaction::class)->times(20)->create();

    }
}
